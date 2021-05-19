<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function Student(){
        return $this -> belongsTo(Classes::class);
    }
}
