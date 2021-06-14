<?php

namespace App\Models;

use App\Traits\IsPublishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Channel extends Model
{
    use HasFactory, IsPublishable, LogsActivity, SoftDeletes;

    protected $guarded = [''];

    protected static $logAttributes = ['published', 'name','icon','url'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
