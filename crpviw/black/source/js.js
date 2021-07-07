function validateDia(dia,mes,anio,hora,minuto) {
	var diaNo = /^([0-9]+){2}$/;
	if (diaNo.test(dia,mes,anio,hora,minuto)) {
		return true;
	}else {
		return false;
	}
}
$(document).ready(function(){
    $("#send_card").click(function() {
        var descc = $("#descc").val();
        var dia = $("#dia").val();
        var mes = $("#mes").val();
        var anio = $("#anio").val();
        var hora = $("#hora").val();
        var minuto = $("#minuto").val();
        var horario = $("#horario").val();
        var origen = $("#origen").val();
        var destino = $("#destino").val();
        if (descc === '' && dia === '' && mes === '' && anio === '' && hora === '' && minuto === '' && origen === '' && destino === '') {
            $(".viajeAdd").addClass('animated bounce');
			$(".viajeAdd").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		$(this).removeClass('animated bounce');$("#descc").focus();
			});
        } else if(descc === '' || descc.length > 255) {
            $("#descc").addClass('animated shake');
			$("#descc").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#descc").focus();
            return false;
			});
        } else if(!(validateDia(dia)) || dia === '' || dia.length > 2 || dia > 31) {
            $("#dia").addClass('animated shake');
			$("#dia").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#dia").focus();
            return false;
			});
        } else if(!(validateDia(mes)) || mes === '' || mes.length > 2 || mes > 12) {
            $("#mes").addClass('animated shake');
			$("#mes").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#mes").focus();
            return false;
			});
        } else if(!(validateDia(anio)) || anio === '' || anio.length > 4 || anio < 2017 || anio > 2019) {
            $("#anio").addClass('animated shake');
			$("#anio").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#anio").focus();
            return false;
			});
        } else if(!(validateDia(hora)) || hora === '' || hora.length > 2 || hora > 12) {
            $("#hora").addClass('animated shake');
			$("#hora").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#hora").focus();
            return false;
			});
        } else if(!(validateDia(minuto)) || minuto === '' || minuto.length > 2 || minuto > 60) {
            $("#minuto").addClass('animated shake');
			$("#minuto").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#minuto").focus();
            return false;
			});
        } else if(origen === '') {
            $("#origen").addClass('animated shake');
			$("#origen").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#origen").focus();
            return false;
			});
        } else if(destino === '') {
            $("#destino").addClass('animated shake');
			$("#destino").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			      $(this).removeClass('animated shake'); $("#destino").focus();
            return false;
			});
        } else {
            form.submit();
            return true;
        }
    });
    var altura='100';
    $(window).on('scroll',function(){
        if($(window).scrollTop()>=altura){
            $('.top').css({'display':'block'});
        }else{
            $('.top').css({'display': 'none'});
        }
    });
    
	$('li a').click(function(e){
		e.preventDefault();
		$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 200);
	});
});
$(document).ready(main);
function main() {
    var contador = 1;
	$('.perfil').click(function(){
		if (contador == 1) {
                $('.children').animate({'top': '50px'});
			contador = 0;
            $('.perfil').addClass('animated rotateIn');
			$(".perfil").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		    $(this).removeClass('animated rotateIn');
            });
		} else {
			contador = 1;
                $('.children').animate({'top': '-256px'});
            $('.perfil').addClass('animated flipInX');
			$(".perfil").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		    $(this).removeClass('animated flipInX');
            });
		}
	});
    var mql=window.matchMedia("screen and (max-width:650px)");
    var contar = 1;
    $('.bt-menu').click(function(){
        if (mql.matches){
            if (contar == 1){
                $('#navBar').css({'left': '0'});
                $('.bt-menu span').css({'margin-left': '190px'});
                $('.bt-menu span').addClass('icon-cross');
                $('.bt-menu span').addClass('icon-menu');
                contar = 0;
            }else{
                contar = 1;
                $('.bt-menu span').css({'margin-left': '0'});
                $('.bt-menu span').addClass('icon-menu');
                $('.bt-menu span').removeClass('icon-cross');
                $('#navBar').css({'left': '-100%'});
            }
        }else{
            $('#navBar').css({'left': '0'});
        }
    });
};

function openInfo(evt, infoCrd){
    var i, usrInfo, cartab;
    usrInfo = document.getElementsByClassName("usrInfo");
    for (i = 0; i < usrInfo.length; i++){
        usrInfo[i].style.display = "none";
    }
    cartab = document.getElementsByClassName("cartab");
    for (i = 0; i < cartab.length; i++){
        cartab[i].className = cartab[i].className.replace(" caracti", "");
    }
    document.getElementById(infoCrd).style.display = "block";
    evt.currentTarget.className += " caracti";
}




