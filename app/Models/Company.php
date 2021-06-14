<?php

namespace App\Models;

use App\Traits\IsPublishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Traits\LogsActivity;

class Company extends Model
{
    const COMPANY_TYPE_SPONSOR = 'sponsor';
    const COMPANY_TYPE_PARTNER = 'partner';

    use HasFactory, IsPublishable, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function getImage()
    {
        return $this->image ? Storage::url($this->image) : null;
    }

}
