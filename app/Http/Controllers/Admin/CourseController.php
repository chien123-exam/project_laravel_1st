<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCourseRequest;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Driver\XdebugNotAvailableException;

class CourseController extends Controller
{
    protected $courseModel;

    public function __construct(Course $course)
    {
        $this->courseModel = $course;
    }

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $course = $this->courseModel->withCount('user');

        if (!empty($keyword)) {
            $course->where('name', 'like', '%' . $keyword . '%');
        }

        $coursePaginate = $course->paginate(5);

        return view('courses.index', [
            'coursePaginate' => $coursePaginate
        ]);
    }

    public function create()
    {
        return view('courses.form');
    }

    public function store(SaveCourseRequest $request)
    {
        $inputs = $request->all();

        $inputs['avatar'] = 'https://via.placeholder.com/200x200.png/003333?text=soluta';

        if ($request->link) {
            $inputs['link'] = Storage::disk('public')->put('media', $request->link);
        }


        // dd($inputs['link']);
        // dd($inputs);

        $course = Course::create($inputs);
        




        return redirect()->route('course.index');
    }

    public function edit($id)
    {
        return view('courses.form', [
            'course' => $this->courseModel->find($id)
        ]);
    }

    public function update(SaveCourseRequest $request, $id)
    {
        $course = $this->courseModel->findOrFail($id);

        $course->update($request->all());

        return redirect()->route('course.index');
    }

    public function destroy(string $id)
    {

        $this->courseModel->findOrFail($id)->delete();

        return redirect()->route('course.index');
    }
}
