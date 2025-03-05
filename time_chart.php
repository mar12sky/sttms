<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STTMS | TIME ALLOTMENT CHART</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <script src="plugins/jquery/jquery.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">time</a>
      </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-normal">Operator</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas "></i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="party.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>
                  Parties
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="groups.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>
                  Groups
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="delegates.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>
                  Delegates
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="agenda.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Agenda
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="time_chart.php" class="nav-link active">
                <i class="nav-icon fas fa-clock"></i>
                <p>
                  Time Chart
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="calendar.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendar
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid d-none">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?php include 'connection.php'; ?>
              <?php
              $s = 0;
              $pdo = pdo_connect_mysql();
              // Get the page via GET request (URL param: page), if non exists default the page to 1
              $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
              // Number of records to show on each page
              $records_per_page = 15;


              // Prepare the SQL statement and get records from our times table, LIMIT will determine the page
              //$stmt = $pdo->prepare('SELECT * FROM delegates ORDER BY div_no LIMIT :current_page, :record_per_page');
              $stmt = $pdo->prepare('SELECT * FROM time_allotment_chart_meta ORDER BY tacm_id');
              //$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
              //$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
              $stmt->execute();
              // Fetch the records so we can display them in our template.
              $times = $stmt->fetchAll(PDO::FETCH_ASSOC);

              // Get the total number of times, this is so we can determine whether there should be a next and previous button
              $num_times = $pdo->query('SELECT COUNT(*) FROM time_allotment_chart_meta')->fetchColumn();
              ?>

              <div class="card">
                <div class="card-header bg-warning">
                  <h3 class="card-title text-bold">TIME ALLOTMENT CHART</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-success">
                        <!-- <th style="width:30px">Sr. No.</th> -->
                        <th>Party</th>
                        <th>Strength</th>
                        <th>1 Hour</th>
                        <th>1<sup>1/2</sup> Hrs.</th>
                        <th>2 Hrs.</th>
                        <th>2<sup>1/2</sup> Hrs.</th>
                        <th>3 Hrs.</th>
                        <th>4 Hrs.</th>
                        <th>6 Hrs.</th>
                        <th>8 Hrs.</th>
                        <th>10 Hrs.</th>
                        <th>12 Hrs.</th>
                        <!-- <th style="width: 80px">Action</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      function hrstominute($minutes)
                      {
                        //return $hours = intdiv($minutes, 60).'-'. ($minutes % 60);
                        $hours = intdiv($minutes, 60);
                        $min = $minutes % 60;
                        //$num_padded = sprintf("%02d", $num);
                        printf("%02d:%02d", $hours, $min);
                      } ?>
                      <? //=hrstominute(1510);
                      ?>
                      <?php foreach ($times as $time): $s + 1;
                        $s++ ?>
                        <tr>
                          <!-- <td></td> -->
                          <td class="text-bold"><?= $time['party'] ?></td>
                          <td><?= $time['strength'] ?></td>
                          <td><?= hrstominute($time['60_min']) ?></td>
                          <td><?= hrstominute($time['90_min']) ?></td>
                          <td><?= hrstominute($time['120_min']) ?></td>
                          <td><?= hrstominute($time['150_min']) ?></td>
                          <td><?= hrstominute($time['180_min']) ?></td>
                          <td><?= hrstominute($time['240_min']) ?></td>
                          <td><?= hrstominute($time['360_min']) ?></td>
                          <td><?= hrstominute($time['480_min']) ?></td>
                          <td><?= hrstominute($time['600_min']) ?></td>
                          <td><?= hrstominute($time['720_min']) ?></td>
                          <!-- <td>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">                        
                        <a href="profile.php?id=<? //=$time['tac_id']
                                                ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>                      
                      </div>
                    </td> -->
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr class="bg-success">
                        <!-- <th>Sr. No.</th> -->
                        <th>Party</th>
                        <th>Strength</th>
                        <th>1 Hour</th>
                        <th>1<sup>1/2</sup> Hrs.</th>
                        <th>2 Hrs.</th>
                        <th>2<sup>1/2</sup> Hrs.</th>
                        <th>3 Hrs.</th>
                        <th>4 Hrs.</th>
                        <th>6 Hrs.</th>
                        <th>8 Hrs.</th>
                        <th>10 Hrs.</th>
                        <th>12 Hrs.</th>
                        <!-- <th style="width: 80px">Action</th>                     -->
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>