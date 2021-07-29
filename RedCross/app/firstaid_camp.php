<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class firstaid_camp extends Model
{
    protected $primaryKey = 'fc_id';
    //fillable fields
    protected $fillable = ['fname', 'lname','organization','no','street','city','phoneno','date','event','location','nic'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
