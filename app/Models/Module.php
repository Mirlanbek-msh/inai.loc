<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
   // protected $connection = 'mysql2';
    protected $table = 'modules';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'ects',

        'nr',
        'label',
        'professor',
        'learning_goals',
        'literature',
        'preliminary_knowledge',
        'preliminary_work',
        'examination',

        'level',
        'lecturer',
        'teaching_lang',
        'workload',
        'courses',
        'selfstudy_time',
        'course_struc',
        'sp_skills',
        'spec_req',
        'link',

        'comment',

        'label_ru',
        'professor_ru',
        'learning_goals_ru',
        'literature_ru',
        'preliminary_knowledge_ru',
        'preliminary_work_ru',
        'examination_ru',

        'level_ru',
        'lecturer_ru',
        'teaching_lang_ru',
        'workload_ru',
        'courses_ru',
        'selfstudy_time_ru',
        'course_struc_ru',
        'sp_skills_ru',
        'spec_req_ru',
        'link_ru',

        'comment_ru',
    ];

    public function getLevelLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->level_ru) > 0) return $this->level_ru;
        return $this->level;
    }

   public function getLecturerLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->lecturer_ru) > 0) return $this->lecturer_ru;
        return $this->lecturer;
    }

    public function getTeachingLangLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->teaching_lang_ru) > 0) return $this->teaching_lang_ru;
        return $this->teaching_lang;
    }

    public function getWorkloadLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->workload_ru) > 0) return $this->workload_ru;
        return $this->workload;
    }

    public function getCoursesLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->courses_ru) > 0) return $this->courses_ru;
        return $this->courses;
    }

    public function getSelfstudyTimeLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->selfstudy_time_ru) > 0) return $this->selfstudy_time_ru;
        return $this->selfstudy_time;
    }

    public function getCourseStrucLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->course_struc_ru) > 0) return $this->course_struc_ru;
        return $this->course_struc;
    }

    public function getSpSkillsLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->sp_skills_ru) > 0) return $this->sp_skills_ru;
        return $this->sp_skills;
    }

    public function getSpecReqLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->spec_req_ru) > 0) return $this->spec_req_ru;
        return $this->spec_req;
    }

    public function getLinkLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->link_ru) > 0) return $this->link_ru;
        return $this->link;
    }

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


    public function getCommentLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->comment_ru) > 0) return $this->comment_ru;
        return $this->comment;
    }

    public function obligatoryCatalogue()
    {
        return $this->hasOne(ObligatoryCatalogue::class, 'obligatory_module_id', 'id');
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
