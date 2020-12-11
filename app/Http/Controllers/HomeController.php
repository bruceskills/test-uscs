<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\StudentServiceInterface;
use App\Services\Interfaces\TeacherServiceInterface;
use App\Services\Interfaces\ClassesServiceInterface;
use App\Services\Interfaces\CoursesServiceInterface;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $student;
    protected $teacher;
    protected $classes;
    protected $courses;

    public function __construct(StudentServiceInterface $student, TeacherServiceInterface $teacher, ClassesServiceInterface $classes, CoursesServiceInterface $courses)
    {
        $this->courses = $courses;
        $this->student = $student;
        $this->teacher = $teacher;
        $this->classes = $classes;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = $this->courses->all();
        $classes = $this->classes->all();
        $students = $this->student->all();
        $teachers = $this->teacher->all();
        return View::make('home', compact('students', 'teachers', 'classes', 'courses'));
    }
}
