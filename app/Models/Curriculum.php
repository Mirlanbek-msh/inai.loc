<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'curricula';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'ID')->withDefault();
    }

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class, 'specialisation_id', 'ID')->withDefault();
    }
}
