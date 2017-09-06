<!DOCTYPE html>
<html xml:lang="en" lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>INCOME2017 | Registration</title>
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
<meta property="og:url" content="http://income2017.saske.sk/register/<?php if (isset($_GET['type'])) { echo $_GET['type'] . '/'; } ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:locale" content="en_gb"/>
<meta property="twitter:domain" content="income2017.saske.sk"/>
<meta property="twitter:card" content="summary"/>
<meta property="twitter:url" content="http://income2017.saske.sk/register/<?php if (isset($_GET['type'])) { echo $_GET['type'] . '/'; } ?>"/>
<meta property="twitter:site" content="@income2017"/-->

<link rel="canonical" href="http://income2017.saske.sk/register/<?php if (isset($_GET['type'])) { echo $_GET['type'] . '/'; } ?>" />
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
<script src="https://www.google.com/recaptcha/api.js?hl=en"></script>

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
      <li><a class="selected" href="/registration">Registration</a></li>
      <li><a href="/program">Program</a></li>
      <li><a href="/location">Location</a></li>
    </ul>
  </ul>
</div>

<div id="main" class="w3-container">

  <form id="registration-form">

    <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>" />

    <div class="w3-row">
      <div class="section full w3-col s12 m12 l12 no-padding-bottom">
        <h1><i class="fa fa-check icon"></i> Registration</h1>
        <div class="status-message"></div>
      </div>
      <div class="section left w3-half no-padding">
        <h3>Personal data</h3>
        <div style="margin-bottom:10px">
          <input id="male" name="gender" type="radio" value="M" checked="checked" />
          <label for="male" class="w3-label">Mr.</label>
          <input id="female" name="gender" style="margin-left:20px" type="radio" value="F" />
          <label for="female" class="w3-label">Mrs.</label>
        </div>
        <label class="w3-label">Degree</label>
        <select id="degree" name="degree" class="w3-select w3-border">
          <option value="" selected>None</option>
          <option value="Dr.">Dr.</option>
          <option value="Prof.">Prof.</option>
        </select>
        <label class="w3-label">First name <span class="red">*</span></label>
        <input id="first-name" name="firstname" maxlength="50" class="w3-input w3-border" type="text" placeholder="First name" />
        <label class="w3-label">Last name <span class="red">*</span></label>
        <input id="last-name" name="lastname" maxlength="50" class="w3-input w3-border" type="text" placeholder="Last name" />
        <label class="w3-label">E-mail <span class="red">*</span></label>
        <input id="email" name="email" maxlength="100" class="w3-input w3-border" type="email" placeholder="email@address.com" />
        <label class="w3-label">Phone</label>
        <input id="phone" name="phone" maxlength="50" class="w3-input w3-border" type="text" placeholder="+42123456789" />
      </div>
      <div class="section right w3-half no-padding">
        <h3>Affiliation</h3>
        <label class="w3-label">Univ. / Inst. / Comp. <span class="red">*</span></label>
        <input id="affiliation" name="affiliation" maxlength="100" class="w3-input w3-border" type="text" placeholder="Univ. / Inst. / Comp." />
        <label class="w3-label">Address <span class="red">*</span></label>
        <div class="w3-row">
          <div class="w3-col" style="width:80%">
            <input id="street" name="street" maxlength="50" class="w3-input w3-border" type="text" placeholder="Street" />
          </div>
          <div class="w3-rest">
            <input id="nr" name="nr" maxlength="10" class="w3-input w3-border" type="text" placeholder="Nr" />
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-col" style="width:70%">
           <input id="city" name="city" maxlength="50" class="w3-input w3-border" type="text" placeholder="City" />
          </div>
          <div class="w3-rest">
            <input id="zip-code" name="zipcode" maxlength="10" class="w3-input w3-border" type="text" placeholder="ZIP Code" />
          </div>
        </div>
        <select id="country" name="country" class="w3-select w3-border">
          <option value="" disabled selected>Country</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="Angola">Angola</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
          <option value="Brazil">Brazil</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Colombia">Colombia</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="Estonia">Estonia</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Greece">Greece</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iran">Iran</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Japan">Japan</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Korea, Dem. People Rep.">Korea, Dem. People Rep.</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Latvia">Latvia</option>
          <option value="Libya">Libya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macedonia">Macedonia</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Malta">Malta</option>
          <option value="Mexico">Mexico</option>
          <option value="Moldova">Moldova</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Netherlands">Netherlands</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Qatar">Qatar</option>
          <option value="Romania">Romania</option>
          <option value="Russia">Russia</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Serbia & Montenegro">Serbia &amp; Montenegro</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Korea">South Korea</option>
          <option value="Spain">Spain</option>
          <option value="Sudan">Sudan</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="The Netherlands">The Netherlands</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnam">Vietnam</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
