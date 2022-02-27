<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chain;
use Illuminate\Http\Response;
use Cookie;

class GenericController extends Controller
{
    function tokensByNetwork(Request $request){
        // dd
        $chain= Chain::where('id', $request->chain_id)->first();
        $tokens  = $chain->tokens()->get();
        return json_encode(['status'=>'success', 'chain'=>$chain, 'tokens'=>$tokens]);
    }

    function addStarredToken(Request $request){
        
        $minutes = 43800;
        $token = $request->coin;
        // if cookies of starred token is set
        
         if($request->cookie('starred_token')!=null) {
            $starred_token = $request->cookie('starred_token');
            $starred_token =json_decode($starred_token);

        }else{
            // if cookie of starred token isnot set
            $starred_token =[];
            // setcookie('starred_token', json_encode($starred_token), $minutes);
            // $response->withCookie(cookie('starred_token', json_encode($starred_token), $minutes));

            
            
        }
        // dd(starred_token);
        // if the requested token is not in starred token list
        if (!in_array($token, $starred_token)){
            array_push($starred_token, $token);
            
            $response = new Response;
            $response->withCookie(cookie('starred_token', json_encode($starred_token), $minutes));
            return $response;
        }
        return $starred_token;
        
    }
}
