$(document).ready(function () {
  $('a.about').click(function() {
  $('html, body').animate({
    scrollTop: $("div.headline").offset().top
  }, 1000)
}),
	$('a.services').click(function() {
	$('html, body').animate({
	scrollTop: $("h5.services").offset().top
  }, 1000)
}),
$('a.spreadsheet').click(function() {
	$('html, body').animate({
	scrollTop: $("div.spreadsheet").offset().top
  }, 1000)
}),
	$('a.portfolio').click(function() {
	$('html, body').animate({
	scrollTop: $("h2.portfolio").offset().top
  }, 1000)
})

});