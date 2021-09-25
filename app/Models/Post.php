<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use HasFactory, LogsActivity;
    protected static $logName = "post_log";
    protected static $logAttributes = ['post_title','content'];
}
