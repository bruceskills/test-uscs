<?php
namespace App\Services;


use App\Models\Courses;
use App\User;
use App\Services\Interfaces\CoursesServiceInterface;

class CoursesService implements CoursesServiceInterface
{

    /**
     * CoursesService constructor.
     */
    public function __construct()
    {

    }


    public function all()
    {
        return Courses::get();
    }

}
