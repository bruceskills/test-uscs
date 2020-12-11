<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'code_teacher');
    }
}
