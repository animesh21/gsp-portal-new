function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				req = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }

	function getProperty(propertyid) {		
		var strURL="/inc/rightside-property-search.asp?propertyid="+propertyid;
		var req = getXMLHTTP();
		 // alert(strURL);
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					// alert(req.status);
					if (req.status == 200) {						
						document.getElementById('propdiv').innerHTML=req.responseText;
					} else {
						alert("There was a problem in selection");
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	