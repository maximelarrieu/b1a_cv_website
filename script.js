'use strict';

const myYear = new Date();
document.getElementById("current-year").innerHTML = myYear.getFullYear();

$(document).ready(function() {
  $('.html').animate({width:'70%'}, 2000);
  $('.css').animate({width:'50%'}, 5000);
});
