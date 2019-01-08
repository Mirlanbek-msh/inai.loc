<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    protected $casts = [
        'title' => 'json',
        'description' => 'json',
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class, 'category_id');
    }

    public function getTitleLangAttribute()
    {
        return $this->title[app()->getLocale()] ? $this->title[app()->getLocale()] : $this->title['ru'];
    }

    public function getDescriptionLangAttribute()
    {
        return $this->description[app()->getLocale()];
    }
}
