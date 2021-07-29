<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blood_campaign extends Model
{
    protected $primaryKey = 'bc_id';
    //fillable fields
    protected $fillable = ['location', 'event_date','hospital'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
