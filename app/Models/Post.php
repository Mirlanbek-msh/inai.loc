<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\User;
use Illuminate\Support\Facades\File;
// use Laravel\Scout\Searchable;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Sluggable;
    // use Searchable;
    use Notifiable;

    protected $casts = [
        'gallery' => 'json',
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
        'to_banner',
        'category_id',
        'created_at',
        'content',
        'video_id',
        'author'
    ];

    public function getYouTubeVideoId()
    {
        $youtube_video_id = $this->video_id;
        if(strpos($youtube_video_id, 'youtu.be') !== false){
            $offset = strpos($youtube_video_id, 'youtu.be');
            $offset += 9;
            return substr($youtube_video_id, $offset);
        }else if(strpos($youtube_video_id, 'youtube.com/watch?v=') !== false){
            $offset = strpos($youtube_video_id, 'youtube.com/watch?v=');
            $offset += 20;
            return substr($youtube_video_id, $offset);
        }
        return $youtube_video_id;
    }

    public function getImageAttribute($value)
    {
        if($value) return $value;
        return asset('uploads/posts/default.jpg');
    }

    public function getLink()
    {
        return route('web.post.show', $this->slug);
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class)->withDefault([
            'title' => trans('t.no_category')
        ]);
    }

    public function getAuthorAttribute($value)
    {
        if($value) return $value;
        return 'INAI.KG';
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags', 'post_id', 'tag_id');
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
        if($this->image)
        {
            File::deleteDirectory("uploads/posts/$this->id/");
        }
    }
    
    public function removeOldGallery()
    {
        if($this->image)
        {
            File::deleteDirectory("uploads/posts/$this->id/gallery");
        }
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
            $model->removeDirectory();
        });
        
        self::deleted(function($model){
            // ... code here
        });
    }

    public function getTagsAttribute($value)
    {
        return implode(',', $this->tags()->get()->pluck('title')->toArray());
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    // public function toSearchableArray()
    // {
    //     $array = $this->toArray();
        
    //     $month = substr($this->created_at, 0, 7);

    //     return array(
    //         'id' => $array['id'], 
    //         'title' => $array['title'],
    //         'description' => $array['description'],
    //         'status' => $array['status'],
    //         '_tags' => $this->tags,
    //         'added_month' => $month,
    //         'category' => $this->getCategoryName(),
    //         'country' => $this->getCountryName(),
    //     );
    // }

    // public function searchableAs()
    // {
    //     return 'posts_index';
    // }
}
