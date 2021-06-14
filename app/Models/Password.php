<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Password extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
