$(document).ready(function(){
	var imgItems = $('.slider li').length; 
	var imgPos = 1;

	for(i = 1; i <= imgItems; i++){
		$('.paginacao').append('<li><span class="fa fa-circle"></span></li>');
	} 
	//------------------------

	$('.slider li').hide(); 
	$('.slider li:first').show(); 
	$('.paginacao li:first').css({'color': '#00FF7F'}); 

	$('.paginacao li').click(paginacao);
	$('.right span').click(nextImagem);
	$('.left span').click(prevImagem);


	setInterval(function(){
		nextSlide();
	}, 10000);


	function paginacao(){
		var paginationPos = $(this).index() + 1; 

		$('.slider li').hide(); 
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(); 

		$('.paginacao li').css({'color': '#858585'});
		$(this).css({'color': '#00FF7F'});

		imgPos = paginationPos;

	}

	function nextImagem(){
		if( imgPos >= imgItems){imgPos = 1;} 
		else {imgPos++;}

		$('.paginacao li').css({'color': '#858585'});
		$('.paginacao li:nth-child(' + imgPos +')').css({'color': '#00FF7F'});

		$('.slider li').hide(); 
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); 

	}

	function prevImagem(){
		if( imgPos <= 1){imgPos = imgItems;} 
		else {imgPos--;}

		$('.paginacao li').css({'color': '#858585'});
		$('.paginacao li:nth-child(' + imgPos +')').css({'color': '#00FF7F'});

		$('.slider li').hide(); 
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); 
	}

});