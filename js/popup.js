// button to bring up a popup
function open_rewards(){
	$('.rewards').show();
}
function open_cash(){
	$('.cash').show();
}
function confirm(ag) {
    var gambar = $(ag).attr("src");
    $('.confirm').show();
    $('#got').attr('src',gambar);
}
function login(){
	$('.login').show();
	$('.confirm').hide();
}
function open_facebook(){
	$('.facebook').show();
	$('.login').hide();
}
function open_twitter(){
	$('.twitter').show();
	$('.login').hide();
}

// button to close the popup
function close_rewards(){
	$(".rewards").hide()
}
function close_cash(){
	$('.cash').hide();
}
function close_confirm(){
	$('.confirm').hide();
}
function close_login(){
	$('.login').hide();
}
function close_facebook(){
	$('.facebook').hide();
	$('.login').show();
}
function close_twitter(){
	$('.twitter').hide();
	$('.login').show();
}