<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'user_id'];

    //Relacion Uno a Muchos Inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion Muchos a Muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion Uno a Uno Polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
