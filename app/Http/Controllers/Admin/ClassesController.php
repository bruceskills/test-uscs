<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ClassesServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ClassesController extends Controller
{

    protected $classes;

    public function __construct(ClassesServiceInterface $classes)
    {
        $this->classes = $classes;
        $this->middleware('auth');
    }

    public function index()
    {
        $classes = $this->classes->all();
        return View::make('admin.classes', compact('classes'));
    }

    public function create(Request $request)
    {
        $students = $this->student->create($request);
        return redirect()->back()->with('success', 'Aluno cadastrado com sucesso!');
    }
}
