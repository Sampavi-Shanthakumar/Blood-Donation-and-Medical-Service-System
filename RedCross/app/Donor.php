<?php

namespace App;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $primaryKey = 'donor_id';
    protected $dates = ['dobDate'];
    //fillable fields
    protected $fillable = ['name', 'lname','no','street','city','phoneno','gender','dobDate','age','nic','bg_id','donatedDate','user_id'];
    
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
