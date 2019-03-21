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
        'licensed',

        'label',
        'degree',
        
        'label_ru',
        'degree_ru',
    ];

    public function getLabelLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->label_ru) > 0) return $this->label_ru;
        return $this->label;
    }

    public function getDegreeLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->degree_ru) > 0) return $this->degree_ru;
        return $this->degree;
    }


    public function specialisations()
    {
        return $this->hasMany(Specialisation::class, 'program_id');
    }


}
