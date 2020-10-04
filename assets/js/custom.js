// Select active page
var path = window.location.pathname.split("/").pop();
if (path != "") {
	var page = "ul#mainNav > li > a#" + path;
	$(page).addClass('active');
} else {
	if (window.location.host == "drynegroup.com" || window.location.host == "www.drynegroup.com" || window.location.host == "localhost") {
		var page = "ul#mainNav > li > a#home";
		$(page).addClass('active');
	}
}