//Kaydol - Şifre Unuttum Linkleri Arası Geçiş
$(document).ready(function(){
    $("#kayit-form").hide();
    $("#sifre-hatirlat-form").hide();
    $(".hesap-olustur-link").click(function(e){
        $("#login-form").slideUp(0);
        $("#kayit-form").fadeIn(300);
    });

    $(".zaten-hesap-var-link").click(function(e){
        $("#kayit-form").slideUp(0);
        $("#sifre-hatirlat-form").slideUp(0);
        $("#login-form").fadeIn(300);
    });

    $(".sifre-hatirlat-link").click(function(e){
        $("#login-form").slideUp(0);
        $("#sifre-hatirlat-form").fadeIn(300);
    });
});

$(function(){

  $("#login-form").on('submit', function(e){
    e.preventDefault();
    var $form = $(this).serialize();

    $.post('?controller=default&action=verifyLogin', $form )
    .done(function(data){
        if (data && data != 'done') {
            var container =  $("#msg-login");
            notify(container, data, null, null, 'info');

        } else {
            window.location.href="?controller=admin&action=index";
        }

    })
    .fail(function(){
        alert("There is a problem with ajax.");
    })


  })

})


//Script of notifcation
notify = function(container, text, callback, close_callback, style) {

	var time = '20000';
	var $container = container;

	if (typeof style == 'undefined' ) style = 'warning'

	var html = $('<div class="alert alert-' + style + '  hide"> '+ text + '</div>');

	$('<a>',{
		text: '×',
		class: 'button close',
		style: 'padding-left: 10px;',
		href: 'javascript:void(0)',
		click: function(e){
			e.preventDefault()
			close_callback && close_callback()
			remove_notice()
		}
	}).prependTo(html)

	$container.prepend(html)
	html.removeClass('hide').hide().fadeIn('slow')

	function remove_notice() {
		html.stop().fadeOut('slow').remove()
	}

	var timer =  setInterval(remove_notice, time);

	$(html).hover(function(){
		clearInterval(timer);
	}, function(){
		timer = setInterval(remove_notice, time);
	});

	html.on('click', function () {
		clearInterval(timer)
		callback && callback()
		remove_notice()
	});

}
