<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Chain;
use App\Models\Token;
use App\Models\StarredToken;
use Str;    
use App\Custom\UserManager;
use App\Models\User;

class PagesController extends Controller
{
    function __construct(){
        $this->userManager = new UserManager;
    }
    public function index(Request $request)
    {   
        
        
        $networks = $data['networks'] = Chain::all();
        $tokens = $data['tokens'] = Token::with(['chain'])->get();
        // $tokens = $data['vettedTokens'] = Token::with(['chain'])->get();
        // if user cookie is set
        if (isset($_COOKIE['user'])) {
            
            $user = User::where('cookie', $_COOKIE['user'])->first();
            if (is_null($user)) {
              $user =  $this->userManager->createUser($_COOKIE['user']);
            }
        }else{
            Session(['cookie'=>Str::random(32)]);
            $user = $this->userManager->createUser(session('cookie'));
            
        }
        
        $data['user'] = $user;
        if (!session('user')) {
            Session(['user'=>$user]);
        }

        $starrArr= [];

        foreach($user->StarredTokens as $starred){
            array_push($starrArr, $starred->token->symbol);
        }
        // dd($starrArr);
        $data['starrArr']  = $starrArr;
        return view('welcome')->with($data);
    }

    public function tokenData($chain, $address)
    {   
        // dd();
        $data['network'] = $network =  Chain::where('name', $chain)->first();
        $data['coin'] = Token::where(['base_address'=>$address, 'chain_id'=>$network->id])->first();
        
        return view('pages.token-data')->with($data);
    }

    
}
