<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Specialisation extends Model
{
    use Sluggable;

    protected $connection = 'mysql2';
    protected $table = 'specialisation';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'program_id',

        'label',
        'label_ru',
    ];

    public function getLabelLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->label_ru) > 0) return $this->label_ru;
        return $this->label;
    }

    public function curricula()
    {
        return $this->hasMany(Curriculum::class, 'specialisation_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'label'
            ]
        ];
    }
}
