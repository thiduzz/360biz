
$(document).ready(function(){

    var $window = $(window);

    // Function to handle changes to style classes based on window width
    function checkWidth() {
        if ($window.width() < 980) {
            $('.ic-step').removeClass('fa-chevron-circle-right').addClass('fa-chevron-circle-down');
        };

        if ($window.width() >= 980) {
            $('.ic-step').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-right');
        }
    }

    // Execute on load
    checkWidth();
    $(window).resize(checkWidth);

$('.carousel').carousel({interval:false});

    /* change chevron icon when expanding panels */
$('#collapseDetails').on('shown.bs.collapse', function() {
        $(".chevron-detail").addClass('glyphicon-chevron-up').removeClass('glyphicon-chevron-down');
    });
$('#collapseDetails').on('hidden.bs.collapse', function() {
        $(".chevron-detail").addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
    });
    $('#collapseIncluded').on('shown.bs.collapse', function() {
        $(".chevron-included").addClass('glyphicon-chevron-up').removeClass('glyphicon-chevron-down');
    });
    $('#collapseIncluded').on('hidden.bs.collapse', function() {
        $(".chevron-included").addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
    });

    /* affix the navbar after scroll below header */
    $('#nav').affix({
        offset: {
            top: $('header').height()-$('#nav').height()
        }
    });

    /* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})
/**function that tells if element is on the viewport**/
 $.fn.isOnScreen = function(){

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

    };

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
    var link = $(this).attr('href');
    if ($window.width() >= 768) {
    var navbar_height = $(".navbar").height();
    var posi;
    if($('header').isOnScreen() == true)
    {
        posi = $(link).offset().top - navbar_height;
    }else{
        posi = $(link).offset().top;
    }
    }else{
        posi = $(link).offset().top;
    }
    $('body,html').animate({scrollTop:posi},700);
});

    /**
     *
     $('body,html').animate({scrollTop:posi},700);
     var link = $(this).attr('href');
     var posi = $(link).offset().top;
     $('body,html').animate({scrollTop:posi},700);
     */

/* copy loaded thumbnails into carousel */
$('.panel .img-responsive').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parent('a');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('#modalCarousel .carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.panel-thumbnail>a').click(function(e){
  
    e.preventDefault();
    var idx = $(this).parents('.panel').parent().index();
  	var id = parseInt(idx);
    $('#myModal').modal({ keyboard: false })
    $('#myModal').modal('show'); // show the modal

    $('#modalCarousel').carousel(id); // slide carousel to selected
  	return false;
});

/* google maps */
google.maps.visualRefresh = true;

var map;

var maptopo1, maptopo2, maptopo3;

function initialize() {
	var geocoder = new google.maps.Geocoder();
	var address = $('#map-input').text(); /* change the map-input to your address */
	var mapOptions = {
    	zoom: 15,
    	mapTypeId: google.maps.MapTypeId.ROADMAP,
     	scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	
  	if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow(
                {
                  content: address,
                  map: map,
                  position: results[0].geometry.location,
                });

            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                title:address
            }); 

          } else {
          	alert("No results found");
          }
        }
      });
	}

    var fenway = new google.maps.LatLng(48.847883,16.896893);
    var panoramaOptions = {
        pano: 'X_pgYHPIKugAAAQINRjZpg',
        addressControl: false,
        zoomControl: false,
        panControl: false,
        scrollwheel: false,
        disableDefaultUI: true,
            position: fenway,
        pov: {
            heading: 39.02,
            pitch: -2.87,
            zoom: 0
        }
    };
    panorama = new  google.maps.StreetViewPanorama(document.getElementById('topo-1'),panoramaOptions);

    /**
    var move = true;

    $("#topo-1").on("mouseenter", function () {
        move = false;
    });

    $("#topo-1").on("mouseleave", function () {
        move = true;
    });

    var i = 0;
    window.setInterval(function () {
        panorama.setPov({
            heading: i,
            pitch: -2.87,
            zoom: 0
        });
        if (move) {
            i += 0.2;
        }
    }, 1);
    **/
}
google.maps.event.addDomListener(window, 'load', initialize);

/* end google maps */


});