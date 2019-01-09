<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class PostCategory extends Model
{
    use Sluggable;


    protected $fillable = [
        'title',
        'description',
        'status'
    ];

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

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
