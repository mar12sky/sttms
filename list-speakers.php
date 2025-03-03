<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STTMS | List Speakers</title>

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
        <a href="#" class="nav-link">Contact</a>
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
                            <a href="delegates.php" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>
                                    Delegates
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-file-excel"></i>
                                <p>
                                    Logs
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="time-log.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Time Allotment Log</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="list-speakers.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Speakers List Log</p>
                                    </a>
                                </li>

                            </ul>
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


                            <div class="card">
                                <div class="card-header bg-warning">
                                    <h3 class="card-title text-bold">List of Speakers</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <h3>MINISTER'S TIME</h3>
                                            30 MINUTES
                                        </div>
                                        <div class="col-4 text-center display-4">
                                            <h1>RAJYA SABHA</h1>
                                            <h3>LIST OF SPEAKERS</h3>
                                        </div>
                                        <div class="col-4">
                                            <h3>TIME ALLOTTED</h3>
                                            240 MINUTES
                                        </div>
                                    </div>
                                    <!-- -->
                                    <?php include 'connection.php'; ?>
                                    <?php
                  $pdo = pdo_connect_mysql();
                  // Get the page via GET request (URL param: page), if non exists default the page to 1
                  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
                  // Number of records to show on each page
                  $records_per_page = 15;


                  // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
                  //$stmt = $pdo->prepare('SELECT * FROM delegates ORDER BY div_no LIMIT :current_page, :record_per_page');
                  $stmt = $pdo->prepare('SELECT * FROM party_groups ORDER BY group_id');
                  //$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
                  //$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
                  $stmt->execute();
                  // Fetch the records so we can display them in our template.
                  $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                  //$num_contacts = $pdo->query('SELECT COUNT(*) FROM parties')->fetchColumn();
                  ?>
                                    <div class="row">
                                        <?php foreach ($contacts as $contact): ?>
                                        <div class="col-4">
                                            <div class="card card-widget">
                                                <div class="card-header bg-info">
                                                    <h3 class="card-title">
                                                        <!-- <i class="fas fa-edit"></i> -->
                                                        <?= $contact['group_name'] ?>
                                                    </h3>
                                                    <!-- /.user-block -->
                                                    <div class="card-tools">
                                                        <h3 class="card-title">

                                                            <span class="float-right"><?= $contact['strength'] ?></span>
                                                        </h3>
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <!-- Time details -->
                                                    <div class="card card-widget widget-user-2 shadow-sm">
                                                        <!-- Add the bg color to the header using any of the bg-* classes -->

                                                        <div class="card-footer p-0">
                                                            <!-- post text -->
                                                            <h3>Agenda Detail</h3>
                                                            <?php
                                $deli = $pdo->prepare('SELECT * FROM delegates WHERE group_name = "BJP" ORDER BY div_no');
                                //$deli->execute([$contact['group_name']]);
                                $deli->execute();
                                $deligates = $deli->fetchAll(PDO::FETCH_ASSOC);
                                ?>
                                                            <?php foreach ($deligates as $deligate): ?>
                                                            <?= $deligate['name_en'] ?>
                                                            <?php endforeach; ?>
                                                            <p>Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                            </p>

                                                            <div class="card-header ui-sortable-handle"
                                                                style="cursor: move;">
                                                                <h3 class="card-title">
                                                                    <i class="ion ion-clipboard mr-1"></i>
                                                                    Speaker List
                                                                </h3>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <!-- -->

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
    <script src="plugins/datatables-buttons/js/buttons.php5.min.js"></script>
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