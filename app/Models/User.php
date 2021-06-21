<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guarded = [];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function getProfileImage()
    {
        if ($this->profile_gravatar) {
            $hash = md5(strtolower(trim($this->profile_gravatar)));
            return 'https://www.gravatar.com/avatar/' . $hash . '?s=500&d=mp';
        }

        return asset('images/placeholders/profile.png');

    }

    public function scopeActive($query)
    {
        return $query->where('profile_published', true);
    }


    public function scopeAlumni($query)
    {
        return $query->withTrashed()->whereNotNull('deleted_at')->where('profile_published', true);
    }


}
