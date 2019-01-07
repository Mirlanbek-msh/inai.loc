<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;



use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\EventReply;

class Event extends Model
{
    use Sluggable;
    use Notifiable;

    protected $fillable = [
        'title',
        'description',
        'status',
        'to_banner',
        'created_at',
        'content',
        'video_id',
        'event_date',
        'event_place',
        'event_entrance',

        'author_name',
        'author_phone',
        'author_email',
        'author_desc',

        'has_end_date',
        'has_signing_up_form',
        'need_org_name',
        'need_full_name',
        'need_phone',
        'need_email',
        'need_file',
    ];

    protected $casts = [
        'title' => 'json',
        'description' => 'json',
        'content' => 'json',
        'event_place' => 'json',
        'event_entrance' => 'json',
        'author_name' => 'json',
        'author_desc' => 'json',
        'tags' => 'json',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'events_tags', 'event_id', 'tag_id');
    }

    public function replies()
    {
        return $this->hasMany(EventReply::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function toggleStatus()
    {
        $this->status = !$this->status;
        $this->save();
    }

    public function hasPrevious()
    {
        return self::where('id', '<', $this->id)->max('id');
    }

    public function getPrevious()
    {
        $id = self::where('id', '<', $this->id)->max('id');
        return self::find($id);

    }

    public function hasNext()
    {
        return self::where('id', '>', $this->id)->min('id');
    }

    public function getNext()
    {
        $id = self::where('id', '>', $this->id)->min('id');
        return self::find($id);
    }

    public function removeOldImages()
    {
        if($this->image)
        {
            File::deleteDirectory("uploads/events/$this->id/");
        }
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->lang = app()->getLocale();
            $model->save();
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

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title_lang'
            ]
        ];
    }

    public function getTagsAttribute()
    {
        $tagsRu = implode(',', $this->tags()->where('lang', 'ru')->get()->pluck('title')->toArray());
        $tagsEn = implode(',', $this->tags()->where('lang', 'en')->get()->pluck('title')->toArray());

        return [
            'ru' => $tagsRu,
            'en' => $tagsEn
        ];
    }

    public function getTagsLangAttribute()
    {
        return $this->tags()->where('lang', app()->getLocale())->get();
    }

    public function getTitleLangAttribute()
    {
        return $this->title[app()->getLocale()] ? $this->title[app()->getLocale()] : $this->title['ru'];
    }

    public function getDescriptionLangAttribute()
    {
        return $this->description[app()->getLocale()];
    }

    public function getContentLangAttribute()
    {
        return $this->content[app()->getLocale()];
    }

    public function getTimePlaceDescLangAttribute()
    {
        return $this->time_place_desc[app()->getLocale()];
    }

    public function getEventPlaceLangAttribute()
    {
        return $this->event_place[app()->getLocale()];
    }

    public function getEventEntranceLangAttribute()
    {
        return $this->event_entrance[app()->getLocale()];
    }

    public function getAuthorNameLangAttribute()
    {
        return $this->author_name[app()->getLocale()];
    }

    public function getAuthorDescLangAttribute()
    {
        return $this->author_desc[app()->getLocale()];
    }

    public function getSigninUpDescLangAttribute()
    {
        return $this->signin_up_desc[app()->getLocale()];
    }
    
}
