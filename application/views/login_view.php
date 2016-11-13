<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" href="<?php echo base_url("image/favicon.ico"); ?>">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/midi.css"); ?>" />
	
	<title>MIDI Controller Web</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MIDI Controller</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="<?php echo site_url('/auth/login') ?>" method="post" accept-charset="utf-8">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control" name="identity" id="identity">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
              <input type="checkbox" name="remember" value="1" id="remember">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Sign in</button>
          </form>      
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to MIDI controller!</h1>
        <p>This is a simple web page used to cooperate with MIDI keyboard in order to provide more control. Some MIDI feature which is not suitable for kayboard can be configured here. Such as change instrument and repeat beat.</p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/Zulolo/midi_daemon/wiki" role="button">Learn more »</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Main Function 1</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Main Function 2</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
       </div>
        <div class="col-md-4">
          <h2>Main Function 3</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>© 2016 Zulolo Company, Inc.</p>
      </footer>
    </div> <!-- /container -->
</body>
</html>
