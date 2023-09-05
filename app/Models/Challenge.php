<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $casts = ['published_at' => 'date'];
    protected $with = ['company'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    protected $fillable = [
        'title', 'subtitle', 'description', 'company', 'published', 'slug'
    ];

    public function isPublished()
    {
        if (! $this->published) {
            return false;
        }
        return true;
    }

    
}
