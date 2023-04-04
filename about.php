    <br>
    <h2><b>About</b></h2>
    <br>

    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>

      var x = document.getElementById("lokasi");

      addEventListener('load',function getLocation(){
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      });

      function showPosition(position) {

        $.ajax({
          url: "geosavefile.php",
          type: "post",
          data: { lat: position.coords.latitude, long: position.coords.longitude},
          success: function (data) {
            var dataParsed = JSON.parse(data);
            console.log(dataParsed);
          }
        });
      }

    </script>



    <?php
    $user_name  = "root";
    $password   = "";
    $database   = "epiz_32822082_ifmagang";
    $host_name  = "localhost";

    $con  = mysqli_connect($host_name,$user_name,$password);
    $db   = mysqli_select_db($con,$database);

    $que1   = "SELECT * FROM perangkat where email='lia.putricandrawati@gmail.com'";
    $data1  = mysqli_query($con,$que1);
    $dt1    = mysqli_fetch_assoc($data1);  
    ?>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var propertiPeta = {
          center:new google.maps.LatLng(-8.4410368, 115.1533056),
          zoom:9,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // membuat Marker
        var marker=new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $dt1['latitude']; ?>,<?php echo $dt1['longitude']; ?>),
          map: peta,
          animation: google.maps.Animation.BOUNCE
        });

        var marker=new google.maps.Marker({
          position: new google.maps.LatLng(-8.4410368, 115.1533056),
          map: peta,
        });

        var marker=new google.maps.Marker({
          position: new google.maps.LatLng(-8.5410368, 114.1533056),
          map: peta,
        });

        var marker=new google.maps.Marker({
          position: new google.maps.LatLng(-8.5511368, 115.1533056),
          map: peta,
        });

        var marker=new google.maps.Marker({
          position: new google.maps.LatLng(-8.6212368, 114.1533056),
          map: peta,
        });
      }

      // event jendela di-load  
      google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <div id="googleMap" style="width:100%;height:500px;"></div>
    <div><?php echo $dt1['latitude']; ?>,<?php echo $dt1['longitude']; ?></div>