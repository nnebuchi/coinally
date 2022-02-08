import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import apiCalls from '../apiCalls';
import $ from 'jquery';
// import Tokens from './components/Tokens';

class CoinData extends Component{

    constructor(){
        super()
        this.state = {
            networks: {},
            tokens: {},
        }
       
        this.url = window.url
        this.apiCalls = new apiCalls();
    }


    setFakeData(){
        // do nothing
    }

    render(){
        
        // const chart = LightweightCharts.createChart(document.getElementById('trade-view-cont'), { width: 600, height: 400 });
        // const lineSeries = chart.addLineSeries();
        const tradeViewData = {
                "width": "100%",
                "height": 610,
                "symbol": "Uniswap:SHIBUSDT",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": true,
                "withdateranges": true,
                "range": "YTD",
                "hide_side_toolbar": false,
                "allow_symbol_change": true,
                "details": true,
                "hotlist": true,
                "calendar": true,
                "container_id": "tradingview_c53a1"
        }

        // const    new TradingView.widget(tradeViewData) new TradingView.widget(tradeViewData);

        return (
            <div>
                
                <section>
                    <div className="container mt-5">

                        <div id="central-logo"></div>
                        <div id="wide-token-search"></div>
                    </div>
                </section>


                <section>
                    <div className="container-custom container-sm conntainer-md">
                        {/* Breadcrumb */}
                        <ul>
                            <li className="custom-list"><a href="./index.html"><i className="fas fa-home"></i></a></li>
                            <li className="custom-list"><a href="#" className="font-weight-bold text-decoration-none small-text">Binance Smart Chain Pools</a></li>
                            <li className="custom-list"><a href="#" className="text-decoration-none small-text">SHIB-USDT on BabySwap</a></li>
                        </ul>
                         {/* Breadcrumb end  */}
                        <div className="row my-4">
                            <div className="col-md-3">
                                <div className="coin-breadcrumb text-white">
                                    <ul className="custom-ul">
                                        <li className="icon-coin"><img src={window.appAssetUrl+'/assets/images/icons/binance-coin-logo.png'} width="20" alt="" /></li>
                                        <li className="font-weight-bold text-white">SHIB</li>
                                        <li className="text-white">WBNB</li>
                                    </ul>
                                </div>
                                <div className="coin-price">
                                    SHIBA INU Price (SHIB)
                                </div>
                                <span className="coin-fiat">
                                    $0.00003233
                                </span>
                                <span className="coin-pump">+7.78%</span>
                                <div className="coin-button my-2">
                                    <span>
                                        <a href="#" className="btn btn-secondary btn-sm"> Swap on <img src={window.appAssetUrl+'assets/images/icons/bsw.svg'} width="20" alt="" /></a>
                                        <a href="#" className="btn btn-secondary btn-sm mx-2"><img src={window.appAssetUrl+'assets/images/icons/coingecko-e47ba33be46bbde3f8bdf43fcc20f3e2b5835f8f7639f29db2f54d1748a91e27.png'} width="20" alt="" /></a>
                                        <a href="#" className="btn btn-secondary btn-sm mr-2">Explorer</a>
                                        <a href="#" className="btn btn-secondary btn-sm facebook-brand"><i className="fab fa-facebook-f"></i></a>
                                        <a href="#" className="btn btn-secondary btn-sm twitter-brand"><i className="fab fa-twitter"></i></a>
                                    </span>
                                </div>
                                <form action="">
                                    {/* Pair */}
                                    <div className="pair text-white">Pair</div>
                                    <div className="input-group input-group-sm mb-3">
                                        <div className="input-group-prepend">
                                            <span className="input-group-text custom-address1" id="inputGroup-sizing-sm"><img src={window.appAssetUrl+'assets/images/icons/bsw.svg'} width="20px" alt="" /></span>
                                        </div>
                                        <input type="text" className="form-control custom-address" aria-label="Sizing example input" value=" 0x49859419c83465eeeedd7b1d30db99ce58c88ec3"
                                        onChange={(e) => setFakeData(e.target.value)} 
                                        aria-describedby="inputGroup-sizing-sm" />
                                        <div className="input-group-append custom-append">
                                            <button className="input-group-text custom-address2" id="inputGroup-sizing-sm"><i className="fas fa-clipboard"></i></button>
                                        </div>
                                    </div>
                                    {/* Token */}
                                    <div className="Tokems text-white">Tokens</div>
                                    <div className="input-group input-group-sm mb-2">
                                        <div className="input-group-prepend">
                                            <span className="input-group-text custom-address1" id="inputGroup-sizing-sm"><img src={window.appAssetUrl+'assets/images/icons/missing-b1bd71fb52d8fdf89d0fb13c1b9407d5157e33b1b5daf7b13df0d65bae1f0657.png'} width="20px" alt="" /> <b className="px-1">SHIB</b></span>
                                        </div>
                                        <input type="text" className="form-control custom-address" aria-label="Sizing example input" value=" 0x49859419c83465eeeedd7b1d30db99ce58c88ec3" aria-describedby="inputGroup-sizing-sm"
                                        onChange={(e) => setFakeData(e.target.value)}
                                        />
                                        <div className="input-group-append custom-append">
                                            <button className="input-group-text custom-address2" id="inputGroup-sizing-sm"><i className="fas fa-clipboard"></i></button>
                                        </div>
                                    </div>
                                    <div className="input-group input-group-sm">
                                        <div className="input-group-prepend">
                                            <span className="input-group-text custom-address1" id="inputGroup-sizing-sm"><img src={window.appAssetUrl+'/assets/images/icons/binance-coin-logo.png'} width="20px" alt="" /><b className="px-1">WBNB</b></span>
                                        </div>
                                        <input type="text" className="form-control custom-address" aria-label="Sizing example input" value=" 0x49859419c83465eeeedd7b1d30db99ce58c88ec3" 
                                        aria-describedby="inputGroup-sizing-sm" 
                                        onChange={(e) => setFakeData(e.target.value)}
                                        />
                                        <div className="input-group-append custom-append">
                                            <button className="input-group-text custom-address2" id="inputGroup-sizing-sm"><i className="fas fa-clipboard"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div className="custom-price-table">Name
                                    <div className="row my-2">
                                        <div className="col-6 text-left">
                                            Dex
                                        </div>
                                        <div className="col-6 text-right text-white">
                                            Biswap
                                        </div>
                                    </div>
                                    <hr className="custom-hr" />

                                    <div className="row my-2">
                                        <div className="col-6 text-left">
                                            Fully Diluted Valuation
                                        </div>
                                        <div className="col-6 text-right text-white">
                                            $154,670,838
                                        </div>
                                    </div>
                                    <hr className="custom-hr" />

                                    <div className="row my-2">
                                        <div className="col-6 text-left">
                                            Total Liquidity (USD)
                                        </div>
                                        <div className="col-6 text-right text-white">
                                            $1,264,286
                                        </div>
                                    </div>
                                    <hr className="custom-hr" />
                                    <div className="row my-2">
                                        <div className="col-6 text-left">
                                            24hr Trading Volume
                                        </div>
                                        <div className="col-6 text-right text-white">
                                            $377,957
                                        </div>
                                    </div>
                                    <hr className="custom-hr" />
                                    <div className="row my-2">
                                        <div className="col-6 text-left">
                                            Market Cap
                                        </div>
                                        <div className="col-6 text-right text-white">
                                            N/A
                                        </div>
                                    </div>
                                    <hr className="custom-hr" />
                                </div>
                                <div className="card custom-card border-0 shadow my-3">Name
                                    <div className="card-body">
                                        <div className="custom-grade-point">100%</div>

                                        <div className="desc my-2 font-weight-bold">
                                            How do you feel about SHIB today?

                                        </div>
                                        <div className="row">
                                            <div className="col-md-6">
                                                <div className="small-text">
                                                    Vote to see community results!

                                                </div>
                                            </div>
                                            <div className="col-md-6">
                                                <a href="#" className="btn btn-secondary"> Good</a>
                                                <a href="#" className="btn btn-warning"> Bad</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-9">
                                <div className="tradingview-widget-container">
                                    <div id="tradingview_c53a1"> </div>
                                    <div className="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/SHIBUSD/?exchange=COINBASE" rel="noopener" target="_blank"><span className="blue-text">SHIBUSD Chart</span></a> by TradingView</div>
                                    
                                    {/* { new TradingView.widget(tradeViewData) } */}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div className="container-custom">
                        <div className="table-responsive">
                            <table className="table table-dark custom-table-dark" id="resultsTable">
                                <thead>
                                    <tr className="text-uppercase">
                                        <th scope="col">type</th>
                                        <th scope="col">price (bnb)</th>
                                        <th scope="col">price (usd)</th>
                                        <th scope="col">amount (shib)</th>
                                        <th scope="col">total bnb</th>
                                        <th scope="col">time</th>
                                        <th scope="col">from</th>
                                        <th scope="col">tx</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <tr className="">
                                        <td scope="row" className="custom-green">Buy</td>
                                        <td className="custom-green">0.00000006</td>
                                        <td className="custom-green">$0.00003053</td>
                                        <td className="custom-green">30,828,580</td>
                                        <td className="custom-green">2.00000000</td>
                                        <td>2 minutes ago</td>
                                        <td>0xc02ba...</td>
                                        <td><a href="#">View</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row" className="custom-red">Sell</td>
                                        <td className="custom-red">0.00000006</td>
                                        <td className="custom-red">$0.00003053</td>
                                        <td className="custom-red">30,828,580</td>
                                        <td className="custom-red">2.00000000</td>
                                        <td>2 minutes ago</td>
                                        <td>0xc02ba...</td>
                                        <td><a href="#">View</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row" className="custom-red">Sell</td>
                                        <td className="custom-red">0.00000006</td>
                                        <td className="custom-red">$0.00003053</td>
                                        <td className="custom-red">30,828,580</td>
                                        <td className="custom-red">2.00000000</td>
                                        <td>2 minutes ago</td>
                                        <td>0xc02ba...</td>
                                        <td><a href="#">View</a></td>
                                    </tr>

                                    <tr className="">
                                        <td scope="row" className="custom-green">Buy</td>
                                        <td className="custom-green">0.00000006</td>
                                        <td className="custom-green">$0.00003053</td>
                                        <td className="custom-green"> 30,828,580</td>
                                        <td className="custom-green">2.00000000</td>
                                        <td>2 minutes ago</td>
                                        <td>0xc02ba...</td>
                                        <td><a href="#">View</a></td>

                                    </tr>
                                    <tr>
                                        <td scope="row" className="custom-red">Sell</td>
                                        <td className="custom-red">0.00000007</td>
                                        <td className="custom-red">$0.00003053</td>
                                        <td className="custom-red">30,828,580</td>
                                        <td className="custom-red">2.00000000</td>
                                        <td>2 minutes ago</td>
                                        <td>0xc02ba...</td>
                                        <td><a href="#">View</a></td>

                                    </tr>
                                    <tr>
                                        <td scope="row" className="custom-green">Buy</td>
                                        <td className="custom-green">0.00000007</td>
                                        <td className="custom-green">$0.00003053</td>
                                        <td className="custom-green">30,828,580</td>
                                        <td className="custom-green">2.00000000</td>
                                        <td>2 minutes ago</td>
                                        <td>0xc02ba...</td>
                                        <td><a href="#">View</a></td>



                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                            
            </div>
        )
    }
}

export default CoinData;

if (document.getElementById('token-data')) {
    ReactDOM.render(<CoinData />, document.getElementById('token-data'));
}
