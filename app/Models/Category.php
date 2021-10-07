<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion Uno a Muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }

    //Relacion Uno a Uno Polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
