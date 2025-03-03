<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STTMS | Agenda</title>

    <!-- Google Font: Source Sans Pro -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
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
                            <a href="#" class="nav-link">
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
                                    <a href="list-speakers.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Speakers List Log</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="agenda.php" class="nav-link active">
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
                            <h1>Advanced Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Advanced Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-1 mb-3">
                            <a href="./new-agenda.php" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i> Add
                                New Agenda</a>
                        </div>


                        <!-- Default box -->
                        <div class="card col-12 p-1">
                            <div class="card-header bg-warning">
                                <h3 class="card-title text-bold">LIST OF AGENDA</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                      <i class="fas fa-times"></i>
                                    </button> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php include 'connection.php'; ?>
                                    <?php
                                    $pdo = pdo_connect_mysql();
                                    // Get the page via GET request (URL param: page), if non exists default the page to 1
                                    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
                                    // Number of records to show on each page
                                    $records_per_page = 15;


                                    // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page                    
                                    $stmt = $pdo->prepare('SELECT * FROM agenda WHERE agenda_status = :status');
                                    $stmt->execute(array('status' => 'open'));
                                    //$stmt->bindValue(1, "open", PDO::PARAM_STR); 
                                    // $stmta = $pdo->prepare('SELECT * FROM agenda ORDER BY agenda_id LIMIT :current_page, :record_per_page');
                                    // $stmta->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
                                    // $stmta->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
                                    //$stmta->execute();
                                    $stmta = $pdo->prepare('SELECT * FROM agenda  WHERE agenda_status = :status');
                                    $stmta->execute(array('status' => 'closed'));

                                    // Fetch the records so we can display them in our template.
                                    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    $allAgendas = $stmta->fetchAll(PDO::FETCH_ASSOC);
                                    // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                                    $num_contacts = $pdo->query('SELECT COUNT(*) FROM agenda')->fetchColumn();
                                    ?>
                                    <?php foreach ($contacts as $contact): ?>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text fw-bold"><?= $contact['created_at'] ?><small
                                                            class="float-right text-primary font-weight-bold"><?= strtoupper($contact['agenda_type']) ?></small></span>
                                                    <span class="info-box-number"><?= $contact['agenda_title'] ?></span>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        <a
                                                            href="view-agenda-<?= $contact['agenda_type'] ?>.php?agenda_id=<?= $contact['agenda_id'] ?>">View
                                                            Agenda</a>
                                                    </span>
                                                    <small class="float-right">
                                                        <form id="end-agenda-form" method="post" action="end_agenda.php">
                                                            <input type="hidden" name="agenda_id" id="agenda_id"
                                                                value="<?= $contact['agenda_id'] ?>">
                                                            <button id="end_agenda" class="btn btn-danger float-right"
                                                                data-session-id="<?= $contact['agenda_id'] ?>">End
                                                                Session</button>
                                                        </form>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>


                                <div class="row">
                                    <div class="col-12 mt-4 m-3">
                                        <h3 class="card-title text-bold text-uppercase">Previous Agendas</h3>
                                    </div>

                                    <?php foreach ($allAgendas as $allAgenda): ?>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-secondary"><i
                                                        class="far fa-bookmark"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text fw-bold"><?= $contact['created_at'] ?><small
                                                            class="float-right text-primary font-weight-bold"><?= strtoupper($contact['agenda_type']) ?></small></span>
                                                    <span class="info-box-number"><?= $allAgenda['agenda_title'] ?></span>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        <a href="view-agenda.php?agenda_id=<?= $allAgenda['agenda_id'] ?>">View
                                                            Agenda</a>
                                                    </span>
                                                    <!-- <small class="float-right">
                                                    <form id="end-agenda-form" method="post" action="end_agenda.php">
                                                        <input type="hidden" name="agenda_id" id="agenda_id"
                                                            value="<? //= $allAgenda['agenda_id'] 
                                                                    ?>">
                                                        <button id="end_agenda" class="btn btn-danger float-right"
                                                            data-session-id="<? //= $allAgenda['agenda_id'] 
                                                                                ?>">End
                                                            Session</button>
                                                    </form>
                                                </small> -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                                <div class="col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination
                    <?php if ($page == 1): ?>
                      d-none
                    <?php endif; ?>
                    ">
                                            <li class="page-item"><a class="page-link"
                                                    href="agenda.php?page=1">First</a></li>
                                            <li class="page-item
                      <?php if ($page <= 1): ?>
                        d-none
                      <?php endif; ?>
                      ">
                                                <a class="page-link" href="agenda.php?page=<?php if ($page <= 1) {
                                                                                                echo 1;
                                                                                            } else {
                                                                                                echo $page - 1;
                                                                                            } ?>">Prev</a>
                                            </li>
                                            <li class="page-item
                      <?php if ($page >= $num_contacts / $records_per_page): ?>
                        d-none
                      <?php endif; ?>
                      ">
                                                <a class="page-link" href="agenda.php?page=<?php if ($page >= $num_contacts / $records_per_page) {
                                                                                                echo $num_contacts / $records_per_page;
                                                                                            } else {
                                                                                                echo $page + 1;
                                                                                            } ?>">Next</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="agenda.php?page=<?php echo ceil($num_contacts / $records_per_page); ?>">Last</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    &nbsp;
                                </div>
                                <!-- /.card-footer-->

                            </div>
                            <!-- /.card -->

                        </div>







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
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').php(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
    </script>
</body>

</html>