// Select active page
var path =  window.location.pathname.split("/").pop();
var page = "ul#mainNav > li > a#" + path;
$(page).addClass('active');

