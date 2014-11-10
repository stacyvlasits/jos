jQuery( document ).ready(function( $ ) {
	$('embed').each(function( index ) {
		var thePlayerID = "audio_player" + index;
		var theFile = $(this).attr('src');
		var theWidth = $(this).attr('width');
		theWidth = ( theWidth < 100 ) ? 20 : theWidth;

		var theHeight = $(this).attr('height');
		theHeight = ( theHeight < 100 ) ? 20 : theHeight;

		var theControls = ( theWidth > 150 ) ? true : false;
		$(this).wrap("<div class='player-wrapper'></div>");
		// Make a div for the player to attach to
		$(this).after("<div class=\"the-player\" id=\"" + thePlayerID + "\"></div>");
		// Attach the player
		jwplayer(thePlayerID).setup({
	        file: theFile,
	        width: theWidth,
	        controls: theControls,
	        height: theHeight
	    });

		if (!theControls) {
			$(this).after( $("<div class=\"play-button\" id=\"play-button-" + index + "\"> </div>").css('width', theWidth).css('height', theHeight).click(function(){
/// MAKE THIS CLICKABLE			
					 jwplayer(thePlayerID).play();
				})
			);
		}

		//  Get rid of the original embed tag
		$( this ).remove();
	});
});