<!--
Author: Cory Cizauskas

This page contains information about me and a password protected resume

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
          <li class="active">
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
        <h1>My Life</h1>
        <p>Born and raised in Pennsylvania, I've spent... It's been one week since you looked at me. Cocked your head to the side and said I'm angry. Five days since you laughed at me saying Get that together come back and see me. Three days since
the living room, I realized it's all my fault, but couldn't tell you. Yesterday you'd forgiven me. But it'll still be two days till I say I'm sorry. Hold it now and watch the hoodwink. As I make you stop, think. You'll think you're
looking at Aquaman. I summon fish to the dish, Although I like the Chalet Swiss. I like the sushi. Cause it's never touched a frying pan. Hot like wasabe when I bust rhymes. Big like Leann Rimes. Because I'm all about value. Bert Kaempfert's
got the mad hits. You try to match wits. You try to hold me but I bust through</p>
        <hr>
        <h2>Work Experience</h3>
        <p>What are you looking at?<br>
        <br>Unless you're an old fashioned lad that prefers look at websites on paper, your eyes are focused upon a glass sheet containing thousands of LED bulbs. Every millisecond these lights shift in intensity, as your visual cortex perceives solid multi-dimensional objects from the patterns they create.<br>
        <br>I am a computer engineer, and my job is to keep those lights on.</p>

        <h4>
          <a id="rDownload" download>Custom Resume: You will need a password to download</a>
        </h4>
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
    <h3>“Every experience, good or bad, is a priceless collector's item.”</h3>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <script src="js/nyt.js"></script>
  <script src="js/resume.js"></script>
</body>
</html>
