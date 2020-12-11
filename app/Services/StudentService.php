<?php
namespace App\Services;


use App\Models\Student;
use App\User;
use App\Services\Interfaces\StudentServiceInterface;
use Illuminate\Support\Facades\Request;

class StudentService implements StudentServiceInterface
{

    /**
     * StudentService constructor.
     */
    public function __construct()
    {

    }


    public function all()
    {
        return Student::get();
    }

    public function create($request='')
    {
        $create = new Student();
        $create->name = $request['name'];
        $create->phone = $request['phone'];
        $create->address = $request['address'];
        $create->save();
    }

}
