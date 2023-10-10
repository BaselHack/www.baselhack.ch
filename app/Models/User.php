<?php

namespace App\Models;

use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use HasUuid;
    use Notifiable;
    use SoftDeletes;

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getProfileImage()
    {
        if ($this->profile_gravatar) {
            $hash = md5(strtolower(trim($this->profile_gravatar)));

            return 'https://www.gravatar.com/avatar/'.$hash.'?s=500&d=mp';
        }

        return asset('images/placeholders/profile.png');
    }

    public function scopeActive($query)
    {
<<<<<<< HEAD
        return $query->where(['profile_published' => true, 'alumni' => false]);
=======
        return $query->where(['profile_published' => true])->whereIn('id', [1, 8, 11, 17, 12, 15, 14, 16, 6]);
>>>>>>> 95ef9e788a9c5824c35220d9adb2a1e91f3a6dc8
    }

    public function scopeAlumni($query)
    {
        return $query->where(['profile_published' => true, 'alumni' => true]);
    }
}
