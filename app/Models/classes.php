<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    public function Classes(){
        return $this->hasMany(Student::class);
    }
}
