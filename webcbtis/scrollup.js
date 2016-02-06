// JavaScript Document
$(document).ready(function(){
	
	//Una vez que el scroll se desplaza hacia abajo mas de 100px apaece el boton 
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
			
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//una vez que aparece el boton lo que hacemos es que al darle click se devuelva hacia arriva
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});