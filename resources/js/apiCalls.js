class apiCalls{
	
	getNetworks(){

		fetch('/ally/api/get-networks',
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
	    .then((data) => {
	      // var currencyList = [];
	      // for(var i=0; i< data.length; i++){
	      //   var currency = data[i];
	      //   currencyList.push(currency);
	      // }
	      // console.log(currencyList);
	      // this.setState({currencyList})
		// console.log(data);
	     return data;
	    })
	    .catch(err => console.log(err))
	
		}
}

export default apiCalls;