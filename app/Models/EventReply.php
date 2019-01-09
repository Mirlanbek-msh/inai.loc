<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use Illuminate\Support\Facades\File;

class EventReply extends Model
{
    protected $fillable = [
        'org_name',
        'full_name',
        'phone',
        'email',
        'seen',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function removeOldImages()
    {
        if($this->file)
        {
            File::deleteDirectory('uploads/events/'.$this->event->id.'/replies/'.$this->id.'/');
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
