<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $primaryKey = 'post_id';
    //fillable fields
    protected $fillable = ['title', 'message'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
