<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ClassesServiceInterface;
use App\Services\Interfaces\CoursesServiceInterface;
use App\Services\Interfaces\StudentServiceInterface;
use App\Services\Interfaces\TeacherServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StudentController extends Controller
{

    protected $student;

    public function __construct(StudentServiceInterface $student)
    {
        $this->student = $student;
        $this->middleware('auth');
    }

    public function index()
    {
        $students = $this->student->all();
        return View::make('admin.students', compact('students'));
    }

    public function create(Request $request)
    {
        $students = $this->student->create($request);
        return redirect()->back()->with('success', 'Aluno cadastrado com sucesso!');
    }
}
