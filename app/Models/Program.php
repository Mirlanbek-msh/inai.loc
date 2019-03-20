<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'program';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'label',
        'licensed',
        'degree',
    ];


    public function specialisations()
    {
        return $this->hasMany(Specialisation::class, 'program_id');
    }


}
