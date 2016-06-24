
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://cliparts.co/cliparts/piq/KRo/piqKRo74T.png">

    <title>Tall Tree Teens</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/feed.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="signin.html">Tall Tree Teens</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
          	<li><a href="feed.html">Home</a></li>
            <li><a href="profiles.html">Profile</a></li>
            <li><a href="settings.html">Settings</a></li>
            <li><a href="help.html">Help</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search topics...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Browse All Topics <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Trending</a></li>
            <li><a href="#">Alphabetical</a></li>
            <li><a href="#">Coming Up</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Education</a></li>
            <li><a href="">Funding</a></li>
            <li><a href="">Infrastructure</a></li>
            <li><a href="">Transportation</a></li>
            <li><a href="">Housing and Urban Development</a></li>
          </ul>
        </div>

     <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Tall Tree Teens</h1>
                        <p>Database stuff will be here.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <?php
          echo "<p>Hello World</p>";
          $conn->close();
        ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
