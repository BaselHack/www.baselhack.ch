<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Newsletter extends Model
{
    use LogsActivity, SoftDeletes;

    protected $guarded = [''];
    protected static $logAttributes = ['company','firstname','lastname','email'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
