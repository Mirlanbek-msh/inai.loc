<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
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
        return $this->description[app()->getLocale()];
    }

    public function getContentLangAttribute()
    {
        return $this->content[app()->getLocale()];
    }
}
