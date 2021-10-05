<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, LogsActivity, InteractsWithMedia;

    protected static $logName = "post_log";
    protected static $logAttributes = ['post_title','content'];

    public function registerMediaCollections(): void
    {
        // you can define as many collections as needed
        // $this->addMediaCollection('posts');
            //add options

        $this->addMediaCollection('posts')
            ->useDisk('media');
    }
}
