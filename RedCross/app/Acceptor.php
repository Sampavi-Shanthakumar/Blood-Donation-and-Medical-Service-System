<?php

namespace App;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Acceptor extends Model
{
    protected $primaryKey = 'acceptor_id';
    protected $dates = ['dobDate'];
    //fillable fields
    protected $fillable = ['name', 'lname','no','street','city','phoneno','gender','dobDate','age','nic','user_id'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    public function age() {
        return $this->dobDate->diffInYears(\Carbon::now());
         }
    public function user(){
        $this->belongsTo('App\User') ;
    }
}
