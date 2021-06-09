<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Page extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $guraded = [''];
    protected static $logAttributes = ['index', 'robots','title','description','image'];

    public function getImage()
    {
        return $this->image ?? asset('images/placeholders/meta.jpg');
    }
}
