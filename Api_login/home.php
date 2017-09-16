<html>
<head>
	<title>Rest Api</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
          <h2 style="padding-left: 180px;">Login form</h2>
	<form method="post" action="">
        <div class="row">
		    <div class="form-group">
		       <div class="col-sm-6">
		       <label for="vws">VWS Licence Key</label>
		       <input type="text" class="form-control" id="vws" placeholder="Enter VWS Licence Key" name="vws">
		       </div>
		    </div>
	    </div>
	    <div class="row">
		    <div class="form-group">
			    <div class="col-sm-6">
			    <label for="cakey">Client Access Key</label>
			    <input type="text" class="form-control" id="cakey" placeholder="Enter Client Access Key" name="cakey">
			    </div>
		    </div>
	    </div>
	    <div class="row">
		    <div class="form-group">
			    <div class="col-sm-6">
			    <label for="cskey">Client secret Key</label>
			    <input type="text" class="form-control" id="cskey" placeholder="Enter Client secret Key" name="cskey">
			    </div>
		    </div>
	    </div>
	    <div class="row">
		    <div class="form-group">
			    <div class="col-sm-6">
			    <label for="sakey">Server Access Key</label>
			    <input type="text" class="form-control" id="sakey" placeholder="Enter Server Access Key" name="sakey">
			    </div>
		    </div>
	    </div>
	    <div class="row">
		    <div class="form-group">
			    <div class="col-sm-6">
			    <label for="sskey">Server secret Key</label>
			    <input type="text" class="form-control" id="sskey" placeholder="Enter Server secret Key" name="sskey">
			    </div>
		    </div>
	    </div>
		<div class="row" style="padding: 10px 0px 0px 13px;">
			    <input type="submit" class="btn btn-default" value="Submit" onclick="api_request();">
		</div>
    </form>
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 	function api_request()
 	{
 		var vws=document.getElementById("vws").value;
 		var cakey=document.getElementById("cakey").value;
 		var cskey=document.getElementById("cskey").value;
 		var sakey=document.getElementById("sakey").value;
 		var sskey=document.getElementById("sskey").value;
 		            $.ajax({
                        url:  "login.php",
                        type: 'POST',
                        data:{vws:vws,cakey:cakey,cskey:cskey,sakey:sakey,sskey:sskey,method:"POST"},
                        success: function(response)
                        {  
                          alert(response);
                        }
                        
                         
                    });
          event.preventDefault();
 	}
 </script>
</body>
</html>