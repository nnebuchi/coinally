@extends('layouts.app')
@section('title', 'Coinally')
@section('content')
    
    {{-- <div id="home"></div> --}}

    <div class="container mt-5">

        {{-- <div id="central-logo"></div> --}}
        @include('layouts.components.center-logo')
        <div class="container">
            <div class="price-header">
                BSC Charts
            </div>
            <div class="price">
                View price charts for any token in your wallet (binance smart chain)
            </div>
        </div>
        <form action="">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="input-group mt-4">
                        <input type="text" class="form-control custom-token-form-control" placeholder="Enter token name / address" aria-label="Text input with dropdown button" />
                        <div class="input-group-append">
                            <button class="btn btn-secondary custom-token-search">Go</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card dark-card mt-3 pb-5">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pb-3">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link custom-active active" id="pills-promoted-tab" data-toggle="pill" href="#pills-promoted" role="tab" aria-controls="pills-promoted" aria-selected="true">Promoted</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link custom-active " id="pills-wallet-tab" data-toggle="pill" href="#pills-wallet" role="tab" aria-controls="pills-wallet" aria-selected="false">Wallet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link custom-active " id="pills-starred-tab" data-toggle="pill" href="#pills-starred" role="tab" aria-controls="pills-starred" aria-selected="false">Starred</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link custom-active " id="pills-history-tab" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">History</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane text-white fade show active" id="pills-promoted" role="tabpanel" aria-labelledby="pills-promoted-tab">
                                        <div class="promoted-heading">
                                            Promote your token
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                                <li class="nav-item">
                                                    <a class="btn btn-vetted nav-link vetted active" id="pills-vetted-tab" data-toggle="pill" href="#pills-vetted" role="tab" aria-controls="pills-vetted" aria-selected="true">Vetted</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btn btn-vetted nav-link vetted" id="pills-unvetted-tab" data-toggle="pill" href="#pills-unvetted" role="tab" aria-controls="pills-unvetted" aria-selected="false">Un-Vetted</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            
                                            <div class="tab-pane fade show active" id="pills-vetted" role="tabpanel" aria-labelledby="pills-vetted-tab">

                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-10">
                                                        <div class="card pink-color">
                                                            <div class="table-responsible">
                                                                <table class="table table-bordered table-dark pink-dark tbody-small">
                                                                    <thead class="dark-thead">
                                                                        <tr>
                                                                            <th scope="col">Token</th>
                                                                            <th scope="col">Balance</th>
                                                                            <th scope="col">Star</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>THOREUM <span class="text-success">$1.3550</span><br/> <span class="light-mute">Thoreum V2 (Thoreum Multi-chain Venture Capital)</span></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>GABECOIN <span class="text-success">$0.0000</span><br/> <span class="light-mute">gabecoin</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td>
                                                                                <input class="star" type="checkbox" title="star" defaultChecked /><br/><br/>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>KABOSU <span class="text-success">$0.0000</span><br/> <span class="light-mute">kabosu</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>FEED <span class="text-success">$0.0000</span><br/> <span class="light-mute">Feeder.finance</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>SHIELDNET<span class="text-success">$0.0000</span><br/> <span class="light-mute">Shield Network</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pills-unvetted" role="tabpanel" aria-labelledby="pills-unvetted-tab">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-10">
                                                        <div class="card pink-color">
                                                            <div class="table-responsible">
                                                                <table class="table table-bordered table-dark pink-dark tbody-small">
                                                                    <thead class="dark-thead">
                                                                        <tr>
                                                                            <th scope="col">Token</th>
                                                                            <th scope="col">Balance</th>
                                                                            <th scope="col">Star</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>PUSHIN <span class="text-success">$0.0015</span><br/> <span class="light-mute">pushin</span></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                SPORTS 
                                                                                <span class="text-success"> $4.5240</span><br/> <span class="light-mute">Fan Owned Sports Teams Token</span>
                                                                                <br/>
                                                                            </td>
                                                                            <td>
                                                                                0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td>
                                                                                <input class="star" type="checkbox" title="star" defaultChecked /><br/><br/>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                INFINITY <span class="text-success">$878.2824</span><br/> <span class="light-mute">Infinity Token</span> <br/>
                                                                            </td>
                                                                            <td>
                                                                                0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td>
                                                                                <input class="star" type="checkbox" title="star" defaultChecked /><br/><br/>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>WEB3 <span class="text-success">$0.0000</span><br/> <span class="light-mute">WEB3 Inu</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>LASSO<span class="text-success">$0.0029</span><br/> <span class="light-mute">Shield Network</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>RIDES<span class="text-success">$0.0000</span><br/> <span class="light-mute">BitRides</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>VIKINGS<span class="text-success">$0.0000</span><br/> <span class="light-mute">Vikings Inu</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>MZ<span class="text-success">$0.0000</span><br/> <span class="light-mute">MetaZilla</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input class="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane text-white fade" id="pills-wallet" role="tabpanel" aria-labelledby="pills-wallet-tab">Connect your wallet to see your tokens.</div>
                                    <div class="tab-pane fade text-white" id="pills-starred" role="tabpanel" aria-labelledby="pills-starred-tab">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <div class="card pink-color">
                                                    <div class="table-responsible">
                                                        <table class="table table-bordered table-dark pink-dark tbody-small">
                                                            <thead class="dark-thead">
                                                                <tr>
                                                                    <th scope="col">Token</th>
                                                                    <th scope="col">Balance</th>
                                                                    <th scope="col">Star</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>THOREUM <span class="text-success">$1.3550</span><br/> <span class="light-mute">Thoreum V2 (Thoreum Multi-chain Venture Capital)</span></td>
                                                                    <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                    </td>
                                                                    <td><input class="star" type="checkbox" title="starred" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>GABECOIN <span class="text-success">$0.0000</span><br/> <span class="light-mute">gabecoin</span>
                                                                        <br/></td>
                                                                    <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                    </td>
                                                                    <td><input class="star" type="checkbox" title="starred" /></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade text-white" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <div class="card pink-color">
                                                    <div class="table-responsible">
                                                        <table class="table table-bordered table-dark pink-dark tbody-small">
                                                            <thead class="dark-thead">
                                                                <tr>
                                                                    <th scope="col">Token</th>
                                                                    <th scope="col">Balance</th>
                                                                    <th scope="col">Star</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wide-token-search"></div>
    </div>


    <section>
        <div class="container mt-3">
            <div class="custom-pad">
                <div class="token float float-left text-white">
                    Tokens
                </div>
                <div class="network float float-right text-white">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" defaultValue="Network">
                    <option selected disabled>Network</option>
                    @foreach($networks as $network)
                        <option value="{{ $network->id }}">{{ strtoupper($network->name)  }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="table-responsive" id="token-table">
               <table class="table table-dark custom-table-dark table-hover" id="resultsTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CHAIN</th>
                            <th scope="col">TOKEN</th>
                            <th scope="col">SYMBOL</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">24 VOLUME</th>
                            <th scope="col">LIQUIDITY</th>
                        </tr>
                    </thead>
                    <tbody id="token-list">
                        @foreach($tokens as $token)
                            <tr class="">
                                <th scope="row">1</th>
                                <td><img src="{{ asset('storage/chain_icons/'.$token->chain->icon) }}" width="30" alt="" /></td>
                                <td class="Poppin-semibold custom-text"><img src="{{ asset('storage/token_icons/'.$token->logo) }}" class="pr-1" width="30" alt="" /> <a href="{{ route('token-via-chain', [$token->chain->name, $token->base_address]) }}" class="text-decoration-none custom-text">{{ $token->symbol }}</a></td>
                                <td> {{ $token->symbol }}</td>
                                <td>{{ $token->price }}</td>
                                <td>{{ $token->volume_24 }}</td>
                                <td>2,259,017</td>
                            </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </section>

@endsection
   