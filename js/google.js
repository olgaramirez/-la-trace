//var map;
//function initMap() {
//    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//var labelIndex = 0;
//var image = 'img/icone_renard.png';    
//
//function initialize() {
//  var bangalore = { lat: 48.354, lng: -68.80 };
//  var map = new google.maps.Map(document.getElementById('map'), {
//    zoom: 16,
//    center: bangalore,
//    mapTypeId: google.maps.MapTypeId.DEFAULT  
//  });
//
//  // This event listener calls addMarker() when the map is clicked.
//  google.maps.event.addListener(map, 'click', function(event) {
//    addMarker(event.latLng, map);
//  });
//  // Add a marker at the center of the map.
//  addMarker(bangalore, map);
//}
//
//// Adds a marker to the map.
//function addMarker(location, map) {
//  // Add the marker at the clicked location, and add the next-available label
//  // from the array of alphabetical characters.
//  var marker = new google.maps.Marker({
//    position: location,
////    label: labels[labelIndex++ % labels.length],
////      label: "renard",
//    map: map,
//      icon:image
//  });
//  console.log(position);
// var contentString = '<div id="content">'+
//      '<div id="siteNotice">'+
//      '</div>'+
//      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
//      '<div id="bodyContent">'+
//      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
//      'sandstone rock formation in the southern part of the '+
//      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
//      'south west of the nearest large town, Alice Springs; 450&#160;km '+
//      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
//      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
//      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
//      'Aboriginal people of the area. It has many springs, waterholes, '+
//      'rock caves and ancient paintings. Uluru is listed as a World '+
//      'Heritage Site.</p>'+
//      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
//      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
//      '(last visited June 22, 2009).</p>'+
//      '</div>'+
//      '</div>';
// var infowindow = new google.maps.InfoWindow({
//    content: contentString
//  });
// marker.addListener('click', function() {
//    infowindow.open(map, marker);
//  });
//
//}
//
//google.maps.event.addDomListener(window, 'load', initialize);
//
//}
//
//
//
     