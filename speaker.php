<!DOCTYPE html>
<html xml:lang="en" lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>INCOME2017 | Speaker</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="language" content="english">
<meta name="author" content="2 Key Players" />
<!--meta name="designer" content="2 Key Players">
<meta name="publisher" content="2 Key Players"-->
<meta http-equiv="content-language" content="en" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<meta name="copyright" content="Copyright 2016, 2KP" />
<meta name="rating" content="Safe For Kids" />
<meta name="keywords" content="INCOME, INCOME2017, INCOME 2017, Košice, Slovakia, Conference, Mechanochemistry, Mechanosynthesis, Mechanical Alloying, Mechanical Activation, International" />
<meta name="description" content="INCOME2017 - 9th International Conference on Mechanochemistry and Mechanical Alloying">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day" />
<meta name="doc-type" content="Web Page"/>
<meta name="doc-classs" content="Completed"/>
<meta name="doc-rights" content="Copywritten Work"/>
<meta name="city" content="Košice">
<meta name="country" content="Slovakia">
<meta name="distribution" content="global">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="x-rim-auto-match" content="none">

<!--meta property="og:title" content="INCOME2017 | Registration"/>
<meta property="og:description" content="9th International Conference on Mechanochemistry and Mechanical Alloying">
<meta property="og:image"/>
<meta property="og:site_name" content="INCOME2017"/>
<meta property="og:url" content="http://income2017.saske.sk/speaker/<?php if (isset($_GET['name'])) { echo $_GET['name'] . '/'; } ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:locale" content="en_gb"/>
<meta property="twitter:domain" content="income2017.saske.sk"/>
<meta property="twitter:card" content="summary"/>
<meta property="twitter:url" content="http://income2017.saske.sk/speaker/<?php if (isset($_GET['name'])) { echo $_GET['name'] . '/'; } ?>"/>
<meta property="twitter:site" content="@income2017"/-->

<link rel="canonical" href="http://income2017.saske.sk/speaker/<?php if (isset($_GET['name'])) { echo $_GET['name'] . '/'; } ?>" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
<link rel="stylesheet" media="all" type="text/css" href="/css/w3.css">
<link rel="stylesheet" media="all" type="text/css" href="/css/income.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

<script src="/js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="/js/script.js" type="text/javascript"></script>

<body>

<div id="navigation" class="fixed w3-container">
  <ul class="navigation-toggler w3-navbar w3-large">
    <li style="text-align:center"><a href="/" style="display:inline-block; float:left"><span class="in">I</span><span class="in">N</span><span class="co">C</span><span class="co">O</span><span class="me">M</span><span class="me">E</span><span class="year">2</span><span class="year">0</span><span class="year">1</span><span class="year">7</span></a><a href="javascript:toggleNavigation()" style="display:inline-block; float:right"><i class="fa fa-bars"></i><i class="fa fa-close" style="display:none; margin-right:1px"></i></a></li>
  </ul>
  <ul class="navigation w3-navbar w3-large">
    <li class="home"><a href="/"><span class="in">I</span><span class="in">N</span><span class="co">C</span><span class="co">O</span><span class="me">M</span><span class="me">E</span><span class="year">2</span><span class="year">0</span><span class="year">1</span><span class="year">7</span></a></li>
    <ul class="w3-right">
      <li><a class="about" href="/about">About</a></li>
      <li><a href="/information">General information</a></li>
      <li><a href="/registration">Registration</a></li>
      <li><a class="selected" href="/program">Program</a></li>
      <li><a href="/location">Location</a></li>
    </ul>
  </ul>
</div>

<div id="main" class="w3-container">

  <div class="section full w3-container">
    <?php
    $extension = "jpg";
    $name = "";
    if (isset($_GET['name'])) {
      $name = $_GET['name'];
    }
    ?>
    <h1><i class="fa fa-person icon"></i> <?php echo str_replace('-',' ',$name); ?></h1>
    <div class="w3-container"><img class="w3-circle" src="/img/speaker/<?php echo str_replace('-','',$name) . '.' . $extension; ?>"
      alt="<?php echo str_replace('-',' ',$name); ?>" /></div>
    <h3>Title</h3>
    <?php if ($name == "") : ?>
    <p></p>
    <h3>About</h3>
    <p></p>
    <?php endif; ?>
  </div>

</div>

<a href="javascript:void(0)" class="top"><i class="fa fa-chevron-circle-up"></i></a>

<script type="text/javascript">
$(document).ready(function() {

  var headerHeight = 300;
  $(window).bind("scroll", function() {
    if (scrollToTop < 1) {
      if ($(window).scrollTop() > headerHeight) {
        $(".top").fadeIn(300);
      } else {
        $(".top").fadeOut(300);
      }
    }
  });

});

</script>

<div id="footer" class="w3-container">
  <ul class="w3-navbar w3-tiny">
    <li><a href="http://2keyplayers.com" target="_blank" style="display:inline-block">&copy; 2016-2017 INCOME2017, <i class="fa fa-code"></i> by Patrik Tóth</a></li>
  </ul>
</div>

<?php include_once("analyticstracking.php") ?>

</body>
</html>
