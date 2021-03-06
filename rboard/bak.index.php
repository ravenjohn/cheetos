<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- META -->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- META COPY FOR SEO -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- GOOGLE ANALYTICS -->

    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

    <title>ReliefBoard</title>

  </head>

  <body>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=214855112027480";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">ReliefBoard</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <form class="navbar-form">
            <div class="form-group">
              <input type="text" id="search" placeholder="Search" class="form-control" autocomplete="off">
            </div>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <br />
        <h2>How to post to ReliefBoard:</h2>
        <p>Send SMS to 23737102 (Globe): location/name/message <br /> Example: "tacloban/Juan dela Cruz/Please send food to our area asap!"</p>
      </div>
    </div>

    <div class="container">
      <div class="row"><a href="#" class="notif" title="Click to Show">There are <span id="count"></span> new post(s). Click to Show.</a></div>
      <div class="search-container row"><h2>Search Results (<span id="search-count">0</span>):</h2><hr /></div>
      <div id="msg" class="row"></div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/underscore.min.js"></script>
    <script src="js/time.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>