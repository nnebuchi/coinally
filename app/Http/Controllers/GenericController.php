<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chain;
use Illuminate\Http\Response;
use App\Models\Token;    
use App\Custom\UserManager;
use App\Models\StarredToken;
use App\Models\User;

class GenericController extends Controller
{
    function __construct(){
        $this->userManager = new UserManager;
    }

    function tokensByNetwork(Request $request){
        // dd
        $chain= Chain::where('id', $request->chain_id)->first();
        $tokens  = $chain->tokens()->get();
        return json_encode(['status'=>'success', 'chain'=>$chain, 'tokens'=>$tokens]);
    }

    function addStarredToken(Request $request){
        $token = Token::where('symbol', $request->coin)->first();
        if(isset($_COOKIE['user'])) {
            
            $user = User::where('cookie', $_COOKIE['user'])->first();
            if (is_null($user)) {
              $user =   $this->userManager->createUser($_COOKIE['user']);
            }
        }else{
            Session(['cookie'=>Str::random(32)]);
            $user = $this->userManager->createUser(session('cookie'));
        }

        $starredCheck = StarredToken::where(['token_id'=>$token->id, 'user_id'=>$user->id])->first();
        if (is_null($starredCheck)) {
            $newStarredToken = new StarredToken;
            $newStarredToken->token_id = $token->id;
            $newStarredToken->user_id = $user->id;

            $newStarredToken->save();
            $status = 'starred';
        }else{
            $status = 'not_starred';
        }


        // $data['user'] = $user;
        return json_encode(['status'=>$status, 'token'=>$token, 'starred_token'=>$user->starredTokens]);
        
    }

    function unStarredToken(Request $request){
        
        $minutes = 43800;
        $coin = $request->coin;
        $token = Token::where(['symbol'=>$coin])->first();
        // dd(session('user'));
        if (!is_null($token)) {
               $starred_token = StarredToken::where(['token_id'=>$token->id, 'user_id'=>session('user')->id])->delete();
        }
        return json_encode(['status'=>'unstarred', 'token'=>$token]);
        
    }
}
