<!DOCTYPE html>
<html xml:lang="en" lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>INCOME2017 | Photos</title>
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

<meta property="og:title" content="Photos"/>
<meta property="og:description" content="9th International Conference on Mechanochemistry and Mechanical Alloying">
<meta property="og:image"/>
<meta property="og:site_name" content="INCOME2017"/>
<meta property="og:url" content="http://income2017.saske.sk/photos"/>
<meta property="og:type" content="website"/>
<meta property="og:locale" content="en_gb"/>
<!--meta property="fb:admins"/>
<meta property="fb:app_id" content=""/-->
<meta property="twitter:domain" content="income2017.saske.sk"/>
<meta property="twitter:card" content="summary"/>
<meta property="twitter:url" content="http://income2017.saske.sk/photos"/>
<meta property="twitter:site" content="@income2017"/>

<link rel="canonical" href="http://income2017.saske.sk/photos" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
<link rel="stylesheet" media="all" type="text/css" href="/css/w3.css">
<link rel="stylesheet" media="all" type="text/css" href="/css/income.css">
<link rel="stylesheet" href="/css/photoswipe.css">
<link rel="stylesheet" href="/css/default-skin/default-skin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

<script src="/js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="/js/script.js" type="text/javascript"></script>
<script src="/js/photoswipe.min.js"></script>
<script src="/js/photoswipe-ui-default.min.js"></script>

<body>

<?php
error_reporting (E_ALL ^ E_NOTICE);
?>

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
      <li><a href="/program">Program</a></li>
      <li><a href="/location">Location</a></li>
    </ul>
  </ul>
</div>

<div id="main" class="w3-container">

  <div class="section full w3-container">
    <h1><i class="fa fa-photo icon"></i> Photos</h1>

<?php
$result = stripslashes($_POST["result"]);
?>
<?php if ($result != "OK") : ?>
    <div class="status-message"></div>
    <form id="login-form">
      <label class="w3-label">Password</label>
      <input id="pwd" name="pwd" maxlength="12" class="w3-input w3-border" type="password" placeholder="Password" />
      <p class="w3-center">
        <button name="view" type="submit" class="login button w3-btn">View&nbsp;&nbsp;❯</button>
      </p>
    </form>
    <form id="photos-form" method="post" action="/photos">
      <input id="result" name="result" type="hidden" />
    </form>
<?php else : ?>
    <div class="w3-row">
<?php for ($i = 1; $i <= 136; $i++) : ?>
      <div class="photo w3-col l4 m6 <?php if ($i == 16 || $i == 23 || $i == 47 || $i == 75 || $i == 100 || $i == 101 || $i == 104 || $i == 122) { echo 'portrait'; } ?>">
        <div class="w3-image"><a href="javascript:openGallery(<?php echo $i; ?>)"><img src="img/photo/thumb/<?php echo $i; ?>.jpg" alt="Photo <?php echo $i; ?>" /></a></div>
      </div>
<?php endfor; ?>
    </div>
<?php endif; ?>
  </div>
</div>

<?php if ($result == "OK") : ?>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
<?php endif; ?>

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

<?php if ($result != "OK") : ?>
$("#login-form").submit(function() {

  // 'this' refers to the current submitted form
  var str = $(this).serialize();
  $(".status-message").hide();

  $.ajax({
    type: "POST",
    url: "/view",
    data: str,
    success: function(msg) {
      if (msg.lastIndexOf("OK") == 0) {
        $("#result").val("OK");
        $("#photos-form").submit();
      }
      else {
        result = "<p class=\"error message w3-center\">".concat(msg);
        result = result.concat("<span onclick=\"$('.status-message').fadeOut()\" class=\"w3-closebtn\">&times;</span>");
        result = result.concat("</p>");
        $(".status-message").fadeIn();
        $(".status-message").html(result);
      }
    }
  });
  return false;
});
<?php else : ?>
var pswpElement = document.querySelectorAll('.pswp')[0];

// build items array
var items = [
  <?php for ($i = 1; $i < 136; $i++) : ?>
  {
      src: 'img/photo/<?php echo $i; ?>.jpg',
      <?php if ($i == 16 || $i == 23 || $i == 47 || $i == 75 || $i == 100 || $i == 101 || $i == 104 || $i == 122) : ?>
      w: 1192,
      h: 1800
      <?php else : ?>
      w: 1800,
      h: 1192
      <?php endif; ?>
  },
  <?php endfor; ?>
  {
      src: 'img/photo/136.jpg',
      w: 1800,
      h: 1192
  }
];

function openGallery(index) {
  var options = {
      index: (index - 1)
  };

  var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
  gallery.init();
}
<?php endif; ?>
</script>

<div id="footer" class="w3-container">
  <ul class="w3-navbar w3-tiny">
    <li><a href="http://2keyplayers.com" target="_blank" style="display:inline-block">&copy; 2016-2017 INCOME2017, <i class="fa fa-code"></i> Patrik Tóth</a></li>
  </ul>
</div>

<?php include_once("analyticstracking.php") ?>

</body>
</html>
