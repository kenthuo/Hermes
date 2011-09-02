
var map = null;

$(document).ready(function() {	
	$(".cheader").addClass("ui-layout-north");
	$(".cfooter").addClass("ui-layout-south");
	$("#main").addClass("ui-layout-center");
	outerLayout = $('body').layout({
		north__closable :  false,
		south__closable :  false,
		south__spacing_open:	0, // no resizer-bar when open (zero height)
		south__spacing_closed:	20, // big resizer-bar when open (zero height)
		north__spacing_open:	0, // no resizer-bar when open (zero height)
		north__spacing_closed:	20, // big resizer-bar when open (zero height)
		south__size: 50
	});
	
	centerLayout = $('div.ui-layout-center').layout({
		minSize: 50, // ALL panes
		center__paneSelector: ".center-center",
		east__paneSelector:	".center-east",
		east__size: 300,
		closable: true,
		resizable: true,
		onresize: function() {
			width = $('.center-center').width();
			height = $('.center-center').height();
			size = new MQA.Size(width, height);
			map.setSize(size);
		}
	});
	
	
	// An example of using the MQA.EventUtil to hook into the window load event and execute defined function 
	// passed in as the last parameter .  You could alternatively create a plain function here and have it 
	// executed when ever you like (e.g. <body onload="yourfunction">).
	initMapSize();
	MQA.EventUtil.observe(window, 'load', function() { 
		window.map = new MQA.TileMap(           // Constructs an instance of MQA.TileMap
			$('#map')[0],                       //the id of the element on the page you want the map to be added into 
			7,                                  //intial zoom level of the map
			{lat:49.277101, lng:-123.12026},    //the lat/lng of the map to center on
			'map'								//map type (map, sat, hyb)
		);      
		MQA.withModule('zoomcontrol3','viewcontrol3', function() {
		map.addControl(
				new MQA.LargeZoomControl3(), 
				new MQA.MapCornerPlacement(MQA.MapCorner.TOP_LEFT)
			);					
			map.addControl(
				new MQA.ViewControl3(), 
				new MQA.MapCornerPlacement(MQA.MapCorner.TOP_RIGHT)
			);
		});
	});	

});

function initMapSize() {
	width = $('.center-center').width();
	height = $('.center-center').height();
	$('#map').width(width);
	$('#map').height(height);		
}
