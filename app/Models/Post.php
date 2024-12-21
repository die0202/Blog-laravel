<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'post';

    use HasFactory;

    protected function title():Attribute
    {

        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }

    protected function casts():array
    {
        return ['published_at'=>'datetime', 'is_active'=>'boolean'];
    }








}
