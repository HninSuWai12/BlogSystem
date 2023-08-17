<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Favourite;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'role',
        'bio',
        'gender',
        'image'
    ];

    public static function getStatus(){
        return[
            'pending'=>'pending',
            'approved'=>'approved'
        ];
    }
    public static function getRole(){
        return[
            'Admin'=>'admin',
            'User'=>'user'
        ];
    }
    public static function getGender(){
        return[
            'Male'=>'Male',
            'Female'=>'female',
            'Other'=>'other'
        ];
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class,);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }

    
    
public function favorites()
{
    return $this->belongsToMany(Post::class, 'favorites', 'user_id', 'post_id');
}

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
