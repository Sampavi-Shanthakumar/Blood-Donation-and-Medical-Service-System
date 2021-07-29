<?php
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    /**
     * Create a new controller instance.
     *
     * @return void
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
public function __construct()

{

    $this->middleware('guest')->except('logout');

}
    }