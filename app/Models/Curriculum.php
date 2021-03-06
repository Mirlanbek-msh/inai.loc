<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
   // protected $connection = 'mysql2';
    protected $table = 'curricula';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'semester',
        'specialisation_id',
        'module_id',

        'comment',
        'comment_ru'
    ];

    public function getCommentLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->comment_ru) > 0) return $this->comment_ru;
        return $this->comment;
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'ID')->withDefault([
            'label' => 'No module'
        ]);
    }

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class, 'specialisation_id', 'ID')->withDefault();
    }
}
