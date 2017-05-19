function initMap() {
    var center = {lat: 4.7492391, lng: -75.9123342 };
    var superservicios = {lat: 4.7490771, lng: -75.9123495};
    var mapContainer = document.getElementById('post__header');

    if( mapContainer )
    {
        var map = new google.maps.Map( mapContainer , {
            zoom: 19,
            center: center
        });
        var marker = new google.maps.Marker({
            position: superservicios,
            map: map
        });
    }
}