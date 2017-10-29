<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OpenPC - Home</title>

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
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Live Demo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#hood">Under the Hood</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5"><strong>OpenPC</strong> is a web application that allows students to find an available computer on campus with the programs they need to get to work.</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Check it out!</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Check it out for yourself!</h2>
            <p>See how it works with our Live Demo</p>
            <div class="badges">
              <button type="button" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Enter Live Demo</a>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="features" id="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Mobile Support</h3>
                    <p class="text-muted">The OpenPC web app works on desktop and mobile browsers, so you can find an open pc on the go!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fa fa-search"></i>
                    <h3>Powerful Searching</h3>
                    <p class="text-muted">Find a computer on campus that meets your needs by searching for specific Operating Systems, Processor Families, Applications, Printing Capabilities, and more!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fa fa-bell-o text-primary"></i>
                    <h3>Notifications</h3>
                    <p class="text-muted">Nothing available? No worries! Recieve SMS, Email, or Browser Notifications when the computer you need is available!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fa fa-github-alt text-primary"></i>
                    <h3>Open Source</h3>
                    <p class="text-muted">All source code is easily available, allowing schools to host their own copy of OpenPC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Powerful Parts<br>Working Together.</h2>
          <a href="#hood" class="btn btn-outline btn-xl js-scroll-trigger">What goes on under the hood?</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="hood">
      <div class="container">
        <h2>Under the hood <i class="fa fa-cog fa-spin"></i></h2>
		<p>In order to make OpenPC work seamlessly, there are many working parts that mesh together. Our web frontend is set up with simplicity and user-friendliness in mind, with a powerful search function that can narrow down every need a student may have for a computer. The management console allows complete control over the database, from adding and monitoring buildings, rooms, and computers, to emulating OpenPC nodes for diagnostic and testing purposes. In order to notify the server that a computer on campus is already reserved, a small application called OpenPC Node will run in the background when a computer is in use, periodically sending a heartbeat to the Database Interface. When working together, all these moving parts make for a complete, beautiful, and functional user experience.</p>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2017 Medjed. All Rights Reserved.</p>
	<a href="https://github.com/Johnathan-P-Burns/OpenPC">View Source on GitHub.</a>
	<br>
	<a href="http://ec2-34-192-112-37.compute-1.amazonaws.com/notifications.php?0bac2d1f-7bc2-47ac-82e5-e5293b2a731b">Sneaky Little Notification Demo</a>
      </div>
    </footer>

	<div class="modal fade" id="myModal" role="dialog"">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Find a Computer</h4>
        </div>
		
        <div class="modal-body">
            <form action="demo.php" method="get">
     <div class="form-group ">
      <label class="control-label " for="location">
       Location
      </label>
      <select class="select form-control" id="location" name="location">
       <option value="Any">
        Any
       </option>
       <option value="Min Kao">
        Min Kao
       </option>
       <option value="Hodges Library">
        Hodges Library
       </option>
       <option value="Ayers">
        Ayers
       </option>
       <option value="Dougherty">
        Dougherty
       </option>
       <option value="Perkins">
        Perkins
       </option>
       <option value="Student Union">
        Student Union
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label " for="processor">
       Processor
      </label>
      <select class="select form-control" id="processor" name="processor">
       <option value="Any">
        Any
       </option>
       <option value="i3">
        Intel i3
       </option>
       <option value="i5">
        Intel i5
       </option>
       <option value="i7">
        Intel i7
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label " for="os">
       Operating System
      </label>
      <select class="select form-control" id="os" name="os">
       <option value="Any">
        Any
       </option>
       <option value="Windows">
        Windows
       </option>
       <option value="Macintosh">
        Macintosh
       </option>
       <option value="Linux/Unix">
        Linux/Unix
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label " for="memory">
       Minimum Memory
      </label>
      <input class="form-control" id="memory" name="memory" placeholder="0" type="text"/>
      <span class="help-block" id="hint_memory">
       If unsure, just leave this at 0
      </span>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       Applications
      </label>
      <div class=" ">
       <div class="checkbox">
        <label class="checkbox">
         <input name="app" type="checkbox" value="Microsoft Office"/>
         Microsoft Office
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="app" type="checkbox" value="Video Editing"/>
         Video Editing
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="app" type="checkbox" value="Photo Editing"/>
         Photo Editing
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="app" type="checkbox" value="Music Editing"/>
         Music Editing
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="apps" type="checkbox" value="Programming"/>
         Programming
        </label>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-default " type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
			
        </div>
       <div class="modal-footer">
      </div>
    </div>
   </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
