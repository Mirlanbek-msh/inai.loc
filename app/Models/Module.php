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
        'ects',
        
        'nr',
        'label',
        'professor',
        'content',
        'learning_goals',
        'literature',
        'preliminary_knowledge',
        'preliminary_work',
        'examination',
        'exam_duration',
        'comment',

        'label_ru',
        'professor_ru',
        'content_ru',
        'learning_goals_ru',
        'literature_ru',
        'preliminary_knowledge_ru',
        'preliminary_work_ru',
        'examination_ru',
        'exam_duration_ru',
        'comment_ru',
    ];

    public function getLabelLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->label_ru) > 0) 
            return $this->label_ru;
        return $this->label;
    }

    public function getProfessorLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->professor_ru) > 0) return $this->professor_ru;
        return $this->professor;
    }

    public function getContentLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->content_ru) > 0) return $this->content_ru;
        return $this->content;
    }

    public function getLearningGoalsLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->learning_goals_ru) > 0) return $this->learning_goals_ru;
        return $this->learning_goals;
    }

    public function getLiteratureLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->literature_ru) > 0) return $this->literature_ru;
        return $this->literature;
    }

    public function getPreliminaryKnowledgeLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->preliminary_knowledge_ru) > 0) return $this->preliminary_knowledge_ru;
        return $this->preliminary_knowledge;
    }

    public function getPreliminaryWorkLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->preliminary_work_ru) > 0) return $this->preliminary_work_ru;
        return $this->preliminary_work;
    }

    public function getExaminationLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->examination_ru) > 0) return $this->examination_ru;
        return $this->examination;
    }

    public function getExamDurationLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->exam_duration_ru) > 0) return $this->exam_duration_ru;
        return $this->exam_duration;
    }

    public function getCommentLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->comment_ru) > 0) return $this->comment_ru;
        return $this->comment;
    }

    public function obligatoryCatalogue()
    {
        return $this->hasOne(ObligatoryCatalogue::class, 'obligatory_module_id', 'ID');
    }

    public function curricula()
    {
        return $this->hasMany(Curriculum::class, 'module_id');
    }

    public function getNrLabelAttribute()
    {
        return "$this->nr $this->label";
    }
}
