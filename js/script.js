/**
 * General
 */
$(document).ready(function() { 
	$("#nav-button").bind("click", nav_open);
	$("#nav").bind("mouseleave", nav_timer);
});

/**
 * Navigation drop down
 */
var nav_timeout		= 500;
var nav_closetimer 	= 0;
var nav_ddmenuitem	= 0;
var nav_buttonlink  = 0;

function nav_open() {
	nav_canceltimer();
	nav_close();
	nav_ddmenuitem = $("#nav").css("visibility", "visible").css("display", "block");
	nav_buttonlink = $("#nav-span").addClass("navactive");
}

function nav_close() {
	if (nav_ddmenuitem) {
		nav_ddmenuitem.css("visibility", "hidden").css("display", "none");
		nav_buttonlink.removeClass("navactive");
	}
}

function nav_timer() {
	nav_closetimer = window.setTimeout(nav_close, nav_timeout);
}

function nav_canceltimer() {
	if (nav_closetimer) {
		window.clearTimeout(nav_closetimer);
		nav_closetimer = null;
	}
}

/**
 * Hijack the in-page article scrolling
 */
$("sup[id^='a-'] a").click(function() {
	var i = $(this).parent().attr("id").substr(2,1);	// ID of the footnote
	var p = $("#fn-"+i).offset();						// Position of the footnote we're going to
	var n = p.top - 90;									// Offset position (to account for header)
	$(window).scrollTop(n);
	return false;
});

