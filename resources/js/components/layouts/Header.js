import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function Header() {
    return (
        <nav className="navbar navbar-expand-sm navbar-light custom-navbar bg-light">
        <div className="container">
            <a className="navbar-brand custom-text-shadow FredokaOne text-white" href="index.html">
                <img src="assets/images/coinally.png" width="25" alt="" /> Coinally
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
    </nav>
    );
}

export default Header;

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
