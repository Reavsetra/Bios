$(document).ready(function() {
    $(".fancybox")
        .fancybox({
            padding : 0,
        });
    $(window).stellar();
    
    
});
function initMap() {
        var myLatLng = {
            lat: 19.372773,
            lng: -99.277800
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: {
                lat: 19.373273,
                lng: -99.277800
            }
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Floreria Biosfera'
        });
};

