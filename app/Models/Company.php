<?php

namespace App\Models;

use App\Enums\CompanyTypeEnum;
use App\Traits\IsPublishable;
use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory;
    use HasUuid;
    use IsPublishable;
    use SoftDeletes;

    protected $casts = [
        'type' => CompanyTypeEnum::class.':nullable',
    ];

    public function getImage()
    {
        return $this->image ? Storage::disk(config('filesystems.default'))->url($this->image) : null;
    }
}
