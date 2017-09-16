<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div style="padding:50px 0px 0px 500px;">
<button class="btn btn-success" id="getusers" onclick="allUsers();">Click to see Users</button>
</div>
<div id="result" style="padding:20px 0px 0px 300px;"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 	function allUsers()
 	{
 		
 		            $.ajax({
                        url:  "login.php",
                        type: 'POST',
                        data:{method:"GET"},
                        success: function(data)
                        {  
                           $('#result').html(data);
                        }
                        
                         
                    });
          event.preventDefault();
 	}
 </script>
</body>
</html>