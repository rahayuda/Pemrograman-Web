<br>
<h2><b>Data</b></h2>
<br>

<div class="jumbotron">
	<h1 class="display-4">Mahasiswa</h1>
	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	<hr class="my-4">
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<div class="table-responsive">
<table id="table_id" class="table table-borderless table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Time</th>
		</tr>
	</thead>
	<tbody>
		<?php

		$no = 1;
		$que   = "SELECT * FROM mahasiswa";
		$select  = mysqli_query($con,$que);

		while($data= mysqli_fetch_array($select)){
			?>
			<tr>
				<!-- menampilkan data -->
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['waktu']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<!-- jquery datatable -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<!-- fungsi datatable -->
<script>
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>