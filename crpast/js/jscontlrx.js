/*
Api Key Google Maps: AIzaSyDhlpioP2E0zBWcDhPWByM1n7xiQ1KlqYc // Publica
Api Key Google Maps: AIzaSyCJMVLdHeYL5j4F_YiWsriobIiOkClKYSg // Local
*/
$(function() {
    $('.ripple').on('click', function (event) {
        event.preventDefault();
        var $div = $('<div/>'),
        btnOffset = $(this).offset(),
        xPos = event.pageX - btnOffset.left,
      	yPos = event.pageY - btnOffset.top;
        $div.addClass('ripple-effect');
        var $ripple = $(".ripple-effect");
        $ripple.css("height", $(this).height());
        $ripple.css("width", $(this).height());
        $div
        .css({
            top: yPos - ($ripple.height()/2),
            left: xPos - ($ripple.width()/2),
            background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));
        window.setTimeout(function(){
            $div.remove();
        }, 2000);
    }); 
    $(window).scroll(function(){
		var scroll = $(window).scrollTop();
		var position =  (scroll * -0.10);      
		$('.info_img').css({
			'background-position': '0 ' + position + 'px'
		});
	});
});
$(document).ready(function($){
    $("li a").click(function(){
        var target = $(this).attr("href");
        var offset = 30;
        var scrollToPosition = $(target).offset().top - offset;
        $('html, body').stop().animate({ scrollTop: scrollToPosition - offset}, 600, function() {
            location.hash = target - offset;
        });
    });
});
$(document).ready(main);
function main () {
    var contador = 1;
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
            $('.bt-menu span').addClass('icon-cross');
            $('.bt-menu span').removeClass('icon-menu');
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
            $('.bt-menu span').addClass('icon-menu');
            $('.bt-menu span').removeClass('icon-cross');
		}
	});
// Mostramos y ocultamos submenus
	$('.submenu').click(function(){	$(this).children('.children').slideToggle();
	});
}
$(function(){
    var url = window.location.href; 
    $("#li a").each(function() {
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }
    });
});
function validateEmail(email) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9ñÑ\.\-]+\.[a-zA-z0-9ñÑ]{2,4}$/;
	if (filter.test(email)) {
		return true;
	}else {
		return false;
	}
}
function validateTel(tel) {
	var telNo = /^([0-9]+){7,10}$/;
	if (telNo.test(tel)) {
		return true;
	}else {
		return false;
	}
}
function validateCed(ced) {
	var cedNo = /^([0-9]+){6,10}$/;
	if (cedNo.test(ced)) {
		return true;
	}else {
		return false;
	}
}
function validatePass(pass){
    var pasNo = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	if (pasNo.test(pass)) {
		return true;
	}else {
		return false;
	}
}
function formulario(){
	$("#send").click(function(){
		var email = $("#email").val();
		var nombre = $("#nombre").val();
		var tel = $("#tel").val();
		var mensaje = $("#mensaje").val();
		if (email === '' && nombre === '' && tel === '' && mensaje === '') {
			$(".form_group").addClass('animated bounce');
			$(".form_group").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		$(this).removeClass('animated bounce');$("#email").focus();
			});
		} else if (!(validateEmail(email)) || email === '') {
			$("#email").addClass('animated shake');
			$("#email").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#email").focus();
			});
		} else if (nombre === '') {
			$("#nombre").addClass('animated shake');
			$("#nombre").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		    $(this).removeClass('animated shake'); $("#nombre").focus();
			});
		} else if (!(validateTel(tel)) || tel === '') {
			$("#tel").addClass('animated shake');
			$("#tel").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#tel").focus();
			});
		} else if (mensaje === '') {
			$("#mensaje").addClass('animated shake');
			$("#mensaje").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#mensaje").focus();
			});
		} else { 
			document.form_contacto.submit();
            $(".form_group").addClass('animated zoomInDown');
            $(".GraciasMsg").html('Gracias !!').addClass('animated zoomInDown');
            setTimeout("formulario", 3000);
            $(".form_group").reset();
        };
	});
}
function log(form, ced, pass) {
	$("#ingreso").click(function() {
		var ced = $("#ced").val();
		var pass = $("#pass").val();
		if (ced === '' && pass === '') {
			$(".form_group").addClass('animated bounce');
			$(".form_group").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		$(this).removeClass('animated bounce');$("#ced").focus();
			});
		} else if (!(validateCed(ced)) || ced === '') {
			$("#ced").addClass('animated shake');
			$("#ced").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#ced").focus();
            return false;
			});
		} else if (!(validatePass(pass)) || pass === '') {
			$("#pass").addClass('animated shake');
			$("#pass").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#pass").focus();
            return false;
			});
		} else {
            var p = document.createElement("input");
            form.appendChild(p);
            p.name = "p";
            p.type = "hidden";
            p.value = hex_sha512(pass);
            pass.value = "";
            form.submit();
            return true;
        };
    });
}
function register(form, email, nombre, ced, tel, genero, rol, pass) {
	$("#send_regis").click(function() {
		var email = $("#email").val();
		var nombre = $("#nombre").val();
		var ced = $("#ced").val();
		var tel = $("#tel").val();
		var genero = $("#genero").val();
		var rol = $("#rol").val();
		var pass = $("#pass").val();
		if (email === '' && nombre === '' && ced === '' && tel === '' && pass === '') {
			$(".form_group").addClass('animated bounce');
			$(".form_group").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		$(this).removeClass('animated bounce');$("#email").focus();
			});
		} else if (!(validateEmail(email)) || email === '') {
			$("#email").addClass('animated shake');
			$("#email").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#email").focus();
            return false;
			});
		} else if (nombre === '') {
			$("#nombre").addClass('animated shake');
			$("#nombre").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		    $(this).removeClass('animated shake'); $("#nombre").focus();
            return false;
			});
		} else if (!(validateCed(ced)) || ced === '') {
			$("#ced").addClass('animated shake');
			$("#ced").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#ced").focus();
            return false;
			});
		} else if (!(validateTel(tel)) || tel === '') {
			$("#tel").addClass('animated shake');
			$("#tel").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#tel").focus();
			});
		} else if (!(validatePass(pass)) || pass === '') {
			$("#pass").addClass('animated shake');
			$("#pass").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#pass").focus();
            return false;
			});
		} else {
            var p = document.createElement("input");
            form.appendChild(p);
            p.name = "p";
            p.type = "hidden";
            p.value = hex_sha512(pass);
            pass.value = "";
            form.submit();
            return true;
        };
    });
}