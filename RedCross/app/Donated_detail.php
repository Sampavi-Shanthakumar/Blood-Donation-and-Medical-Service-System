<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donated_detail extends Model
{
    protected $primaryKey = 'dd_id';
    //fillable fields
    protected $fillable = ['location', 'donateDate','user_id'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
