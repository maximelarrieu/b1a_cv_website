'use strict';

const myYear = new Date();
document.getElementById("current-year").innerHTML = myYear.getFullYear();

$(document).ready(function() {
  $('.skill').animate({width: '100%'}, 4000);
});
