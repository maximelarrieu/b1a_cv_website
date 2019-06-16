'use strict';

const myYear = new Date();
document.getElementById("current-year").innerHTML = myYear.getFullYear();

$(document).ready(function() {
  $('.html').animate({width:'80%'}, 4000);
  $('.css').animate({width:'80%'}, 4000);
  $('.linux').animate({width:'70%'}, 4000);
  $('.js').animate({width:'70%'}, 4000);
  $('.c').animate({width:'60%'}, 4000);
});
