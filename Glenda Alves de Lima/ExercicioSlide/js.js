$(document).ready(function(){
	var imgItems = $('.slider li').length; 
	var imgPos = 1;

	for(i = 1; i <= imgItems; i++){
		$('.paginacao').append('<li><span class="fa fa-circle"></span></li>');
	} 

	$('.slider li').hide(); 
	$('.slider li:first').show(); 
	$('.paginacao li:first').css({'color': '#CD6E2E'}); 

	
	$('.paginacao li').click(iconeInferior);
	$('.right span').click(proximoSlide);
	$('.left span').click(slideAnterio);


	setInterval(function(){
		proximoSlide();
	}, 5000);
 

	function iconeInferior(){
		var paginationPos = $(this).index() + 1; 
		$('.slider li').hide(); 
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(); 
		$('.paginacao li').css({'color': '#858585'});
		$(this).css({'color': '#CD6E2E'});

		imgPos = paginationPos;

	}

	function proximoSlide(){
		if( imgPos >= imgItems){imgPos = 1;} 
		else {imgPos++;}

		$('.paginacao li').css({'color': '#858585'});
		$('.paginacao li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

		$('.slider li').hide(); 
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); 

	}

	function slideAnterio(){
		if( imgPos <= 1){imgPos = imgItems;} 
		else {imgPos--;}

		$('.paginacao li').css({'color': '#858585'});
		$('.paginacao li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

		$('.slider li').hide(); 
		$('.slider li:nth-child('+ imgPos +')').fadeIn();
	}

});