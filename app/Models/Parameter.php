<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'user_id'];

    //Relacion Uno a Muchos Inversa
    public function groupParemeter(){
        return $this->belongsTo(GroupParameter::class);
    }

    //Relacion Uno a Uno Polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
