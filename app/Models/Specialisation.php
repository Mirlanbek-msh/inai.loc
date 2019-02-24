<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function curricula()
    {
        return $this->hasMany(Curriculum::class);
    }
}
