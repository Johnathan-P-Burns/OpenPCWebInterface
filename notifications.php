<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OpenPC - Notifications</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
	
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">OpenPC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 my-auto">
            <div style="color:#003300;" class="header-content mx-auto">
				<div class="formden_header">
				 <h2>
				  OpenPC NotifyMe
				 </h2>
				 <p>
				  The only time we will contact you is to notify you that a system is available.
				 </p>
				</div>
				<form method="post">
				 <div class="form-group ">
				  <label class="control-label requiredField" for="timeout">
				   Pick your max wait time (in minutes)
				  </label>
				  <input class="form-control" id="timeout" name="timeout" type="text"/>
				 </div>
				 <div class="form-group ">
				  <label class="control-label " for="contactInfo">
				   Contact Info
				  </label>
				  <input class="form-control" id="contactInfo" name="contactInfo" type="text"/>
				  <span class="help-block" id="hint_email">
				   Use either a valid email address or a phone number in the form +1XXXXXXXXXX
				  </span>
				 </div>
				 <div class="form-group">
				  <div>
				   <button class="btn btn-primary " name="submit" type="submit" value="RUN">
					Submit
				   </button>
				  <?php
					function testFunc()
					{
						#print "Kappa123";
						exec("python notifyUser.py Eg4/W8kheaGE4jEYaiprgui33w6Djjaud15c7uIF " . $_SERVER['QUERY_STRING'] . " " . $_POST["contactInfo"] . " " . $_POST["timeout"] . " &> /dev/null &");
					}

					if(array_key_exists('submit',$_POST))
					{
						testFunc();
					}
				  ?>
				  </div>
				 </div>
				</form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <footer>
      <div class="container">
        <p>&copy; 2017 Medjed. All Rights Reserved.</p>
	<a href="https://github.com/Johnathan-P-Burns/OpenPC">View Source on GitHub.</a>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
