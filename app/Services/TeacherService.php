<?php
namespace App\Services;


use App\Models\Teachers;
use App\User;
use App\Services\Interfaces\TeacherServiceInterface;

class TeacherService implements TeacherServiceInterface
{

    /**
     * TeacherService constructor.
     */
    public function __construct()
    {

    }


    public function all()
    {
        return Teachers::get();
    }

}
