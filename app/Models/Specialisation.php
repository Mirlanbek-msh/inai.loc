<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'specialisation';
    protected $primaryKey = 'ID';
    public $timestamps = false;


    public function modules()
    {
        return $this->hasMany(Module::class, 'module_id');
    }

    public function curricula()
    {
        return $this->hasMany(Curriculum::class, 'specialisation_id');
    }
}