<?php if (isset($_GET['type']) && ($_GET['type'] != 'exhibitor')) : ?>
        <h3>Presentation</h3>
        <label class="w3-label">Form</label>
        <select id="presentation" name="presentation" class="w3-select w3-border"
                onchange="presentationFormChanged()">
          <option value="None" selected>None</option>
          <option value="Lecture">Lecture</option>
          <option value="Poster">Poster</option>
        </select>
        <div class="wrapper" style="display:none">
          <label class="w3-label">Title <span class="blue">*</span></label>
          <input id="title" name="title" maxlength="256" class="w3-input w3-border" type="text" placeholder="Title" />
        </div>
<?php endif; ?>
      </div>
    </div>

    <div class="section full w3-container" style="text-align:center">
      <p class="w3-center">
        <input id="agreement" name="agreement" type="checkbox" value="Agree" />
        <label for="agreement">I agree, that having filled in the Registration form indicates my serious interest in the conference and is a binding act.</label>
      </p>
      <div class="g-recaptcha" style="display:inline-block" data-sitekey="6LcmvRMUAAAAALJMgofaJen-57ylX0rvv1fhlj0S"></div>
    </div>

    <div class="buttons section full w3-container">
      <p class="w3-center">
<?php if (isset($_GET['type'])) : ?>
        <button name="register" type="submit" class="register button w3-btn">Register</button>
        <button name="clear" type="reset" onclick="presentationFormChanged(true);$('.status-message').hide()" class="reset button w3-btn">Reset</button>
<?php else : ?>
        <a href="/registration" class="button w3-btn-block w3-red">Registration type not selected. Please use the Registration page for proper registration.</a>
<?php endif; ?>
      </p>
      <p class="w3-center" style="color:#999999">
        <span class="red">*</span> required
<?php if (isset($_GET['type']) && ($_GET['type'] != 'exhibitor')) : ?>
        , <span class="blue">*</span> required only if Presentation Form is other than None
<?php endif; ?>
      </p>
    </div>

  </form>

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

$("#registration-form").submit(function() {

  // 'this' refers to the current submitted form
  var str = $(this).serialize();
  $(".status-message").hide();

  $.ajax({
    type: "POST",
    url: "/sendmail",
    data: str,
    success: function(msg) {
      if (msg == "OK") {
        result = "<p class=\"info message w3-center\">Registration successful. Please check your e-mail for further instructions. Thank you!";
        document.getElementById("registration-form").reset();
        if (window.grecaptcha) grecaptcha.reset();
<?php if (isset($_GET['type']) && ($_GET['type'] != 'exhibitor')) : ?>
        presentationFormChanged(true);
<?php endif; ?>
      }
      else if (msg == "NOK") {
        result = "<p class=\"warning message w3-center\">Registration successful, but a confirmation e-mail could not be sent. Please get in touch with us and we'll try to resend it.";
        document.getElementById("registration-form").reset();
        if (window.grecaptcha) grecaptcha.reset();
<?php if (isset($_GET['type']) && ($_GET['type'] != 'exhibitor')) : ?>
        presentationFormChanged(true);
<?php endif; ?>
      }
      else {
        result = "<p class=\"error message w3-center\">".concat(msg);
      }
      result = result.concat("<span onclick=\"$('.status-message').fadeOut()\" class=\"w3-closebtn\">&times;</span>");
      result = result.concat("</p>");
      $(".status-message").fadeIn();
      $(".status-message").html(result);
      $("html, body").animate({
        scrollTop: 0
      }, 400, "swing", resetScrollToTop);
    }
  });
  return false;
});
</script>

<div id="footer" class="w3-container">
  <ul class="w3-navbar w3-tiny">
    <li><a href="http://2keyplayers.com" target="_blank" style="display:inline-block">&copy; 2016-2017 INCOME2017, <i class="fa fa-code"></i> Patrik Tóth</a></li>
  </ul>
</div>

<?php include_once("analyticstracking.php") ?>

</body>
</html>
