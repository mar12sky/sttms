<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STTMS | VIEW AGENDA</title>
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/custom.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
    #sortable1,
    #sortable2 {
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-right: 10px;
        float: left;
        margin-bottom: 10px;
    }

    #sortable1 li,
    #sortable2 li {
        margin: 5px;
        padding: 5px;
        font-size: 1.2em;
        height: 1.5em;
        border: 1PX solid #333;
    }
    </style>
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
                            <a href="agenda.php" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Agenda
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="time_chart.php" class="nav-link">
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

                            <div class="card">
                                <div class="card-header bg-warning">
                                    <?php if (isset($_GET['agenda_id'])) {
                                        $agenda_time = 0;
                                        $total_strength = 0;
                                        $pdo = pdo_connect_mysql();
                                        // Get the contact from the contacts table
                                        $stmt = $pdo->prepare('SELECT * FROM agenda WHERE agenda_id = ?');
                                        $stmt->execute([$_GET['agenda_id']]);
                                        $contact = $stmt->fetch(PDO::FETCH_ASSOC); ?>
                                    <h3 class="card-title text-bold"><?= $contact['agenda_title'] ?></h3>
                                    <?php if (!$contact) {
                                            exit('Session doesn\'t exist with that ID!');
                                        }
                                    } else {
                                        exit('No ID specified!');
                                    }

                                    ?>
                                    <!-- <h3 class="card-title text-bold">TIME ALLOTMENT CHART</h3> -->
                                    <div class="card-tools">
                                        <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/display/?mode=<?= $contact['agenda_type'] ?>&agenda_id=<?= $contact['agenda_id'] ?>&subject=<?= $contact['agenda_title'] ?>&inchair=<?= $contact['in_the_chair'] ?>"
                                            target="_blank" class="btn btn-tool" title="View in new window">
                                            <i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <p class="font-weight-bold d-none"></p>
                                                    <p class="font-weight-bold text-danger">MODE:
                                                        <?= strtoupper($contact['agenda_type']); ?></p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-bold">DATE: <?= $contact['agenda_date'] ?></p>
                                                    <p class="font-weight-bold "></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="font-weight-bold">SUBJECT:
                                                    <?= $contact['agenda_title'] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="font-weight-bold">IN THE CHAIR:
                                                    <?= $contact['in_the_chair'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <!-- -->
                                            <!-- -->
                                        </div>
                                        <div class="col-7">
                                            <div class="card">
                                                <div class="card-header bg-info">
                                                    <h3 class="card-title">LIST OF DELEGATES</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse" title="Collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                              <i class="fas fa-times"></i>
                            </button> -->
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                    $pdo = pdo_connect_mysql();
                                                    // Get the page via GET request (URL param: page), if non exists default the page to 1
                                                    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
                                                    // Number of records to show on each page
                                                    //$records_per_page = 10;


                                                    // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
                                                    $stmt = $pdo->prepare('SELECT * FROM delegates ORDER BY div_no LIMIT :current_page, :record_per_page');
                                                    $stmt = $pdo->prepare('SELECT * FROM delegates ORDER BY div_no');
                                                    //$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
                                                    //$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
                                                    $stmt->execute();
                                                    // Fetch the records so we can display them in our template.
                                                    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                                    // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                                                    $num_contacts = $pdo->query('SELECT COUNT(*) FROM delegates')->fetchColumn();
                                                    ?>
                                                    <ul id="sortable1" class="connectedSortable">
                                                        <?php foreach ($contacts as $contact): ?>
                                                        <li id="<?= $contact['id'] ?>" class="ui-state-default"
                                                            style="cursor:move; font-weight:bold; text-align:center; width:50px; height:40px; float:left; font-size:16px; line-height:40px;">
                                                            <?= $contact['div_no'] ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>

                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="card">
                                                <div class="card-header bg-success">
                                                    <h3 class="card-title">LIST OF SPEAKERS</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse" title="Collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                              <i class="fas fa-times"></i>
                            </button> -->
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul id="sortable2" class="connectedSortable"
                                                        style="min-height: 300px; width:100%;">
                                                        <?php
                                                        $stmt = $pdo->query("SELECT * FROM agenda WHERE agenda_status = 'open' ORDER BY agenda_id DESC LIMIT 1");

                                                        // Fetch the result
                                                        $result = $stmt->fetch(PDO::FETCH_ASSOC);

                                                        if ($result) {
                                                            $speaker_list = explode(',', $result['speaker_list']);
                                                            foreach ($speaker_list as $speaker) {
                                                                $stmt = $pdo->prepare('SELECT * FROM delegates WHERE id = ?');
                                                                $stmt->execute([$speaker]);
                                                                $speaker = $stmt->fetch(PDO::FETCH_ASSOC);
                                                                if ($speaker) {
                                                                    echo '<li id="' . $speaker['id'] . '" class="ui-state-highlight" style="cursor:move; font-weight:bold; text-align:center; width:50px; height:40px; float:left; font-size:16px; line-height:40px;">' . $speaker['div_no'] . '</li>';
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <button id="saveOrder" class="btn btn-primary">Save Speaker
                                                        List</button>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                        $(function() {
                                            $(".connectedSortable").sortable({
                                                connectWith: ".connectedSortable"
                                            }).disableSelection();
                                        });

                                        $("#saveOrder").click(function() {
                                            var order = $("#sortable2").sortable("toArray");
                                            $.ajax({
                                                url: 'save_speaker.php',
                                                method: 'POST',

                                                data: {
                                                    order: order,
                                                    agenda_id: <?= $_GET['agenda_id'] ?>
                                                },
                                                success: function(response) {
                                                    alert('Speakers added successfully');
                                                    //alert(response);
                                                }
                                            });
                                        });
                                        </script>
                                    </div>

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
    <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
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