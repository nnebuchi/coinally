<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Chain;
use App\Models\Token;

class PagesController extends Controller
{
    public function index()
    {   
        $networks = $data['networks'] = Chain::all();
        $tokens = $data['tokens'] = Token::with('chain')->get();
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
