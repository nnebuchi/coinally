@extends('layouts.app')
@section('title', 'Coinally')
@section('content')
    
   
   
    {{-- <div id="token-data"></div> --}}
                
                <section>
                    <div class="container mt-5">

                        @include('layouts.components.center-logo')
                        @include('layouts.components.wide-search-form')
                    </div>
                </section>


                <section>
                    <div class="container-custom container-sm conntainer-md">
                         {{-- Breadcrumb --}} 
                        <ul>
                            <li class="custom-list"><a href="./index.html"><i class="fas fa-home"></i></a></li>
                            <li class="custom-list"><a href="#" class="font-weight-bold text-decoration-none small-text">{{ strtoupper($tokenChain)}} Pools</a></li>
                            <li class="custom-list"><a href="#" class="text-decoration-none small-text">{{ $tokenSymbol }}</a></li>
                        </ul>
                         {{--  Breadcrumb end  --}}
                        <div class="row my-4">
                            <div class="col-md-3">
                                <div class="coin-breadcrumb text-white">
                                    <ul class="custom-ul">
                                       
                                        
                                        <li  style="display: inline;" class="font-weight-bold text-white">{{ $tokenSymbol }}</li>
                                        <li  style="display: inline;" class="text-white">{{ $tokenName }}</li>
                                    </ul>
                                </div>
                                <form action="">
                                    {{-- Pair --}}
                                    <div class="pair text-white">Address</div>
                                    <div class="input-group input-group-sm mb-3">
                                        
                                        <input type="text" class="form-control custom-address" aria-label="Sizing example input" value=" {{ $tokenAddr }}" />
                                        <div class="input-group-append custom-append">
                                            <button class="input-group-text custom-address2" id="inputGroup-sizing-sm"><i class="fas fa-clipboard"></i></button>
                                        </div>
                                    </div>
                                    {{-- Token --}}
                                    
                                </form>
                                <div class="custom-price-table">Name
                                    <div class="row my-2">
                                        <div class="col-6 text-left">
                                            Token Type
                                        </div>
                                        <div class="col-6 text-right text-white">
                                            {{ $tokenType }}
                                        </div>
                                    </div>
                                    <hr class="custom-hr" />

                                    
                                    <div class="row my-2">
                                        <div class="col-6 text-left">
                                            24hr Trading Volume
                                        </div>
                                        <div class="col-6 text-right text-white">
                                            N/A
                                        </div>
                                    </div>
                                    <hr class="custom-hr" />
                                    <div class="row my-2">
                                        <div class="col-6 text-left">
                                            Market Cap
                                        </div>
                                        <div class="col-6 text-right text-white">
                                            N/A
                                        </div>
                                    </div>
                                    <hr class="custom-hr" />
                                </div>
                                <div class="card custom-card border-0 shadow my-3">Name
                                    <div class="card-body">
                                        <div class="custom-grade-point">100%</div>

                                        <div class="desc my-2 font-weight-bold">
                                            How do you feel about {{ $tokenSymbol }} today?

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="small-text">
                                                    Vote to see community results!

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-secondary"> Good</a>
                                                <a href="#" class="btn btn-warning"> Bad</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 bg-light">
                               
                            </div>
                        </div>
                    </div>
                </section>
                


@endsection
   