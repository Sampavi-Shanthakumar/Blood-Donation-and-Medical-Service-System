<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'admin_id';
    //fillable fields
    protected $fillable = ['name', 'lname','no','street','city','phoneno','gender','dopDate','age','nic','user_id'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
