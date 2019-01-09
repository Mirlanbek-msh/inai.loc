<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Gallery extends Model
{
    protected $fillable = [
        'description',
        'status',
        'category_id',
    ];

    protected $casts = [
        'description' => 'json'
    ];

    public function toggleStatus()
    {
        $this->status = !$this->status;
        $this->save();
    }

    public function getDescriptionLangAttribute()
    {
        return $this->description[app()->getLocale()] ? $this->description[app()->getLocale()]: trans('t.not_specified');
    }

    public static function getFilesPath($id = null)
    {
        if($id) return 'uploads/galleries/'.$id.'/';
        return 'uploads/galleries/';
    }

    public function removeOldImages()
    {
        if($this->image)
        {
            File::deleteDirectory(self::getFilesPath($this->id));
        }
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            // $model->lang = app()->getLocale();
            // $model->save();
        });

        self::created(function($model){
            // $model->lang = app()->getLocale();
            // $model->save();
        });

        self::updating(function($model){
            // ... code here

        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
            $model->removeOldImages();
        });

        self::deleted(function($model){
            // ... code here
        });
    }
}
