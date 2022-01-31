import React, { Component } from 'react';
import ReactDOM from 'react-dom';
// import apiCalls from '../apiCalls';
import $ from 'jquery';

class WideSearchForm extends Component{

    constructor(){
        super()
        this.url = window.url
    }

    render(){
        return(
            <form>
                <div className="row d-flex mt-5 justify-content-center">
                    <div className="col-md-7">
                        <span className="input-container">
                            <div className="input-group mb-3">
                                <input type="text" className="form-control custom-form-control" placeholder="Search Tokens" aria-label="Search" aria-describedby="basic-addon2" />
                                <div className="input-group-append">
                                    <button className="input-group-text custom-input" id="basic-addon2"><i className="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </span>

                    </div>
                </div>
            </form>
            
        )
    }
}
if (document.getElementById('wide-token-search')) {
    ReactDOM.render(<WideSearchForm />, document.getElementById('wide-token-search'));
}
