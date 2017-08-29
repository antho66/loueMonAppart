$(document).ready(function(){




	/*  Hamburger Menu & Icon  */
	$('.hamburger').on('click', function(e){
		
		e.preventDefault();
		$(this).toggleClass('opned');
		$('header nav').toggleClass('active');
		
	});




	/*  Advanced search form & Icon  */
	$('#advanced_search_btn').on("click", function(e){
		e.preventDefault();

		var ads_box =$('.advanced_search');
		
		if(!ads_box.hasClass('advanced_displayed')){

			$(this).addClass('active');
			ads_box.stop().fadeIn(200).addClass('advanced_displayed');

		}else{

			$(this).removeClass('active');
			ads_box.stop().fadeOut(200).removeClass('advanced_displayed');

		}

	});




});


/*carrousel*/


$(function() {
	if( $('#pagination').length > 0 ) {
	$('#pagination').hover(
	 function() {
	  $('#carrousel').trigger( 'pause' );
	 }, function() {
	  $('#carrousel').trigger( 'play' );
	 }
	);

	$('#carrousel').carouFredSel({
	 scroll: {
	  fx: 'crossfade'
	 }/*,
	 auto: {
	  onBefore: function( oldI, newI ) { console.log(newI);
	   $('#thumbnails').trigger( 'slideTo', [ '#thumbnails img[alt="'+ newI.attr( 'alt' ) +'"]', -2 ] );
	  }
	 }*/
	});

	$('#thumbnails').carouFredSel({
	 auto: false,
	 items: {
	  start: -2
	 }
	});

	$('#thumbnails img').click(function() {
	 $('#carrousel').trigger( 'slideTo', [ '#carrousel img[alt="'+ $(this).attr( 'alt' ) +'"]' ] );
	 });

	 $('#thumbnails img').hover(function() {
	  $('#thumbnails').trigger( 'slideTo', [ this, -2 ] );

	}).css( 'cursor', 'pointer' );
	}
   });