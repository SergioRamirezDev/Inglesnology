// JavaScript Document
$(document).ready(function() {
var clic=0;
var clic1=0;
var organizacion=0;
var organizacion2=0;
var organizacion3=0;
var organizacion4=0;
var organizacion5=0;
var organizacion6=0;
	$('#acercade1').click(function() {
		organizacion = organizacion+1;
		if (organizacion==1){
		$('.organizacion1').slideDown('slow');
		$('#acercade1').css('background-image','url(menos.png)');
			$(' .organizacion2, .organizacion3, .organizacion4, .organizacion5, .organizacion6').slideUp('slow');
			$('#acercade2, #acercade3, #acercade4, #acercade5, #acercade6').css('background-image','url(mas.gif)');
organizacion2=0;
organizacion3=0;
organizacion4=0;
organizacion5=0;
organizacion6=0;
			}
		if (organizacion==2){
		$('.organizacion1').slideUp('slow');
		$('#acercade1').css('background-image','url(mas.gif)');
			organizacion=0;
			}
		});
		
		$('#acercade2').click(function() {
		organizacion2 = organizacion2+1;
		if (organizacion2==1){
		$('.organizacion2').slideDown('slow');
				organizacion=0;
organizacion3=0;
organizacion4=0;
organizacion5=0;
vorganizacion6=0;
		$('#acercade2').css('background-image','url(menos.png)');
		$('.organizacion1, .organizacion3, .organizacion4, .organizacion5, .organizacion6').slideUp('slow');
			$('#acercade1, #acercade3, #acercade4, #acercade5, #acercade6').css('background-image','url(mas.gif)');
			}
		if (organizacion2==2){
		$('.organizacion2').slideUp('slow');
		$('#acercade2').css('background-image','url(mas.gif)');
			organizacion2=0;
			}
		});
		
		$('#acercade3').click(function() {
		organizacion3 = organizacion3+1;
		if (organizacion3==1){
		$('.organizacion3').slideDown('slow');
				var organizacion=0;
organizacion2=0;
organizacion4=0;
organizacion5=0;
organizacion6=0;
		$('#acercade3').css('background-image','url(menos.png)');
			$('.organizacion1, .organizacion2, .organizacion4, .organizacion5, .organizacion6').slideUp('slow');
			$('#acercade1, #acercade2, #acercade4, #acercade5, #acercade6').css('background-image','url(mas.gif)');
			}
		if (organizacion3==2){
		$('.organizacion3').slideUp('slow');
		$('#acercade3').css('background-image','url(mas.gif)');
			organizacion3=0;
			}
		});
		
		$('#acercade4').click(function() {
		organizacion4 = organizacion4+1;
		if (organizacion4==1){
		$('.organizacion4').slideDown('slow');
				 organizacion=0;
organizacion2=0;
organizacion3=0;
 organizacion5=0;
organizacion6=0;
		$('#acercade4').css('background-image','url(menos.png)');
					$('.organizacion1, .organizacion2, .organizacion3, .organizacion5, .organizacion6').slideUp('slow');
			$('#acercade1, #acercade2, #acercade3, #acercade5, #acercade6').css('background-image','url(mas.gif)');
			}
		if (organizacion4==2){
		$('.organizacion4').slideUp('slow');
		$('#acercade4').css('background-image','url(mas.gif)');
			organizacion4=0;
	
			}
		});
		
		$('#acercade5').click(function() {
		organizacion5 = organizacion5+1;
		if (organizacion5==1){
		$('.organizacion5').slideDown('slow');
				var organizacion=0;
organizacion2=0;
organizacion3=0;
organizacion4=0;
organizacion6=0;
		$('#acercade5').css('background-image','url(menos.png)');
					$('.organizacion1, .organizacion2, .organizacion3, .organizacion4, .organizacion6').slideUp('slow');
			$('#acercade1, #acercade2, #acercade3, #acercade4, #acercade6').css('background-image','url(mas.gif)');
			}
		if (organizacion5==2){
		$('.organizacion5').slideUp('slow');
		$('#acercade5').css('background-image','url(mas.gif)');
			organizacion5=0;
			}
		});
		
		
		$('#acercade6').click(function() {
		organizacion6 = organizacion6+1;
		if (organizacion6==1){
		$('.organizacion6').slideDown('slow');
				var organizacion=0;
organizacion2=0;
organizacion3=0;
organizacion4=0;
organizacion5=0;
		$('#acercade6').css('background-image','url(menos.png)');
				$('.organizacion1, .organizacion2, .organizacion3, .organizacion4, .organizacion5').slideUp('slow');
			$('#acercade1, #acercade2, #acercade3, #acercade4, #acercade5').css('background-image','url(mas.gif)');
			}
		if (organizacion6==2){
		$('.organizacion6').slideUp('slow');
		$('#acercade6').css('background-image','url(mas.gif)');
			organizacion6=0;
			}
		});
		
		
		
		$('#activarmenu').click(function() {
			clic=clic+1
			if(clic==1){
            $('.menuactivado').addClass('activado');
			$(this).css('background-image','url(menu2.png)');
			}
        else{
			$('.menuactivado').removeClass('activado');
			$(this).css('background-image','url(menu.png)');
			clic=0;
			}
		});
		
		$('#bienvenida').click(function() {
			clic1=clic1+1
			if(clic1==1){
             $('#a1').show('fast');
			$('#bienvenida').css('background-image','url(flecha2.png)');
			}
        else{
			$('#a1').hide('fast');
			$('#bienvenida').css('background-image','url(flecha.png)');
			clic1=0;
			}
		    });
	
});
$(function(){
$('#slider a:gt(0)').hide();
var interval = setInterval(changeDiv, 6000);
function changeDiv(){
$('#slider a:first-child').fadeOut(1000).next('a').fadeIn(1000).end().appendTo('#slider');
};
$('.mas').click(function(){
changeDiv();
clearInterval(interval);
interval = setInterval(changeDiv, 6000);
});
$('.menos').click(function(){
$('#slider a:first-child').fadeOut(1000);
$('#slider a:last-child').fadeIn(1000).prependTo('#slider');
clearInterval(interval);
interval = setInterval(changeDiv, 6000);
});
});