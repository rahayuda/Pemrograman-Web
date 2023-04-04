<style>
  table {
    border-collapse: separate !important;
    border-spacing: 0 !important;
  }
  table tr th,
  table tr td {
    border-right: 3px solid #ffffff !important;
    border-bottom: 3px solid #ffffff !important;
  }
  table tr th:first-child,
  table tr td:first-child {
    border-left: 3px solid #ffffff !important;
  }
  table tr th {
    border-top: 3px solid #ffffff !important;
  }

  /* top-left border-radius */
  table tr:first-child th:first-child {
    border-top-left-radius: 0.5rem !important;
  }

  /* top-right border-radius */
  table tr:first-child th:last-child {
    border-top-right-radius: 0.5rem !important;
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

  <style>
    .alert {
      display: none;
    }
  </style>

<br>
<h2><b>Home</b></h2>
<br>

<div class="jumbotron">
  <h1 class="display-4">Hello, World!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>Ip Address: <?php echo $IP; ?> | Browser: <?php echo $browser; ?> | Device: <?php echo $device; ?> | 
    <a class="btn btn-success btn-sm" href="file/app-release.rar" role="button" download>download apk</a></p>
  </div>

  <br>

  <h2><b>Timeline</b></h2>
  <br>

  <table class="table table-borderless table-striped">
    <thead style="background-color:#284059;" class="text-white">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Link</th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td scope="row">1</td>
        <td >Tugas 1. Menyusun ringkasan dalam bentuk makalah tentang topik - topik utama pada pemrograman web</td>
        <td><button type="button" class="btn btn btn-outline-danger btn-sm" >view</button></td>
      </tr>
      <tr>
        <td scope="row">2</td>
        <td>Tugas 2. Membuat halaman index dengan HTML</td>
        <td><a class="btn btn-success btn-sm" href="tugas-2/index.html" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">3</td>
        <td>Tugas 3. Membuat halaman index dengan HTML, CSS dan Java Script</td>
        <td><a class="btn btn-success btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">4</td>
        <td>Tugas 4. Membuat Website dengan Beberapa Halaman</td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">5</td>
        <td>Tugas 5. Membuat Form pada Website</td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">6</td>
        <td>Tugas 6. Membuat Login dan Register</td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">7</td>
        <td>Tugas 7. Artikel Ilmiah</td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">8</td>
        <td>Tugas 8. Aplikasi Website dengan Basis Data</td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">9</td>
        <td>UTS. </td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
      <tr>
        <td scope="row">10</td>
        <td>UAS. </td>
        <td><a class="btn btn-primary btn-sm" href="#" role="button">view</a></td>
      </tr>
    </tbody>
  </table>

  <br>
  <h2><b>Javascript</b></h2>
  <br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div aria-live="polite" aria-atomic="true" style="position: relative;">
    <div class="toast" data-animation="true" data-delay="500" data-autohide="true" style="position: absolute; top: 0; right: 0;">
      <div class="toast-header">
        <strong class="mr-auto">Bootstrap</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Halo, ini pesan notifikasi toast.
      </div>
    </div>
  </div>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Modal</button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top: Tugas 2">Tooltps</button>
  <button type="button" class="btn btn-success" id="myAlert">Alert</button>
  <button type="button" class="btn btn-danger" id="myBtn">Toast</button>

  <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $('.toast').toast('show');
      });
    });

  </script>

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>

  <script>
    $(document).ready(function () {
      $("#myAlert").click(function () {
        $('.alert').show()
      })
    });
  </script>