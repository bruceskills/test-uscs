<?php
namespace App\Services;


use App\Models\Classes;
use App\User;
use App\Services\Interfaces\ClassesServiceInterface;

class ClassesService implements ClassesServiceInterface
{

    /**
     * ClassesService constructor.
     */
    public function __construct()
    {

    }


    public function all()
    {
        return Classes::get();
    }

}
