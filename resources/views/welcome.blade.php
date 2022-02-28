@extends('layouts.app')
@section('title', 'Coinally')
@section('content')
    
    {{-- <div id="home"></div> --}}
    <section>
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
            <form  action="{{ route('search') }}">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="input-group mt-4">
                            <input type="hidden" name="scope" value="blockchain">
                            <input type="text" class="form-control custom-token-form-control" placeholder="Enter token name / address" aria-label="Text input with dropdown button" name="q" />
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
                                                                            @foreach($tokens as $tt)
                                                                                @if($tt->promoted == 'yes' && $tt->vetted=='yes')
                                                                                    <tr>
                                                                                        <td>{{ $tt->symbol }} <span class="text-success">${{ $tt->price }}</span><br/> <span class="light-mute">{{ $tt->long_name }}</span></td>
                                                                                        <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                                        </td>
                                                                                        <td><input class="star" id="{{ $tt->symbol.'-check' }}" type="checkbox" title="star" value="{{ $tt->symbol }}"
                                                                                             @if(in_array($tt->symbol, $starrArr)) checked @endif />
                                                                                            <br/><br/>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
                                                                            
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
                                                                            @foreach($tokens as $uu)
                                                                                 @if($uu->promoted == 'yes' && $uu->vetted=='no')
                                                                                    <tr>
                                                                                        <td>{{ $uu->symbol }} <span class="text-success">${{ $uu->price }}</span><br/> <span class="light-mute">{{ $uu->long_name }}</span></td>
                                                                                        <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                                        </td>
                                                                                        <td><input class="star" type="checkbox" title="star" @if(in_array($uu->symbol, $starrArr)) checked @endif /><br/><br/></td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
                                                                           
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
                                                                <tbody id="starred-element">
                                                                    @if(!is_null($user->starredTokens))
                                                                                            
                                                                        @foreach($user->starredTokens as $ss)
                                                                            <tr id="starred-{{ $ss->token->symbol }}">
                                                                                <td>{{ strtoupper($ss->token->symbol) }} <span class="text-success">${{ $ss->token->price }}</span><br/> <span class="light-mute">{{ $ss->token->long_name }}</span></td>
                                                                                <td>0.00<br/> <span class="text-success">$0.00</span>
                                                                                </td>
                                                                                <td><input class="star" type="checkbox" checked title="starred" value="{{strtoupper($ss->token->symbol)  }}" /></td>
                                                                            </tr> 
                                                                        @endforeach
                                                                    @endif
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
                {{-- <div id="wide-token-search"></div> --}}
                @include('layouts.components.wide-search-form')
        </div>
    </section>



    <section>
        <div class="container mt-3">
            <div class="custom-pad">
                <div class="token float float-left text-white">
                    Tokens
                </div>
                <div class="network float float-right text-white">
                    <select class="custom-select mr-sm-2 network-select" id="inlineFormCustomSelect">
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
                </table>
            </div>
        </div>
    </section>

    <script>
       
        $('.network-select').on('change', function(){
            let $this = $(this);
            $.ajax({
                url: "{{ route('get-tokens-by-network') }}",
                type: "post",
                data:{
                    chain_id: $this.val(),
                    _token:universal_token,
                },
                success:function(resp){
                    console.log(resp);
                    resp = JSON.parse(resp);

                    $('#token-list').empty();

                    $.each(resp.tokens, function( index, value ){

                         let tokenUrl = window.assetUrl+'/token_icons/'+value.logo;
                         let chainUrl = window.assetUrl+'/chain_icons/'+resp.chain.icon;

                        $('#token-list').append('<tr className=""><th scope="row">1</th><td><img src="'+chainUrl+'" width="30" alt="" /></td><td className="Poppin-semibold custom-text"><img src="'+tokenUrl+'" className="pr-1" width="30" alt="" /> <a href="'+ window.url+'/pools/'+resp.chain.name+'/tokens/'+value.base_address+'" className="text-decoration-none custom-text">'+value.symbol+'</a></td><td> '+value.symbol+'</td><td>$'+value.price+'</td><td>'+value.volume_24+'</td><td>2,259,017</td></tr>')
                    });
                },
                error:function(param1, param2, param3){
                    alert(param3);
                }
            })
        })

        $('table').find('.star').on('input', function(){
            let $this = $(this);
           if ($(this).is(":checked")) {
            
            $.ajax({
                type:"POST",
                url:"{{ route('add-starred-token') }}",
                data:{
                    coin: $this.val(),
                    _token: universal_token
                },
                success:function(feedback){
                    feedback = JSON.parse(feedback)
                    if (feedback.status == 'starred') {
                        $('#starred-element').append(`<tr id="starred-`+feedback.token.symbol+`"><td>`+feedback.token.symbol+` <span class="text-success">`+feedback.token.price+`</span><br/> <span class="light-mute">`+feedback.token.long_name+`</span></td><td>0.00<br/> <span class="text-success">$0.00</span></td> <td><input id="`+feedback.token.symbol+`-check" class="star" type="checkbox" checked title="starred" value="`+feedback.token.symbol+`" /></td></tr>`);
                    }
                    
                }
            })
           }else{

                $.ajax({
                    type:"POST",
                    url:"{{ route('un-starred-token') }}",
                    data:{
                        coin: $this.val(),
                        _token: universal_token
                    },
                    success:function(feedback){
                        feedback = JSON.parse(feedback)
                        if (feedback.status == 'unstarred') {
                            console.log($('table').find("#"+feedback.symbol+"-check"))
                            $('table').find("#"+feedback.symbol+"-check").removeAttr('checked');
                            $('#starred-'+$this.val()).remove();
                        }
                        
                    }
                })
           }
        })
    </script>

    <style>
        #token-list a{
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>

@endsection
   