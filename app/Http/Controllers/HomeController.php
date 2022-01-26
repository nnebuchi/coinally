<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    function query(){
        $query = <<<GQL
            query {
                bitcoin {
                    blocks {count}
                }
            }
            GQL;

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-KEY'=>'BQYshahSPmMeRFldJmCee0NNDaOVQnU1',
            ])->post('https://graphql.bitquery.io/', [
                'query' => $query
            ]);


            dump($response->json());
    }




    function query2(){
        $query = <<<GQL
            query {
                ethereum(network: bsc) {
                    dexTrades(
                    options: {asc: "block.timestamp.time", limit: 10, offset: 0}
                    date: {since: "2022-01-01", till: "2022-01-02"}
                    ) {
                    block {
                        timestamp {
                        time(format: "%Y-%m-%d %H:%M:%S")
                        }
                        height
                    }
                    tradeIndex
                    protocol
                    exchange {
                        fullName
                    }
                    smartContract {
                        address {
                        address
                        annotation
                        }
                    }
                    buyAmount
                    buyCurrency {
                        address
                        symbol
                        tokenId
                    }
                    sellAmount
                    sellCurrency {
                        address
                        symbol
                        tokenId
                    }
                    transaction {
                        hash
                    }
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


            dump($response->json());
    }
    function query3(){
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


            dump($response->json());
    }
    

    // current price off a token
    function query4(){
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


            dump($response->json());
    }


    // daily volume of a pair
    function query6(){
        $query = <<<GQL
            query {
                ethereum(network: ethereum) {
                    dexTrades(options: {limit: 100, asc: "timeInterval.day"}, 
                      date: {since:"2022-01-22"}
                      exchangeName: {is: "Uniswap"}, 
                      baseCurrency: {is: "0xdac17f958d2ee523a2206206994597c13d831ec7"}, 
                      quoteCurrency: {is: "0xc02aaa39b223fe8d0a0e5c4f27ead9083c756cc2"}) {
                      
                      
                      timeInterval {
                        day(count: 1)
                      }
                
                    
                      baseCurrency {
                        symbol
                        address
                      }
                      baseAmount
                      quoteCurrency {
                        symbol
                        address
                      }
                      quoteAmount
                      
                      trades: count
                      quotePrice
                      
                      maximum_price: quotePrice(calculate: maximum)
                      minimum_price: quotePrice(calculate: minimum)
                      
                      open_price: minimum(of: block get: quote_price)
                      close_price: maximum(of: block get: quote_price)
                          tradeAmount(in: USDT)
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


            dump($response->json());
    }
    
}
