<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Password extends Model
{
    use LogsActivity, SoftDeletes;

    protected $guarded = [''];

    protected $hidden = [
        'password',
    ];

    protected static $logAttributes = ['name', 'username','password','url'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
