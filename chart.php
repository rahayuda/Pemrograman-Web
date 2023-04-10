<br>
<h2><b>Data</b></h2>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<div class="jumbotron">
	<h1 class="display-4">Chart</h1>
	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	<hr class="my-4">
</div>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>


<?php 
include "koneksi.php";
$website 	= mysqli_query($con,"select * from mahasiswa where kuliah = 'website'");
$data_web 	= mysqli_num_rows($website);

$mobile 	= mysqli_query($con,"select * from mahasiswa where kuliah = 'mobile '");
$data_mob 	= mysqli_num_rows($mobile);

$warehouse 	= mysqli_query($con,"select * from mahasiswa where kuliah = 'warehouse'");
$data_ware 	= mysqli_num_rows($warehouse);

?>

<script>
	var xValues = ["Website", "Mobile", "Warehouse"];
	var yValues = [<?php echo $data_web; ?>, <?php echo $data_mob; ?>, <?php echo $data_ware; ?>];
	var barColors = ["blue", "green","yellow"];

	new Chart("myChart", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: barColors,
				data: yValues
			}]
		},
		options: {
			legend: {display: false},
			title: {
				display: true,
				text: "Mahasiswa TA Genap 2022/2023"
			}
		}
	});
</script>