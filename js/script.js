function presentationFormChanged(reset) {
  var wrapper = $(".wrapper");
  var title = $("#title");
  if (reset || $("#presentation").val() == "None") {
    wrapper.slideUp();
    title.val("");
    //title.prop("disabled", true);
  }
  else {
    //title.prop("disabled", false);
    wrapper.slideDown();
  }
}

function scrollTo(id) {
  $("html, body").animate({
     scrollTop: ($("#" + id).offset().top - 65)
  }, 400);
}

function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
    "total": t,
    "days": days,
    "hours": hours,
    "minutes": minutes,
    "seconds": seconds
  };
}

function initializeCounter(id, endtime) {
  var daysSpan = $(".days");
  var hoursSpan = $(".hours");
  var minutesSpan = $(".minutes");
  var secondsSpan = $(".seconds");

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.html(t.days);
    hoursSpan.html(("0" + t.hours).slice(-2));
    minutesSpan.html(("0" + t.minutes).slice(-2));
    secondsSpan.html(("0" + t.seconds).slice(-2));

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

function toggleNavigation() {
  var nav = $(".navigation");
  nav.slideToggle(400, function() {
    nav.toggleClass("opened");
    if (nav.is(".opened")) {
      $(".fa-bars").hide();
      $(".fa-close").show();
    } else {
      $(".fa-bars").show();
      $(".fa-close").hide();
    }
  });
}

function closeNavigation() {
  if (! $(".navigation-toggler").is(":hidden")) {
    toggleNavigation();
  }
}

function showDetails(id) {
  var details = $("#" + id);
  details.toggle();
  var button = details.parent().find("i").first();
  /*if (button.is(".fa-angle-up")) {
    button.addClass("fa-angle-down");
    button.removeClass("fa-angle-up");
  } else {
    button.removeClass("fa-angle-down");
    button.addClass("fa-angle-up");
  }*/
  if (button.is(".fa-plus-square-o")) {
	button.addClass("fa-minus-square-o");
	button.removeClass("fa-plus-square-o");
  } else {
	button.removeClass("fa-minus-square-o");
	button.addClass("fa-plus-square-o");
  }
}

function toggleDetails(id) {
  /*$("#transportation .w3-accordion-content").hide();
  $("#transportation a.airport").find("i.toggler").removeClass("fa-minus-square-o").addClass("fa-plus-square-o");*/
  
  var details = $("#" + id);
  details.toggle();
  var button = details.parent().find("i." + id).first();
  /*if (button.is(".fa-angle-up")) {
    button.addClass("fa-angle-down");
    button.removeClass("fa-angle-up");
  } else {
    button.removeClass("fa-angle-down");
    button.addClass("fa-angle-up");
  }*/
  if (button.is(".fa-plus-square-o")) {
	button.addClass("fa-minus-square-o");
	button.removeClass("fa-plus-square-o");
  } else {
	button.removeClass("fa-minus-square-o");
	button.addClass("fa-plus-square-o");
  }
}

function toggleMap() {
  var toggler = $(".eye");
  if (toggler.is(".fa-close")) {
    toggler.addClass("fa-eye");
    toggler.removeClass("fa-close");
    $(".toggler").addClass("bg");
  } else {
    toggler.addClass("fa-close");
    toggler.removeClass("fa-eye");
    $(".toggler").removeClass("bg");
  }
  $(".address").toggle();
}

function filterHotels(tag) {
  $(".filter").removeClass("selected");
  $(".filter." + tag).addClass("selected");

  $(".hotel").each(function() {
    if (tag == "all") {
      $(this).removeClass("opacity");
	}
    else if ($(this).attr("tags").search(tag) >= 0) {
      $(this).removeClass("opacity");
    } else {
      $(this).addClass("opacity");
    }
  });
}

var scrollToTop = 0;

function resetScrollToTop() {
  scrollToTop = 0;
}

$(function() {
  // Check if the device supports touch events
  if("ontouchstart" in document.documentElement) {
    // Loop through each stylesheet
    for(var sheetI = document.styleSheets.length - 1; sheetI >= 0; sheetI--) {
      var sheet = document.styleSheets[sheetI];
      // Verify if cssRules exists in sheet
      if(sheet.cssRules) {
        // Loop through each rule in sheet
        for(var ruleI = sheet.cssRules.length - 1; ruleI >= 0; ruleI--) {
          var rule = sheet.cssRules[ruleI];
          // Verify rule has selector text
          if(rule.selectorText) {
            // Replace hover psuedo-class with active psuedo-class
            rule.selectorText = rule.selectorText.replace(":hover", ":active");
          }
        }
      }
    }
  }

  $("a.top").click(function() {
    $(this).hide();
    scrollToTop = 1;
    $("html, body").animate({
      scrollTop: 0
    }, 400, "swing", resetScrollToTop);
  });
});
