<?php

namespace App\Models;

use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newsletter extends Model
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;
}
