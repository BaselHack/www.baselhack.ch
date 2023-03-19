<?php

namespace App\Models;

use App\Traits\IsPublishable;
use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model
{
    use HasFactory;
    use HasUuid;
    use IsPublishable;
    use SoftDeletes;
}
