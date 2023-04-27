<?php
include "koneksi.php";
?>

<br>
<h2><b>Home</b></h2>
<hr>

<a class="btn btn-success btn-sm" href="#" role="button">Download</a>
<br><br>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<div class="table-responsive">
<table id="table_id" class="table table-borderless table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $list = mysqli_query($con,"select * from user");
    while($row = mysqli_fetch_assoc($list))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td>
        <?php if($row['status']=="online") {?>
          <div class="btn btn-success btn-sm"><?php echo $row['status']; ?></div>
        <?php } else { ?>
          <div class="btn btn-outline-success btn-sm"><?php echo $row['status']; ?></div>
        <?php } ?>
        </td>
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