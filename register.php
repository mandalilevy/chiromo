<!DOCTYPE html>
<html>
<head>
	<title>CHIROMO FUNERAL SERVICES</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "icon" href = "logo.jpeg" type = "image/x-icon"> 
</head>
<body>


<div class="container">
	<div style="padding-top: 10%">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading" style="background-color: LightCyan">
		<h5 class="panel-title"><center>ATTENDANT REGISTRATION</center></h5>
			 			</div>
			 			<div class="panel-body">
			    		<form  method="POST" action="insert.php"autocomplete="off">
			    			 			 <?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert alert-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>
			    		
			    				
			    					<div class="form-group">
			    			<label class="form-group">Full Name</label>
			                <input type="text" name="nam"class="form-control input-sm" placeholder="Full Name" required="">
			    					</div>
			                 
			    			<div class="form-group">
			    				<label class="form-group">Email Address</label>
			    				<input type="email" name="emm" class="form-control input-sm" placeholder="Email Address" required="">
			    			</div>

			    		
			    				
			    					<div class="form-group">
			    					<label class="form-group">Password</label>
			    						<input type="password" name="pass" id="password" class="form-control input-sm" placeholder="Password" required="">
			    					</div>
			    				
			    				
			    			
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    		<a href="index.php">Login Here</a>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
    </div>
</body>
</html>