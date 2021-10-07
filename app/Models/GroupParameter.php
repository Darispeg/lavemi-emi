<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupParameter extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'user_id'];

    //Relacion Uno a Muchos
    public function parameters(){
        return $this->hasMany(Parameter::class);
    }
}
