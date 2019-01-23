<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;



use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\EventReply;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use Sluggable;
    use Notifiable;

    protected $fillable = [
        'title',
        'description',
        'status',
        'to_banner',
        'deadline_date',
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
        'need_university',
        'need_group_course',
        'need_team_name',
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

    protected $dates = ['created_at', 'updated_at', 'deadline_date'];

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
        if($this->image){
            File::delete($this->image);
            File::delete($this->thumb);
        }
    }

    public function removeDirectory()
    {
        if($this->image || $this->thumb)
        {
            File::deleteDirectory("uploads/events/$this->id/");
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

        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
            $model->removeDirectory();
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

    public function getEventStartDateAttribute()
    {
        if($this->has_end_date){
            $dates = explode(" - ", $this->event_date);
            return Carbon::createFromFormat('H:i d.m.Y', $dates[0], 'Asia/Bishkek');
        }
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->event_date, 'Asia/Bishkek');
    }

    public function getEventStartDateFullAttribute()
    {
        if($this->has_end_date){
            $dates = explode(" - ", $this->event_date);
            $start_date = Carbon::createFromFormat('H:i d.m.Y', $dates[0], 'Asia/Bishkek');
        }else{
            $start_date = Carbon::createFromFormat('Y-m-d H:i:s', $this->event_date, 'Asia/Bishkek');
        }
        return trans('week.'.$start_date->format('w'))
                ." ".$start_date->format('j')." "
                .trans('months_decl.'.$start_date->format('m'))
                .", ".$start_date->format('Y');
    }

    public function getEventEndDateAttribute()
    {
        if($this->has_end_date){
            $dates = explode(" - ", $this->event_date);
            return Carbon::createFromFormat('H:i d.m.Y', $dates[1], 'Asia/Bishkek');
        }
        return null;
    }

    public function getEventEndDateFullAttribute()
    {
        if($this->has_end_date){
            $dates = explode(" - ", $this->event_date);
            $start_date = Carbon::createFromFormat('H:i d.m.Y', $dates[1], 'Asia/Bishkek');
            return trans('week.'.$start_date->format('w'))
                    ." ".$start_date->format('j')." "
                    .trans('months_decl.'.$start_date->format('m'))
                    .", ".$start_date->format('Y');
        }
        return '';
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

    public function getDeadlineDateFormatAttribute()
    {
        return $this->deadline_date ? $this->deadline_date->format('d.m.Y') 
            : $this->event_start_date->format('d.m.Y');
    }

    public function canShowForm()
    {
        return $this->has_signing_up_form && (($this->deadline_date && $this->deadline_date->isFuture()) 
            || (!$this->deadline_date && $this->event_start_date->isFuture()));
    }
    
}
