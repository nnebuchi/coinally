import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function Footer() {
    return (
        <footer className="custom-footer">
            <div className="copyright text-white text-center">
                Coinally Copyright 2022
               
            </div>
        </footer>
    );
}

export default Footer;

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}
