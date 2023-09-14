<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCourseRequest;
use Illuminate\Http\Request;
use App\Models\Course;

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

        $course = $this->courseModel->create($inputs);

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
