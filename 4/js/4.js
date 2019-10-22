// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // var textday = "DAYS";
  // var texthour = "HOUR";
  // var textminutes = "MINUTES";
  // var textsecond = "SECOND";

  document.getElementById("dstime").innerHTML = days + "   :    " + hours + "    :    "
  + minutes + "    :    " + seconds ;


  // document.getElementById("nameTime").innerHTML = textday + "   " + texthour + "    "
  // + textminutes + "    " + textsecond ;

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("dstime").innerHTML = "EXPIRED";
  }
 
}, 1000);