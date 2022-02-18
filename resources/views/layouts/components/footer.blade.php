<footer class="custom-footer">
    <div class="copyright text-white text-center">
        Coinally Copyright 2022
       
    </div>
</footer>
<div class="waitpage" id="waitpage" style="display: none;">
        <div class="waitpage-box">
            <p>
                <img alt="(Loading)" src="{{ asset('phase2_assets/images/Ripple-2.4s-200px.svg') }}">
                <span class="text-white">Loading Dapp</span>
            </p>
        </div>
      </div>

      <style>
         .waitpage {
              background: url(../images/blockUI.png) repeat scroll 0 0 rgba(0,0,0,0);
              height: 100%;
              left: 0;
              overflow: hidden;
              position: fixed;
              top: 0;
              width: 100%;
              z-index: 999;
          }

          .waitpage-box {
              background: none repeat scroll center center #2f2a5c;
              border: 1px solid #999;
              border-radius: 5px 5px 5px 5px;
              box-shadow: 0 1px 4px 0 #666;
              /*left: 44%;*/
              overflow: auto;
              padding: 16px;
              position: fixed;
              text-align: center;
              /*top: 46%;*/
              z-index: 99999;
              opacity: 0.6;
              height: 100%;
              width: 100%;
          }
          .waitpage-box p img {
              color: white;
              /*float: left;*/
              font-size: 14px;
              font-style: italic;
              font-weight: bold;
              left: 44%;
              margin-top: 15%;
          }
          .waitpage-box p span {
              /*float: left;*/
              font-size: 1em;
              font-weight: bold;
              padding: 6px 0 0 12px;
              white-space: nowrap;
              left: 43%; 
              margin-top: 22%;
              position: absolute;
          }
    </style>

 <script>

       $(document).ready(function(){
            connectMetamask()
        })
        var baseUrl="<?php echo url('/')?>";
         const ethereum = window.ethereum;

         ethereum.autoRefreshOnNetworkChange = false;
         

        function connectMetamask(){
          
          getAccount();
        }

        // ethereumButton.addEventListener('click', () => {

        // });
        

        async function getAccount() {
          
          try{
            
          const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
          
          const account = accounts[0];
          $('#connect-btn').html(account.substring(0, 12)+'...')
          console.log(account);


        }catch(err){
          // alert(err)
          // $('.loading').hide();
          // $('#waitpage').hide();
          console.log(err);
          
        }

        }



    </script>
