import React, { Component } from 'react';
import ReactDOM from 'react-dom';
// import apiCalls from '../apiCalls';
import $ from 'jquery';


class Tokens extends Component{

    constructor(){
        super()
        // this.state = {
        //     data: {}
        // }
       
        this.url = window.url
        // this.apiCalls = new apiCalls();

        
    }

    // fixTokens(){
    //     fetch(this.url+'/api/get-tokens',
    //         { 
    //             headers: {
    //             'Content-Type': 'application/json',
    //             'Accept': 'application/json',
    //             'Authorization': 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJSb2xlIjoiQWRtaW4iLCJJc3N1ZXIiOiJJc3N1ZXIiLCJVc2VybmFtZSI6IkphdmFJblVzZSIsImV4cCI6MTY0MzEwNTQ0MiwiaWF0IjoxNjQzMTA1NDQyfQ.HHjIscWL29AHwVpN-KRdHvp6DAC_wv1qL6zG2CDCX9ftHuTepe-dBfqKL0M31Sn_Wd6A8y3zNnVyAK195s4oXQ'
    //             },
                
    //             method: 'get',
    //             dataType: 'json',
                
    //         })
    //         .then((res) => res.json())
    //         .then((info) => {
    //             this.setState({
    //                 data: info
    //             })
    //             console.log(info)
    //             $('#token-list').empty()
                
    //             // <option value="1">ETH Tokens</option>
    //             if(info.status=='success'){
    //                 $.each(info.tokens, function( index, value ) {
                       
    //                     $('#token-list').append('<tr className=""><th scope="row">1</th><td><img src="./assets/images/icons/binance-coin-logo.png" width="30" alt="" /></td><td className="Poppin-semibold custom-text"><img src="./assets/images/icons/missing-b1bd71fb52d8fdf89d0fb13c1b9407d5157e33b1b5daf7b13df0d65bae1f0657.png" className="pr-1" width="30" alt="" /> <a href="./shiba.html" className="text-decoration-none custom-text">'+value.name+'</a></td><td> '+value.symbol+'</td><td>$'+value.price+'</td><td>'+value.volume_24+'</td><td>2,259,017</td></tr>')
    //                   });
    //             }else{
                    
    //                 console.log(info)
    //             }
               
    //             // console.log(this.state.data)
    //         //  return data;
    //         })
    //         .catch(err => console.log(err))
    // }

    // componentDidMount(){
    //     this.fixTokens()
    //     this.fixTokens()
         
    //  }

    render(){
        return(
            <table className="table table-dark custom-table-dark table-hover" id="resultsTable">
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
                <tbody id="token-list"></tbody>
                {/* <tbody id="token-list">
                    <tr className="">
                        <th scope="row">1</th>
                        <td><img src="./assets/images/icons/binance-coin-logo.png" width="30" alt="" /></td>
                        <td className="Poppin-semibold custom-text"><img src="./assets/images/icons/missing-b1bd71fb52d8fdf89d0fb13c1b9407d5157e33b1b5daf7b13df0d65bae1f0657.png" className="pr-1" width="30" alt="" /> <a href="./shiba.html" className="text-decoration-none custom-text">SHIBA INU</a></td>
                        <td> SHIB</td>
                        <td>$0.00002870</td>
                        <td>$2,175,962,199</td>
                        <td>$2,259,017</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="./assets/images/icons/ethereum.png" width="30" alt="" /></td>
                        <td className="Poppin-semibold"><img src="./assets/images/icons/weth.png" className="pr-1" width="30" alt="" /> <a href="#" className="text-decoration-none custom-text">Wrapped Ether</a></td>
                        <td>WETH</td>
                        <td>$3,256.65</td>
                        <td>$1,211,021,717</td>
                        <td>$3,923,418,917</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="./assets/images/icons/ethereum.png" width="30" alt="" /></td>
                        <td className="Poppin-semibold"><img src="./assets/images/icons/USD_Coin_icon.png" className="pr-1" width="30" alt="" /> <a href="#" className="text-decoration-none custom-text">USD Coin</a></td>
                        <td>USDC</td>
                        <td>$0.99966828</td>
                        <td>$640,251,990</td>
                        <td>$1,099,395,734</td>

                    </tr>

                    <tr className="">
                        <th scope="row">1</th>
                        <td><img src="./assets/images/icons/binance-coin-logo.png" width="30" alt="" /></td>
                        <td className="Poppin-semibold custom-text"><img src="./assets/images/icons/missing-b1bd71fb52d8fdf89d0fb13c1b9407d5157e33b1b5daf7b13df0d65bae1f0657.png" className="pr-1" width="30" alt="" /> <a href="./shiba.html" className="text-decoration-none custom-text">SHIBA INU</a></td>
                        <td> SHIB</td>
                        <td>$0.00002870</td>
                        <td>$2,175,962,199</td>
                        <td>$2,259,017</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="./assets/images/icons/ethereum.png" width="30" alt="" /></td>
                        <td className="Poppin-semibold"><img src="./assets/images/icons/weth.png" className="pr-1" width="30" alt="" /> <a href="#" className="text-decoration-none custom-text">Wrapped Ether</a></td>
                        <td>WETH</td>
                        <td>$3,256.65</td>
                        <td>$1,211,021,717</td>
                        <td>$3,923,418,917</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="./assets/images/icons/ethereum.png" width="30" alt="" /></td>
                        <td className="Poppin-semibold"><img src="./assets/images/icons/USD_Coin_icon.png" className="pr-1" width="30" alt="" /> <a href="#" className="text-decoration-none custom-text">USD Coin</a></td>
                        <td>USDC</td>
                        <td>$0.99966828</td>
                        <td>$640,251,990</td>
                        <td>$1,099,395,734</td>

                    </tr>
                </tbody> */}
            </table>
            
            

        )
    }
}
if (document.getElementById('token-table')) {
    ReactDOM.render(<Tokens />, document.getElementById('token-table'));
}
