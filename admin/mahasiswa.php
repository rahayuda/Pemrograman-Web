<?php
include "koneksi.php";
?>

<br>
<h2><b>Mahasiswa</b></h2>
<hr>

<a class="btn btn-primary btn-sm" href="index.php?page=insert" role="button">New Record</a>
<br><br>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<div class="table-responsive">
<table id="table_id" class="table table-borderless table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $list = mysqli_query($con,"select * from mahasiswa");
    $no = 0;
    while($row = mysqli_fetch_assoc($list))
    {
      $no = $no + 1;
      ?>
      <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['kuliah']; ?></td>
        <td><?php echo $row['waktu']; ?></td>
        <td>
          <a class="btn btn-warning btn-sm" href="index.php?page=edit&id=<?php echo $row['id']; ?>" role="button">Edit</a>
          <a class="btn btn-danger btn-sm" href="index.php?page=delete&id=<?php echo $row['id']; ?>" role="button">Delete</a>
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