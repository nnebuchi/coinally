<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Chain;
use App\Models\Token;
use Response;

class APIController extends Controller
{
    private $token;
    function __construct(){
        $this->token = 'eyJhbGciOiJIUzUxMiJ9.eyJSb2xlIjoiQWRtaW4iLCJJc3N1ZXIiOiJJc3N1ZXIiLCJVc2VybmFtZSI6IkphdmFJblVzZSIsImV4cCI6MTY0MzEwNTQ0MiwiaWF0IjoxNjQzMTA1NDQyfQ.HHjIscWL29AHwVpN-KRdHvp6DAC_wv1qL6zG2CDCX9ftHuTepe-dBfqKL0M31Sn_Wd6A8y3zNnVyAK195s4oXQ';
    }
    public function getNetworks(Request $request){
        // return Response::json([
        //     'status'=>'success',
        //     'bearerToken'=>$request->bearerToken(),
        //     'access_token'=>$this->token
        // ], 200);
        if (!$request->hasHeader('authorization')) {
           return Response::json([
                'status'=>'fail',
                'message'=>'missing authorization header'
            ], 406);
        }
        if ($request->bearerToken() != $this->token) {
             return Response::json([
                'status'=>'fail',
                'message'=>'invalid bearer token'
            ], 406);
        }
        
        $networks = Chain::all();
        // $tokens = Token::paginate(10);

        return Response::json([
            'status'=>'success',
            'networks'=>$networks
        ], 200);
    }



    public function getTokens(Request $request){
        
        if (!$request->hasHeader('authorization')) {
           return Response::json([
                'status'=>'fail',
                'message'=>'missing authorization header'
            ], 406);
        }
        if ($request->bearerToken() != $this->token) {
             return Response::json([
                'status'=>'fail',
                'message'=>'invalid bearer token'
            ], 406);
        }
        $tokens = Token::all();
        // $tokens = Token::paginate(10);

        return Response::json([
            'status'=>'success',
            'networks'=>$tokens
        ], 200);
    }

    // current price off a token
    function currentTokenPrice(){
        if (!$request->hasHeader('authorization')) {
            return Response::json([
                 'status'=>'fail',
                 'message'=>'missing authorization header'
             ], 406);
         }
         if ($request->bearerToken() != $this->token) {
              return Response::json([
                 'status'=>'fail',
                 'message'=>'invalid bearer token'
             ], 406);
         }
        $query = <<<GQL
            query {
                ethereum(network: bsc) {
                    dexTrades(
                    baseCurrency: {is: "0x0e09fabb73bd3ade0a17ecc321fd13a19e81ce82"}
                    quoteCurrency: {is: "0x55d398326f99059ff775485246999027b3197955"}
                    options: {desc: ["block.height", "transaction.index"], limit: 1}
                    ) {
                    block {
                        height
                        timestamp {
                        time(format: "%Y-%m-%d %H:%M:%S")
                        }
                    }
                    transaction {
                        index
                    }
                    baseCurrency {
                        symbol
                    }
                    quoteCurrency {
                        symbol
                    }
                    quotePrice
                    
                    }
                }
            }
            GQL;

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-KEY'=>'BQYshahSPmMeRFldJmCee0NNDaOVQnU1',
            ])->post('https://graphql.bitquery.io/', [
                'query' => $query
            ]);


           return $response->json();
    }
}
