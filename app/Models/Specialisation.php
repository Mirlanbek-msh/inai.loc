<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'specialisation';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'label',
        'program_id',
    ];

    public function curricula()
    {
        return $this->hasMany(Curriculum::class, 'specialisation_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
