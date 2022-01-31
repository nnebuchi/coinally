import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import apiCalls from '../apiCalls';
import $ from 'jquery';
// import Tokens from './components/Tokens';

class Dutylist extends Component{

    constructor(){
        super()
        this.state = {
            networks: {},
            tokens: {},
        }
       
        this.url = window.url
        this.apiCalls = new apiCalls();

        
    }


    fixNetworks(){
        fetch(this.url+'/api/get-networks',
            {
                
                headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJSb2xlIjoiQWRtaW4iLCJJc3N1ZXIiOiJJc3N1ZXIiLCJVc2VybmFtZSI6IkphdmFJblVzZSIsImV4cCI6MTY0MzEwNTQ0MiwiaWF0IjoxNjQzMTA1NDQyfQ.HHjIscWL29AHwVpN-KRdHvp6DAC_wv1qL6zG2CDCX9ftHuTepe-dBfqKL0M31Sn_Wd6A8y3zNnVyAK195s4oXQ'
                },
                
                method: 'get',
                dataType: 'json',
                
            })
            .then((res) => res.json())
            .then((info) => {
                this.setState({
                    networks: info
                })
                $('#inlineFormCustomSelect').empty().append('<option selected disabled>Network</option>')
                
                // <option value="1">ETH Tokens</option>
                if(info.status=='success'){
                    $.each(info.networks, function( index, value ) {
                       $('#inlineFormCustomSelect').append('<option value="'+value.id+'">'+value.name+'</option>')
                      });
                }else{
                    alert(info.status)
                }
               
                console.log(this.state.data)
            //  return data;
            })
            .catch(err => console.log(err))
    }

    getTokensPrice(){
        fetch(this.url+'/api/get-networks',
            {
                
                headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJSb2xlIjoiQWRtaW4iLCJJc3N1ZXIiOiJJc3N1ZXIiLCJVc2VybmFtZSI6IkphdmFJblVzZSIsImV4cCI6MTY0MzEwNTQ0MiwiaWF0IjoxNjQzMTA1NDQyfQ.HHjIscWL29AHwVpN-KRdHvp6DAC_wv1qL6zG2CDCX9ftHuTepe-dBfqKL0M31Sn_Wd6A8y3zNnVyAK195s4oXQ'
                },
                
                method: 'get',
                dataType: 'json',
                
            })
            .then((res) => res.json())
            .then((info) => {
                this.setState({
                    tokens: info
                })
                
                console.log(this.state.tokens)
            //  return data;
            })
            .catch(err => console.log(err))
    }
    

    componentDidMount(){
       this.fixNetworks()
       this.getTokensPrice()
        //this.fixTokens()
        
    }

    render(){

       
        // const {name, nickName} = this.props
       
        // 4();
        // const {state1, state2} = this.state

        return (
            <div>
   
            <div className="container mt-5">

                <div id="central-logo"></div>
               
                <div className="container">
                    <div className="price-header">
                        BSC Charts
                    </div>
                    <div className="price">
                        View price charts for any token in your wallet (binance smart chain)
                    </div>
                </div>
                <form action="">
                    <div className="row d-flex justify-content-center">
                        <div className="col-md-4">
                            <div className="input-group mt-4">
                                <input type="text" className="form-control custom-token-form-control" placeholder="Enter token name / address" aria-label="Text input with dropdown button" />
                                <div className="input-group-append">
                                    <button className="btn btn-secondary custom-token-search">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                    <div className="row d-flex justify-content-center">
                        <div className="col-md-8">
                            <div className="card dark-card mt-3 pb-5">
                                <div className="card-body">
                                    <div className="d-flex justify-content-center pb-3">
                                        <ul className="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li className="nav-item">
                                                <a className="nav-link custom-active active" id="pills-promoted-tab" data-toggle="pill" href="#pills-promoted" role="tab" aria-controls="pills-promoted" aria-selected="true">Promoted</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link custom-active " id="pills-wallet-tab" data-toggle="pill" href="#pills-wallet" role="tab" aria-controls="pills-wallet" aria-selected="false">Wallet</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link custom-active " id="pills-starred-tab" data-toggle="pill" href="#pills-starred" role="tab" aria-controls="pills-starred" aria-selected="false">Starred</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link custom-active " id="pills-history-tab" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">History</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div className="text-center">
                                        <div className="tab-content" id="pills-tabContent">
                                            <div className="tab-pane text-white fade show active" id="pills-promoted" role="tabpanel" aria-labelledby="pills-promoted-tab">
                                                <div className="promoted-heading">
                                                    Promote your token
                                                </div>
                                                <div className="d-flex justify-content-center">
                                                    <ul className="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                                        <li className="nav-item">
                                                            <a className="btn btn-vetted nav-link vetted active" id="pills-vetted-tab" data-toggle="pill" href="#pills-vetted" role="tab" aria-controls="pills-vetted" aria-selected="true">Vetted</a>
                                                        </li>
                                                        <li className="nav-item">
                                                            <a className="btn btn-vetted nav-link vetted" id="pills-unvetted-tab" data-toggle="pill" href="#pills-unvetted" role="tab" aria-controls="pills-unvetted" aria-selected="false">Un-Vetted</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div className="tab-content" id="pills-tabContent">
                                                    
                                                    <div className="tab-pane fade show active" id="pills-vetted" role="tabpanel" aria-labelledby="pills-vetted-tab">

                                                        <div className="row d-flex justify-content-center">
                                                            <div className="col-md-10">
                                                                <div className="card pink-color">
                                                                    <div className="table-responsible">
                                                                        <table className="table table-bordered table-dark pink-dark tbody-small">
                                                                            <thead className="dark-thead">
                                                                                <tr>
                                                                                    <th scope="col">Token</th>
                                                                                    <th scope="col">Balance</th>
                                                                                    <th scope="col">Star</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>THOREUM <span className="text-success">$1.3550</span><br/> <span className="light-mute">Thoreum V2 (Thoreum Multi-chain Venture Capital)</span></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>GABECOIN <span className="text-success">$0.0000</span><br/> <span className="light-mute">gabecoin</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input className="star" type="checkbox" title="star" defaultChecked /><br/><br/>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>KABOSU <span className="text-success">$0.0000</span><br/> <span className="light-mute">kabosu</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>FEED <span className="text-success">$0.0000</span><br/> <span className="light-mute">Feeder.finance</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>SHIELDNET<span className="text-success">$0.0000</span><br/> <span className="light-mute">Shield Network</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div className="tab-pane fade" id="pills-unvetted" role="tabpanel" aria-labelledby="pills-unvetted-tab">
                                                        <div className="row d-flex justify-content-center">
                                                            <div className="col-md-10">
                                                                <div className="card pink-color">
                                                                    <div className="table-responsible">
                                                                        <table className="table table-bordered table-dark pink-dark tbody-small">
                                                                            <thead className="dark-thead">
                                                                                <tr>
                                                                                    <th scope="col">Token</th>
                                                                                    <th scope="col">Balance</th>
                                                                                    <th scope="col">Star</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>PUSHIN <span className="text-success">$0.0015</span><br/> <span className="light-mute">pushin</span></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        SPORTS 
                                                                                        <span className="text-success"> $4.5240</span><br/> <span className="light-mute">Fan Owned Sports Teams Token</span>
                                                                                        <br/>
                                                                                    </td>
                                                                                    <td>
                                                                                        0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input className="star" type="checkbox" title="star" defaultChecked /><br/><br/>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        INFINITY <span className="text-success">$878.2824</span><br/> <span className="light-mute">Infinity Token</span> <br/>
                                                                                    </td>
                                                                                    <td>
                                                                                        0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input className="star" type="checkbox" title="star" defaultChecked /><br/><br/>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>WEB3 <span className="text-success">$0.0000</span><br/> <span className="light-mute">WEB3 Inu</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>LASSO<span className="text-success">$0.0029</span><br/> <span className="light-mute">Shield Network</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>RIDES<span className="text-success">$0.0000</span><br/> <span className="light-mute">BitRides</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>VIKINGS<span className="text-success">$0.0000</span><br/> <span className="light-mute">Vikings Inu</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>MZ<span className="text-success">$0.0000</span><br/> <span className="light-mute">MetaZilla</span>
                                                                                        <br/></td>
                                                                                    <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                                    </td>
                                                                                    <td><input className="star" type="checkbox" title="star" defaultChecked /><br/><br/></td>
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
                                            <div className="tab-pane text-white fade" id="pills-wallet" role="tabpanel" aria-labelledby="pills-wallet-tab">Connect your wallet to see your tokens.</div>
                                            <div className="tab-pane fade text-white" id="pills-starred" role="tabpanel" aria-labelledby="pills-starred-tab">
                                                <div className="row d-flex justify-content-center">
                                                    <div className="col-md-10">
                                                        <div className="card pink-color">
                                                            <div className="table-responsible">
                                                                <table className="table table-bordered table-dark pink-dark tbody-small">
                                                                    <thead className="dark-thead">
                                                                        <tr>
                                                                            <th scope="col">Token</th>
                                                                            <th scope="col">Balance</th>
                                                                            <th scope="col">Star</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>THOREUM <span className="text-success">$1.3550</span><br/> <span className="light-mute">Thoreum V2 (Thoreum Multi-chain Venture Capital)</span></td>
                                                                            <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input className="star" type="checkbox" title="starred" /></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>GABECOIN <span className="text-success">$0.0000</span><br/> <span className="light-mute">gabecoin</span>
                                                                                <br/></td>
                                                                            <td>0.00<br/> <span className="text-success">$0.00</span>
                                                                            </td>
                                                                            <td><input className="star" type="checkbox" title="starred" /></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="tab-pane fade text-white" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                                                <div className="row d-flex justify-content-center">
                                                    <div className="col-md-10">
                                                        <div className="card pink-color">
                                                            <div className="table-responsible">
                                                                <table className="table table-bordered table-dark pink-dark tbody-small">
                                                                    <thead className="dark-thead">
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
                <div className="container mt-3">
                    <div className="custom-pad">
                        <div className="token float float-left text-white">
                            Tokens
                        </div>
                        <div className="network float float-right text-white">
                            <select className="custom-select mr-sm-2" id="inlineFormCustomSelect" defaultValue="Network">
                            <option selected disabled>Network</option>
                            <option value="1">ETH Tokens</option>
                            <option value="2">BSC Tokens</option>
                            <option value="3">Polygon Token</option>
                        </select>
                        </div>
                    </div>
                    <div className="table-responsive" id="token-table">
                       
                    </div>
                </div>
            </section>
            
        </div>
        )
    }
}

export default Dutylist;

if (document.getElementById('home')) {
    ReactDOM.render(<Dutylist />, document.getElementById('home'));
}
