<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Favourite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','content','image','user_id','category'
    ];



    public static function getCategoryItem() {
        // This method returns the enum values for product status
        return [
            'Programming' => 'Programming',
            'Design' => 'Design',
            'Fashion' => 'Fashion',
            'Foodie'=>'Foodie',
            'Movie'=>'Movie'

        ];
    }

    // protected $casts = [
    //     'category' => 'string',
    // ];


    public function user(){
        return $this->belongsTo(User::class,);
    }
    public function comments(){
        return $this->hasMany(Comment::class,);
    }
    public function favorites(){
        return $this->hasMany(Favourite::class);
    }
    
    // Post.php


public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites', 'post_id', 'user_id');
    }

    // Method to check if the post is favorited by a specific user
    public function isFavoritedBy(User $user)
    {
        return $this->favoritedBy->contains($user);
    }

   

}
