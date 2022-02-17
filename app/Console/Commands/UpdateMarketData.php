<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Token;
use App\Custom\BlockchainData;
class UpdateMarketData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:marketdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->blockchainData = new BlockchainData;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $tokens = Token::all();
       $count = 0;
       foreach($tokens as $token){
        $count ++;
           $getPrice = $this->blockchainData->getTokenPrice($token);
           $getVol = $this->blockchainData->dailyVolume($token);
           // if ($count == 2) {
           //      dd($getPrice['data']['ethereum']);
           // }
          
           // dd($getVol);

            $price = $getPrice['data']['ethereum']['dexTrades'][0]['quotePrice'];

            $volDexTrades = $getVol['data']['ethereum']['dexTrades'];

            $vol24 = 0;
            foreach( $volDexTrades as $trades ){
                $vol24 = $vol24 + $trades['baseAmount'];
            }

           
           $token->price = $price;
           $token->volume_24 = $vol24;
           $token->save();
       }
    }

}
