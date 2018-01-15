<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //campos que podem ser alterados
    protected $fillable = ['name', 'phone', 'email'];

    //lista de campos que não podem ser alterados
    //protected $guarded = ['id', 'created_at', 'updated_at'];
}
