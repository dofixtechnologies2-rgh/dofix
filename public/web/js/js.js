document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("slider");
    const rangeValue = document.getElementById("rangeValue");
    const carousel = document.getElementById("demo");

   
    const bsCarousel = new bootstrap.Carousel(carousel);

 
    function updateSlider(value) {
        let formattedValue = value.padStart(2, "0"); 
        rangeValue.textContent = formattedValue;
        slider.value = value; 
    }


    slider.addEventListener("input", function () {
        let slideIndex = parseInt(this.value) - 1;
        bsCarousel.to(slideIndex);
    });


    carousel.addEventListener("slid.bs.carousel", function (event) {
        let newIndex = event.to + 1;
        updateSlider(newIndex.toString());
    });
});





    let map, marker;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 28.6139, lng: 77.2090 }, 
            zoom: 10
        });

        marker = new google.maps.Marker({
            position: { lat: 28.6139, lng: 77.2090 },
            map: map,
            draggable: true
        });

        google.maps.event.addListener(marker, 'dragend', function () {
            let lat = marker.getPosition().lat();
            let lng = marker.getPosition().lng();
            $("#address").val(`Lat: ${lat}, Lng: ${lng}`);
        });
    }

  
    $(document).ready(function () {
        $("#pickLocation").click(function () {
            let address = $("#address").val() || "New Delhi, India"; 
            let mapUrl = `https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=${encodeURIComponent(address)}`;
            $("#mapFrame").attr("src", mapUrl);
            $("#mapPopup").show();
        });

        $("#closePopup").click(function () {
            $("#mapPopup").hide();
        });
    });


    $(document).ready(function(){
       
        $("#document").change(function(){
            if($(this).val() !== ""){
                $("#uploadSection").show();
            } else {
                $("#uploadSection").hide();
                $("#preview").hide();
            }
        });

     
        $("#uploadFile").change(function(event){
            var file = event.target.files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#preview").attr("src", e.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });
    });
