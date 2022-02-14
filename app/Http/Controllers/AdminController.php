<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chain;
use App\Models\Token;
use App\Models\Exchange;
use App\Custom\SanitizeInput;
use Storage;
class AdminController extends Controller
{   
    function __construct(){
        $this->clean = new SanitizeInput;
    }
    function index(){

        $networks = $data['networks'] = Chain::all();
        $exchanges = $data['exchanges'] = Exchange::all();
        $tokens = $data['tokens'] = Token::with('chain')->get();
        return view('admin.index')->with($data);
    }

    function addToken(Request $request){
        // dd($request);
        $token = new Token;
        $token->long_name = $this->clean->sanitize($request->long_name);
        $token->symbol = $this->clean->sanitize($request->symbol);
        $token->quote_currency = $this->clean->sanitize($request->quote_currency);
        $token->quote_address = $this->clean->sanitize($request->quote_address);
        $token->base_address = $this->clean->sanitize($request->base_address);
        $token->exchange_id = $this->clean->sanitize($request->exchange);
        $token->chain_id = $this->clean->sanitize($request->network);
        $token->long_name = $this->clean->sanitize($request->long_name);
        if ($request->hasFile('logo')) {
            $logo         = $request->logo;
            $logoName = $logo->getClientOriginalName();
            $logoExt = $logo->getClientOriginalExtension();
            $logoName = pathinfo($logo, PATHINFO_FILENAME);
            $logoToDb = $logoName . '_' . time() . '.' . $logoExt;
            $savelogo = $logo->storeAs('public/token_icons', $logoToDb);

            $token->logo = $logoToDb;
        }
        $token->save();

        Session(['msg'=>'New token added', 'alert'=>'success']);
        return redirect()->back();

        
    }

    function updateToken(Request $request){
        // dd($request);
        $token = Token::where('id', $request->id)->first();
        $token->long_name = $this->clean->sanitize($request->long_name);
        $token->symbol = $this->clean->sanitize($request->symbol);
        $token->quote_currency = $this->clean->sanitize($request->quote_currency);
        $token->quote_address = $this->clean->sanitize($request->quote_address);
        $token->base_address = $this->clean->sanitize($request->base_address);
        $token->exchange_id = $this->clean->sanitize($request->exchange);
        $token->chain_id = $this->clean->sanitize($request->network);
        $token->long_name = $this->clean->sanitize($request->long_name);
        if ($request->hasFile('logo')) {
           if (file_exists('.' . Storage::url('app/public/token_icons'.$token->logo)) && is_file('.' . Storage::url('app/public/token_icons'.$token->logo))) {
                
                    unlink('.' . Storage::url('app/public/token_icons'.$token->logo));
            }
            $logo         = $request->logo;
            $logoName = $logo->getClientOriginalName();
            $logoExt = $logo->getClientOriginalExtension();
            $logoName = pathinfo($logo, PATHINFO_FILENAME);
            $logoToDb = $logoName . '_' . time() . '.' . $logoExt;
            $savelogo = $logo->storeAs('public/token_icons', $logoToDb);

            $token->logo = $logoToDb;
        }else{
            $token->logo = $request->current_photo;
            
        }
        $token->save();

        Session(['msg'=>'token updated', 'alert'=>'success']);
        return redirect()->back();
    }

    function deleteToken(Request $request){
        $token = Token::where('id', $request->token_id)->first();
         if (file_exists('.' . Storage::url('app/public/token_icons'.$token->logo)) && is_file('.' . Storage::url('app/public/token_icons'.$token->logo))) {
                
            unlink('.' . Storage::url('app/public/token_icons'.$token->logo));
        }
        Token::where('id', $request->token_id)->delete();
        Session(['msg'=>'token deleted', 'alert'=>'success']);
        return redirect()->back();
    }
}
