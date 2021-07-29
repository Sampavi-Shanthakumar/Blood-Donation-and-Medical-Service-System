<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Donor;
use App\Acceptor;
use App\Admin;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {
        $user=Auth::user();
    
        if($user->type == 'admin'){
            return '/admin';
        }
        if($user->type == 'donor'){
            return '/donor';
        }
        if($user->type == 'acceptor'){
            return '/acceptor';
        }
       if($user->type == 'doctor'){
            return '/doctor';
        }
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lname' => ['required', 'string', 'max:255'],
            'no' => ['required'],
            'street' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'phoneno' => ['required'],
            'gender' => ['required'],
            'dobDate' => ['required'],
          
            'nic' => ['required'],
            'bg_id' => ['required'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
           
        ]);
        $type = $user -> type;
        if($type=='donor'){
        
        $userid = $user -> id;
       
        Donor::create([
            'name' => $data['name'],
            'lname' => $data['lname'],
            'no' => $data['no'],
            'street' => $data['street'],
            'city' => $data['city'],
            'phoneno' => $data['phoneno'],
            'gender' => $data['gender'],
            'dobDate' => $data['dobDate'],
          
            'nic' => $data['nic'],
            'bg_id' => $data['bg_id'],
            'donatedDate' => $data['donatedDate'],
            'user_id' => $userid
        ]);
      
        }if($type=='acceptor'){
        
            $userid = $user -> id;
           
            Acceptor::create([
                'name' => $data['name'],
                'lname' => $data['lname'],
                'no' => $data['no'],
                'street' => $data['street'],
                'city' => $data['city'],
                'phoneno' => $data['phoneno'],
                'gender' => $data['gender'],
                'dobDate' => $data['dobDate'],
               
                'nic' => $data['nic'],
                'user_id' => $userid
            ]);
          
            } if($type=='admin'){
        
                $userid = $user -> id;
               
                Admin::create([
                    'name' => $data['name'],
                    'lname' => $data['lname'],
                    'no' => $data['no'],
                    'street' => $data['street'],
                    'city' => $data['city'],
                    'phoneno' => $data['phoneno'],
                    'gender' => $data['gender'],
                    'dobDate' => $data['dobDate'],
                    'age' => $data['age'],
                    'nic' => $data['nic'],
                    'user_id' => $userid
                ]);
              
                }if($type=='doctor'){
        
                    $userid = $user -> id;
                   
                    Doctor::create([
                        'name' => $data['name'],
                        'lname' => $data['lname'],
                        'no' => $data['no'],
                        'street' => $data['street'],
                        'city' => $data['city'],
                        'phoneno' => $data['phoneno'],
                        'gender' => $data['gender'],
                        'dobDate' => $data['dobDate'],
                        'age' => $data['age'],
                        'nic' => $data['nic'],
                        'user_id' => $userid
                    ]);
                  
                    }
        return $user;
    }
}
