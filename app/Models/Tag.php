<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Tag extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'status'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_tags');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'events_tags');
    }

    public function toggleStatus()
    {
        $this->status = !$this->status;
        $this->save();
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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
