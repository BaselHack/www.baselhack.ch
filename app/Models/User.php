<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasFactory, Notifiable, LogsActivity, SoftDeletes;

    protected $guarded = [''];
    protected static $logAttributes = [
        'name',
        'email',
        'password',
        'profile_published',
        'profile_gravatar',
        'profile_website',
        'profile_github',
        'profile_twitter',
        'profile_linkedin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function getProfileImage()
    {
        if($this->profile_gravatar)
        {
            $hash = md5(strtolower(trim($this->profile_gravatar)));
            return 'https://www.gravatar.com/avatar/'.$hash.'?s=500&d=mp';
        }

        return asset('images/placeholders/profile.png');
        
    }



}
