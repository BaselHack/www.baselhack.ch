<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Position extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $guraded = [];

    protected static $logAttributes = ['published_at','title','body'];

    protected $casts = [
        'published_at' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
