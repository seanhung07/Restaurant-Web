<div id="mapcontainer">
  <div id="map"></div>
  <div class="info" style="font-size:200%"><strong>Location: </strong>n/a</div>
  <div class="info" style="font-size:200%"><strong>Phone: </strong>0987654321</div>
  <div class="info" style="font-size:200%"><strong>Open: </strong>9:00am</div>
  <div class="info" style="font-size:200%"><strong>Close: </strong>12:00pm</div>
  <div class="info" style="font-size:200%"><strong>History: </strong>The Pizza story begins in September 2018. When Daniel, Sean, and Jessie decided to learn to develop a website, they found their interest in pizza.  The founder of pizza said "The people were enchanted with the product, watching us tossing the dough over our heads. They were really enjoying themselves…." Daniel, Sean, and Jessie created an innovative, high quality, engaging, informal eating experience in a friendly neighborhood restaurant. Pizza became a popular place with the teenage and college crowd. 
Pizza is always an entrepreneurial, innovative, fast-thinking place. It is the kind of restaurant where everyone shared the learning. As the founder said "To me, the biggest strength of Pizza was that we had an awful lot of people who came up with great ideas."</div>
<div class="info" style="font-size:200%"><strong>Core Value: </strong> The Right People, Enterprise, Energy, Performance</div>

</div>

<script>
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError);
      }
  }
  function showPosition(position) {
    var LatLng = {lat: position.coords.latitude, lng: position.coords.longitude};
    var mapOptions = {
        center: LatLng,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var marker = new google.maps.Marker({
      position: LatLng,
      map: map,
      title: 'pizza'
    });
  }
  function showError(){
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa6Ly7B_jOG4p6r9uK1Aw4je5BWnoqPtY&callback=getLocation"></script>