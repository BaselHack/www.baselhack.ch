<?php

namespace App\Models;

use App\Enums\CompanyTypeEnum;
use App\Traits\IsPublishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory, IsPublishable, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'type' => CompanyTypeEnum::class.':nullable',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function getImage()
    {
        return $this->image ? Storage::disk(config('filesystems.default'))->url($this->image) : null;
    }
}
