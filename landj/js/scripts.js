<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var bittersMap = (function () {
var myLatlng = new google.maps.LatLng(47.6062, -122.3321),
mapCenter = new google.maps.LatLng(47.6062, -122.3321),
mapCanvas = document.getElementById('map_canvas'),
mapOptions = {
center: mapCenter,
zoom: 13,
scrollwheel: false,
draggable: true,
disableDefaultUI: true,
mapTypeId: google.maps.MapTypeId.ROADMAP
},
map = new google.maps.Map(mapCanvas, mapOptions),
contentString =
'<div id="content">'+
'<div id="siteNotice">'+
'</div>'+
'<h1 id="firstHeading" class="firstHeading">thoughtbot</h1>'+
'<div id="bodyContent"'+
'<p>Sveavägen 98</p>'+
'</div>'+
'</div>',
infowindow = new google.maps.InfoWindow({
content: contentString,
maxWidth: 300
}),
marker = new google.maps.Marker({
position: myLatlng,
map: map,
title: 'thoughtbot (Sweden)'
});
return {
init: function () {
map.set('styles', [{
featureType: 'landscape',
elementType: 'geometry',
stylers: [
{ hue: '#ffff00' },
{ saturation: 30 },
{ lightness: 10}
]}
]);
google.maps.event.addListener(marker, 'click', function () {
infowindow.open(map,marker);
});
}
};
}());
bittersMap.init();
// Scroll On Page Link
(function (jQuery) {
  jQuery.mark = {
    jump: function (options) {
      var defaults = {
        selector: 'a.scroll-on-page-link'
      };
      if (typeof options == 'string') {
        defaults.selector = options;
      }

      options = jQuery.extend(defaults, options);
      return jQuery(options.selector).click(function (e) {
        var jumpobj = jQuery(this);
        var target = jumpobj.attr('href');
        var thespeed = 1000;
        var offset = jQuery(target).offset().top;
        jQuery('html,body').animate({
          scrollTop: offset
        }, thespeed, 'swing');
        e.preventDefault();
      });
    }
  };
})(jQuery);


jQuery(function(){
  jQuery.mark.jump();
});
// Modal
$(function() {
  $("#modal-1").on("change", function() {
    if ($(this).is(":checked")) {
      $("body").addClass("modal-open");
    } else {
      $("body").removeClass("modal-open");
    }
  });

  $(".modal-fade-screen, .modal-close").on("click", function() {
    $(".modal-state:checked").prop("checked", false).change();
  });

  $(".modal-inner").on("click", function(e) {
    e.stopPropagation();
  });
});
</script>
