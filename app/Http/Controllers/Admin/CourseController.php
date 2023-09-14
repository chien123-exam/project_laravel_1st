<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    protected $coursesModel;

    public function __construct(Course $course)
    {
        $this->coursesModel = $course;
    }

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $courses = Course::withCount('user');

        if (!empty($keyword)) {
            $courses->where('name', 'like', '%' . $keyword . '%');
        }

        $coursePaginate = $courses->paginate(5);

        return view('courses.index', [
            'coursePaginate' => $coursePaginate
        ]);
    }

    public function create()
    {
        return view('courses.form');
    }

    public function destroy(string $id)
    {

        $this->coursesModel->findOrFail($id)->delete();

        return redirect()->route('course.index');
    }
}
