
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>ISB customer update</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <!-- Jumbotron -->
      <div class="jumbotron">

	<div class="form-inline" role="form">
        <p class="lead">Please enter the field you need to update.</p>
	
	<div class="row">
    	<form class="span6" action="updatecustomeraccountprocess.php" method="post">
	<h5>Please enter your login details.<h5><br>
	<input type="email" class="form-control" name="email" placeholder="Email" required>
	<input type="password" class="form-control" name="password" placeholder="Password" required>
	<h5>Personal Information.<h5><br>
       	<input type="text" name = "firstname" class="form-control"  placeholder="First Name"  autofocus>
	<input type="text" name = "middlename" class="form-control" placeholder="Middle Name" >
	<input type="text" name = "lastname" class="form-control" placeholder="Last Name" ><br>
	<br>
	<h5>Contact Information.<h5><br>
	<input type="tel" class="form-control"  title='Phone Number (Format: 999999999)' name="phonehome" placeholder="Phone Home">
	<input type="tel" class="form-control"  title='Phone Number (Format: 999999999)' name="phonemobile" placeholder="Phone Mobile" >
	<input type="tel" class="form-control"  title='Phone Number (Format: 999999999)' name="Intlphonemobile" placeholder="International Phone" ><br>
	<input type="text" class="form-control" name="hmaddresstype" placeholder="Address type" >
	<input type="text" class="form-control" name="hmaddress" placeholder="Address Line 1" >
	<input type="text" class="form-control" name="hmstreet" placeholder="Address Line 2" >
	<input type="text" class="form-control" name="hmcity" placeholder="City" >
	<input type="text" class="form-control" name="hmstate" placeholder="State code" >
	<input type="text" class="form-control" name="hmzip" placeholder="Zip" >
	<input type="text" class="form-control" name="country" placeholder="Country" >
	<br>
	<p><input class="btn btn-lg btn-success" type="submit" role="button" ></a></p>
	</form>
	</div>
	</div> <!-- /container -->
	
      </div>
  </body>
</html>

