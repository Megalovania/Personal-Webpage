<!--
Author: Cory Cizauskas

This page contains a reactive contact form

Note: this form will not work on any other XAMPP servers but my own.

-->

<!doctype html>

<head>
  <title>Cory's Personal Website</title>
  <meta charset="utf-8">
  <meta name="author" content="Megalovania">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img height=30px src="images/American_Flag.png" />
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="blog.php">Blog</a>
          </li>
          <li>
            <a href="aboutme.php">About Me</a>
          </li>
          <li>
            <a href="album.php">Album</a>
          </li>
          <li class="active">
            <a href="contact.php">Contact</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <!--a href="#"><span class="glyphicon glyphicon-log-in"></span></a-->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <div class="well">
          <p class="left-link">
            <a href="https://www.facebook.com/cory.cizauskas">Facebook Profile</a>
          </p>
          <p class="left-link">
            <a href="https://www.linkedin.com/in/cory-cizauskas-b4b42194">LinkedIn Account</a>
          </p>
          <p class="left-link">
            <a href="http://iwastesomuchtime.com/">Random Feed Site</a>
          </p>
        </div>
      </div>
      <div class="col-sm-8 text-left">
        <h1>Contact Me</h1>
        <p>Feel free to send any comments or questions.</p>
        <hr>

        <form id="contact_form" action="php/processForm.php" method="POST">
          <div class="row">
            <label for="name">Your name:</label>
            <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
          </div>
          <div class="row">
            <label for="email">Your email:</label>
            <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
          </div>
          <div class="row">
            <label for="message">Your message:</label>
            <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
          </div>
          <input id="submit_button" type="submit" value="Send email" />
        </form>
        <div id="response"></div>
        </div>
        <div class="col-sm-2 sidenav">
          <div class="well">
            <img class="nyt" />
            <hr class="nyt-hr">
            <?php for($x = 0; $x < 5; $x++): ?>
              <div class="nyt-art">
                <a target="_blank">
                  <div class="title"></div>
                </a>
                <div class="abstract"></div>
              </div>   
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <h3>“Only on the Internet can a person be lonely and popular at the same time.”</h3>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>
    <script src="js/nyt.js"></script>
    
  </body>

</html>
