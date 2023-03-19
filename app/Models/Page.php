<?php

namespace App\Models;

use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;

    public function getImage()
    {
        return $this->image ?? asset('images/placeholders/meta.jpg');
    }
}
