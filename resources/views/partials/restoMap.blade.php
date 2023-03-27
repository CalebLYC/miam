<div id="map"></div>

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

<script>
    function initMap() {
        const selector = document.getElementById("map")
        const center = { lat: {{$restaurant->latitude}}, lng: {{$restaurant->longitude}} }
        const options = {
          center: center,
          zoom : 11,
        }

        const map = new google.maps.Map(selector, options);
    }
</script>
