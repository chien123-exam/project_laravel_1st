<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{
    protected $courseModel;

    public function __construct(Course $course)
    {
        $this->courseModel = $course;
    }

    public function index()
    {
        // Lấy giá trị cartItemCount từ session (nếu có)
        $cartItemCount = Session::get('cartItemCount', 0);

        $courses = $this->courseModel->all();

        return view('coursepage.index', compact('courses', 'cartItemCount'));
    }
}
