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
       foreach($tokens as $token){
           $response = $this->blockchainData->getTokenData($token);
           $token->price = $response->price;
           $token->volume_24 = $response->volume;
           $token->save();
       }
    }
}
