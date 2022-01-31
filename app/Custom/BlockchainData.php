<?php 

namespace App\Custom;


use Illuminate\Support\Facades\Http;
// use App\Models\Organisation;
// use App\Models\Payment;
// use Braintree\Gateway;
// use App\Custom\SubscriptionManager;

class BlockchainData
{
	// protected $bitqueryAPIKey = env('BITQUERY_API_KEY');

	function __construct()
	{
        // $this->generic = new Generic;

        // $this->braintree = new Gateway([
        //     'environment' => env('BRAINTREE_ENVIRONMENT'),
        //     'merchantId' => env("BRAINTREE_MERCHANT_ID"),
        //     'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
        //     'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        // ]);
        
        $this->bitqueryAPIKey = env('BITQUERY_API_KEY');

	}

    function getTokenData($token){

        $query = <<<GQL
            query {
                ethereum(network: ethereum) {
                    dexTrades(
                      options: {limit: 100, asc: "timeInterval.day"}
                      date: {since: "2022-01-22T13:44", till: "2022-01-23T13:44"}
                      exchangeName: {is: "Uniswap"}
                      baseCurrency: {is: "0xc02aaa39b223fe8d0a0e5c4f27ead9083c756cc2"}
                      quoteCurrency: {is: "0xdac17f958d2ee523a2206206994597c13d831ec7"}
                    ) {
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
                      open_price: minimum(of: block, get: quote_price)
                      close_price: maximum(of: block, get: quote_price)
                      tradeAmount(in: USDT)
                      timeInterval {
                        day(count: 1)
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

    function getTokenPrice($token){
        // dd($token);
        $baseAddr = $token->base_address;
        $quoteAddr = $token->quote_address;
        // dd($quoteAddr);
      $query = <<<GQL
            query {
                ethereum(network: ethereum) {
                    dexTrades(
                    baseCurrency: {is: "$baseAddr"}
                    quoteCurrency: {is: "$quoteAddr"}
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

    public function dailyVolume(){
        return date('c', time());
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