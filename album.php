<!--Author: Cory Cizauskas-->

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
          <li class="active">
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
      <div class="col-sm-8 text-left" id="album">
        <h1>Photo Album</h1>
        <hr>
        
        
        <?php 
        $path    = './b-images';
        $files = scandir($path);
        
        $count = 0;
        
        foreach($files as $filename):
        $bfilename = explode(".", $filename);
        
        //echo($bfilename[1]);
        
        if(strtolower($bfilename[1]) == 'jpg'):
        ?>
        
        <div class="img">
          <a target="_blank" href="b-images/<?php echo($filename); ?>">         
            <img src="b-images/<?php echo($filename); ?>" alt="<?php echo($bfilename[0]); ?>" width="300" height="200">           <!--make a div tag specify image name as background-image, background size | position-->
          </a>
          <div class="desc"><?php echo($bfilename[0]); ?></div>
        </div>
        
        <?php endif; endforeach; ?>

        <!--div class="img">
          <a target="_blank" href="b-images/IMG_1330.jpg">
            <img src="b-images/IMG_1330.jpg" alt="Forest" width="300" height="200"/>
          </a>
          <div class="desc">Somewhere in Sylvania</div>
        </div>

        <div class="img">
          <a target="_blank" href="b-images/IMG_1602.jpg">
            <img src="b-images/IMG_1602.jpg" alt="Rainy Day" width="300" height="200"/>
            </a>
            <div class="desc">Sunlit Road</div>
          </div>

          <div class="img">
            <a target="_blank" href="b-images/IMG_1786.jpg">
              <img src="b-images/IMG_1786.jpg" alt="Coffee" width="300" height="200"/>
            </a>
            <div class="desc">Coffee Art</div>
          </div-->
          
          
          
        </div>
        <div class="col-sm-2 sidenav">
          <div class="well">
            <img class="nyt" />
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <h3>“Communication works for those who work at it.”</h3>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
