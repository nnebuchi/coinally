<nav class="navbar navbar-expand-sm navbar-light custom-navbar bg-light">
    <div class="container">
        <a class="navbar-brand custom-text-shadow FredokaOne text-white" href="index.html">
            <img src="{{ asset('assets/images/coinally.png') }}" width="25" alt="" /> Coinally
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fas fa-bars text-white"></i>
    </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Multi Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Premium</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Advertise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Free Price Bot</a>
                </li>

            </ul>
            <div class="form-inline my-2 my-lg-0">
                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-default my-2 my-sm-0" type="submit"><i class="fas fa-link"></i> CONNECT</button>
            </div>
        </div>
    </div>

    <div class="modal modal-bg fade" id="exampleModal" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content custom-modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title custom-modal-title" id="exampleModalLabel">Connect Your Wallet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="#" class="btn btn-default btn-block">Connect wallet</a>
                        <a href="#" class="btn btn-default btn-block">Metamask/Trustwallet</a>
                        <a href="#" class="btn btn-default btn-block">Binance Chain Wallet</a>


                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
</nav>