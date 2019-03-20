<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'module';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'nr',
        'label',
        'ects',
        'professor',
        'content',
        'learning_goals',
        'literature',
        'preliminary_knowledge',
        'preliminary_work',
        'examination',
        'exam_duration',
        'comment',
    ];



    public function curriculum()
    {
        return $this->hasOne(Curriculum::class, 'module_id')->withDefault();
    }

    public function getNrLabelAttribute()
    {
        return "$this->nr $this->label";
    }
}
