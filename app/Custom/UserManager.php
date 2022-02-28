<?php 
namespace App\Custom;
use App\Models\User;
use Cookie;
use Illuminate\Http\Response;
use Str;
use Hash;

	/**
	 * summary
	 */
	class UserManager
	{
	    /**
	     * summary
	     */
	    
	    public function createUser($cookie){

	    	$this->createCookie($cookie);
	    	// dd($cookieSet);
	        $user = new User;
	        $user->cookie = $cookie;
	        $user->email = Str::random(10).'@coinanally.com';
	        $user->password = Hash::make(Str::random(8));
	        $user->expires = 60;
	        $user->save();
	        Session(['user'=>$user]);
	        
	        // setcookie('user', $cookie, 60);
	        // $response->withCookie(cookie('user', $cookie, 60));
	        return $user;
	    }

	    function createCookie($cookie){
	    	$time = time()+(3600*24*30);

            setcookie('user', $cookie, $time);
	    }
	}
 ?>