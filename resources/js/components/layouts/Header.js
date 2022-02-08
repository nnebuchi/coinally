import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function Header() {
    return (
        <nav className="navbar navbar-expand-sm navbar-light custom-navbar bg-light">
        <div className="container">
            <a className="navbar-brand custom-text-shadow FredokaOne text-white" href="index.html">
                <img src={window.appAssetUrl+'assets/images/coinally.png'} width="25" alt="" /> Coinally
            </a>
            <button className="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            
            <i className="fas fa-bars text-white"></i>
        </button>
            <div className="collapse navbar-collapse" id="collapsibleNavId">
                <ul className="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li className="nav-item active">
                        <a className="nav-link" href="#">Charts</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">Trade</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">Multi Chart</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">About</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">Premium</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">Advertise</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">Free Price Bot</a>
                    </li>

                </ul>
                <div className="form-inline my-2 my-lg-0">
                    <button type="button" data-toggle="modal" data-target="#exampleModal" className="btn btn-default my-2 my-sm-0" type="submit"><i className="fas fa-link"></i> CONNECT</button>
                </div>
            </div>
        </div>

        <div className="modal modal-bg fade" id="exampleModal" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content custom-modal-content">
                        <div className="modal-header border-0">
                            <h5 className="modal-title custom-modal-title" id="exampleModalLabel">Connect Your Wallet</h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body">
                            <a href="#" className="btn btn-default btn-block">Connect wallet</a>
                            <a href="#" className="btn btn-default btn-block">Metamask/Trustwallet</a>
                            <a href="#" className="btn btn-default btn-block">Binance Chain Wallet</a>


                        </div>
                        <div className="modal-footer border-0">
                            <button type="button" className="btn btn-close" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    );
}

export default Header;

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
