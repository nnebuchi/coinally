<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chain;

class GenericController extends Controller
{
    function tokensByNetwork(Request $request){
        // dd
        $chain= Chain::where('id', $request->chain_id)->first();
        $tokens  = $chain->tokens()->get();
        return json_encode(['status'=>'success', 'chain'=>$chain, 'tokens'=>$tokens]);
    }
}
