<!--Author: Cory Cizauskas-->

<!--I used the following bootstrap template as a starting point:
https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h-->

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

  <body width="100%">

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
            <li class="active">
              <a href="#">Home</a>
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
            <li>
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

    <div class="beach-b">

    </div>

    <footer class="container-fluid text-center">
      <h2>"Some things are ever more present when left at a distance."</h2>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
