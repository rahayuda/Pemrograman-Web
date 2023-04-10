<style>
  table {
    border-collapse: separate !important;
    border-spacing: 1 !important;
  }
  table tr th,
  table tr td {
    border-right: 3px #ffffff !important;
    border-bottom: 3px #ffffff !important;
  }
  table tr th:first-child,
  table tr td:first-child {
    border-left: 3px #ffffff !important;
  }
  table tr th {
    border-top: 3px #ffffff !important;
  }

  /* top-left border-radius */
  table tr:first-child th:first-child {
    border-top-left-radius: 0 rem !important;
  }

  /* top-right border-radius */
  table tr:first-child th:last-child {
    border-top-right-radius: 0 rem !important;
  }

  /* bottom-left border-radius */
  table tr:last-child td:first-child {
    border-bottom-left-radius: 0.5rem !important;
  }

  /* bottom-right border-radius */
  table tr:last-child td:last-child {
    border-bottom-right-radius: 0.5rem !important;
  }  
</style>

<br>
<h2><b>Visitors</b></h2>
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
include "koneksi.php";

$que   = "SELECT * FROM visitors where ip='$IP'";
$data  = mysqli_query($con,$que);
$dt    = mysqli_fetch_assoc($data);

$que1   = "SELECT * FROM visitors";
$data1  = mysqli_query($con,$que1); 
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

        /// Membuat Marker -----------------------------------------///
        var marker=new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $dt['latitude']; ?>,<?php echo $dt['longitude']; ?>),
          map: peta,
          icon: "https://img.icons8.com/officel/40/000000/marker.png",
        });

        marker.setMap(peta);
        var infowindow = new google.maps.InfoWindow({
          content:"<?php echo $dt['ip']; ?><br><?php echo $dt['device']; ?>, <?php echo $dt['os']; ?><br><?php echo $dt['browser']; ?><br><?php echo $dt['date']; ?>"
        });

        google.maps.event.addListener(marker,'click',function(){
          infowindow.open(peta,marker);
        });
        ///---------------------------------------------------------///

        <?php while ($dt2 = mysqli_fetch_assoc($data1)){ ?>
          var marker<?php echo $dt2['id']; ?>=new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $dt2['latitude']; ?>,<?php echo $dt2['longitude']; ?>),
            map: peta,
          });

          marker<?php echo $dt2['id']; ?>.setMap(peta);
          var infowindow<?php echo $dt2['id']; ?> = new google.maps.InfoWindow({
            content:"<?php echo $dt2['ip']; ?><br><?php echo $dt2['device']; ?>, <?php echo $dt2['os']; ?><br><?php echo $dt2['browser']; ?><br><?php echo $dt2['date']; ?>"
          });

          google.maps.event.addListener(marker<?php echo $dt2['id']; ?>,'click',function(){
            infowindow<?php echo $dt2['id']; ?>.open(peta,marker<?php echo $dt2['id']; ?>);
          });   
        <?php } ?>    
      }

      // event jendela di-load  
      google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <div id="googleMap" style="width:100%;height:500px;"></div>

    <hr>

    <table class="table table-borderless table-striped">
      <thead style="background-color:#284059;" class="text-white">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Ip</th>
          <th scope="col">Device</th>
          <th scope="col">Operation System</th>
          <th scope="col">Browser</th>
          <th scope="col">Coordinate</th>
          <th scope="col">Time</th>
        </tr>
      </thead>
      <tbody >
        <tr>
          <td scope="row">1</td>
          <td><b><?php echo $dt['ip']; ?></b></td>
          <td><?php echo $dt['device']; ?></td>
          <td><?php echo $dt['os']; ?>, <?php echo $dt['osv']; ?></td>
          <td><?php echo $dt['browser']; ?></td>
          <td><?php echo $dt['latitude']; ?>, <?php echo $dt['longitude']; ?></td>
          <td><?php echo $dt['date']; ?></td>
        </tr>
        <?php 
        $que3   = "SELECT * FROM visitors where ip != '$IP'";
        $data3  = mysqli_query($con,$que3);
        $no     = 1;
        while ($dt3 = mysqli_fetch_assoc($data3))
        { 
          $no = $no+1;
          ?>
          <tr>
            <td scope="row"><?php echo $no; ?></td>
            <td><?php echo $dt3['ip']; ?></td>
            <td><?php echo $dt3['device']; ?></td>
            <td><?php echo $dt3['os']; ?>, <?php echo $dt3['osv']; ?></td>
            <td><?php echo $dt3['browser']; ?></td>
            <td><?php echo $dt3['latitude']; ?>, <?php echo $dt3['longitude']; ?></td>
            <td><?php echo $dt3['date']; ?></td>
          </tr>
        <?php } ?> 

      </tbody>
    </table>
