<?php

namespace App;
use App\Acceptor;
use App\Donor;
use App\Message;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NotificationChannels\WebPush\HasPushSubscriptions; 
class User extends Authenticatable
{
    use Notifiable;
    use HasPushSubscriptions; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function messages()
{
  return $this->hasMany(Message::class);
}
public function donor(){
    return $this->belongsTo('App\Donor', 'user_id');
}
public function acceptor(){
    return $this->belongsTo('App\Acceptor', 'user_id');
}
}
