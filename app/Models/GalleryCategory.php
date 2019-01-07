<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            // ... code here
        });

        self::created(function($model){
            $model->lang = app()->getLocale();
            $model->save();
        });

        self::updating(function($model){
            // ... code here

        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
        });
        
        self::deleted(function($model){
            // ... code here
        });
    }
}
