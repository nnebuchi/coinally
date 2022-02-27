<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Chain;
use App\Models\Token;
use Illuminate\Http\Response;
use Cookie;

class PagesController extends Controller
{
    public function index(Request $request)
    {   
        // TO DO: refator this code such that if a token is in cookies('starred_tokens') push all properties of tokens into $starred_tokens  and use $starred token to loop starred token at the front.

        // TO DO: refator this code such that if a token is promoted push all properties of tokens into a variable ($promoted) and use $promoted token to loop promoted token at the front.


        $networks = $data['networks'] = Chain::all();
        $tokens = $data['tokens'] = Token::with('chain')->get();
        $minutes = 43800;
        
        
        // if cookies of starred token is not set
        // if (Cookie::get('starred_token') !== null){
        if($request->cookie('starred_token')!=null) {
            $starred_token = $request->cookie('starred_token');

        }else{
            // if cookie of starred token is already set
            $starred_token =json_encode([]);
            $response = new Response;
            $response->withCookie(cookie('starred_token', $starred_token, $minutes));
        }

        $data['starred_token'] = $starred_token;
        // $encrypter = app(\Illuminate\Contracts\Encryption\Encrypter::class);
        // dd($encrypter->decrypt($_COOKIE['starred_token']));
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
