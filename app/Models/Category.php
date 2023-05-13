<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // array of columns name that wanted to mass assign it
    // protected $fillable = [
    //     'name' ,
    //     'desc',
    //      'image',
    // ];
    // eh el columns elli ana msh 3awza a3mlo mass assinment
    protected $guarded = [];

    function products(){
        return $this->hasMany(Product::class);
    }
}
