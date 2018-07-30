$( ".logo" ).click(function() {
	$( this ).toggleClass( "off" );
	});
var p;
$( ".menu" ).click(function() {
  if ( p ) {
    p.appendTo( ".inner" );
    p = null;
  } else {
    p = $( ".logo" ).detach();
  }
});