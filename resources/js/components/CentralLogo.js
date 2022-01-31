import React, { Component } from 'react';
import ReactDOM from 'react-dom';
// import apiCalls from '../apiCalls';
import $ from 'jquery';


class CentralLogo extends Component{

    constructor(){
        super()
       
        this.url = window.url

        
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
    //                 $.each(info.networks, function( index, value ) {
                       
    //                     $('#token-list').append('<tr className=""><th scope="row">1</th><td><img src="./assets/images/icons/binance-coin-logo.png" width="30" alt="" /></td><td className="Poppin-semibold custom-text"><img src="./assets/images/icons/missing-b1bd71fb52d8fdf89d0fb13c1b9407d5157e33b1b5daf7b13df0d65bae1f0657.png" className="pr-1" width="30" alt="" /> <a href="./shiba.html" className="text-decoration-none custom-text">SHIBA INU</a></td><td> '+value.symbol+'</td><td>$0.00002870</td><td>$2,175,962,199</td><td>$2,259,017</td></tr>')
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
         
    //  }

    render(){
        return(
            <div className="my-5">
                <div className="coinally-img">
                    <img src="./assets/images/coinally.png" alt="" />
                </div>

                <div className="coinally-text text-center FredokaOne">
                    Coinally
                </div>
            </div>
            
        )
    }
}
if (document.getElementById('central-logo')) {
    ReactDOM.render(<CentralLogo />, document.getElementById('central-logo'));
}
