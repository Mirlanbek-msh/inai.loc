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
}
