<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
    use Sluggable;

    protected $casts = [
        // 'gallery' => 'json',
        'title' => 'json',
        'description' => 'json',
        'content' => 'json',
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
        'category_id',
        'created_at',
        'content',
        'video_id',
        'link',
    ];

    public function category()
    {
        return $this->belongsTo(PageCategory::class)->withDefault([
            'title' => [
                'ru' => trans('t.no_category'),
                'en' => trans('t.no_category')
            ]
        ]);
    }

    public function getTitleLangAttribute()
    {
        return $this->title[app()->getLocale()] ? $this->title[app()->getLocale()] : $this->title['ru'];
    }

    public function getDescriptionLangAttribute()
    {
        if(array_key_exists(app()->getLocale(), $this->description))
            return $this->description[app()->getLocale()];
        return null;
    }

    public function getContentLangAttribute()
    {
        if(array_key_exists(app()->getLocale(), $this->content))
            return $this->content[app()->getLocale()];
        return null;
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title_lang'
            ]
        ];
    }
}
