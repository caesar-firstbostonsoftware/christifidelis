<!DOCTYPE html>
<html lang="en">
<head>

  @yield('gallery')
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <style type="text/css">
        #divshadow {
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px 8px #888888;
}

h2{
    -webkit-animation: color-change 2s infinite;
    -moz-animation: color-change 2s infinite;
    -o-animation: color-change 2s infinite;
    -ms-animation: color-change 2s infinite;
    animation: color-change 2s infinite;
}

@-webkit-keyframes color-change {
    0% { color: red; }
    25% { color: orange; }    
    50% { color: blue; }
    75% { color: green; }
    100% { color: red; }
}
@-moz-keyframes color-change {
    0% { color: red; }
    25% { color: orange; }    
    50% { color: blue; }
    75% { color: green; }
    100% { color: red; }
}
@-ms-keyframes color-change {
    0% { color: red; }
    25% { color: orange; }    
    50% { color: blue; }
    75% { color: green; }
    100% { color: red; }
}
@-o-keyframes color-change {
    0% { color: red; }
    25% { color: orange; }    
    50% { color: blue; }
    75% { color: green; }
    100% { color: red; }
}
@keyframes color-change {
    0% { color: red; }
    25% { color: orange ; }    
    50% { color: blue; }
    75% { color: green; }
    100% { color: red; }
}

.center {
    margin: auto;
    width: 60%;
    padding: 10px;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}

.alignleft {
    float: left;
}
.alignright {
    float: right;
}

    </style>
    <meta charset="utf-8">
    <title>CHRISTIFIDELIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

  
</head>

<body>
    <div>
        <div>
<!-- topbar starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="img/logo.png" height="42" width="42"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 <!--     <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="/gallery">School Activities Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/offer">School Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Parents/Guardian</a>
      </li>
      </ul>
      <ul>
      <li class="navbar-nav nav-item">
        <a class="nav-link" href="/">Login</a>
      </li>
  </ul>
 <!--     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> 
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav> 
<!-- topbar ends -->

<div class="container col-md-12" align="center">

            @yield('content')

</div>




    <footer class="footer" style="font-size:10px; padding-right: 30px; padding-left: 30px">

        <p class="alignleft copyright"> <a href="#" target="_blank">ACADEMIA del CHISTIFIDELIS</a> &copy;{{date('Y')}}</p>

        <p class="alignright powered-by">Powered by: <a target="_blank" href="http://firstbostonsoftware.com/">FirstBostonSoftware</a></p>
    </footer>

</div><!--/.fluid-container-->



@yield('script')
</body>
</html>
