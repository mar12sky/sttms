<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STTMS | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="dist/css/custom.css">
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <style>
        .direct-chat-messages {
            height: 170px;

        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

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
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link active">
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
                                    <a href="iframe.html" class="nav-link">
                                        <i class="nav-icon fab fa-speaker-deck"></i>
                                        <p>
                                            Speakers
                                            <!-- <span class="right badge badge-danger">New</span> -->
                                        </p>
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
                            <a href="agenda.php" class="nav-link">
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content d-none">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>Bills</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Logs</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>255</h3>

                                    <p>Delegates</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>36</h3>

                                    <p>Parties</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- -->
                        <div class="col-6">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">MESSAGE CENTER</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg" id="messenger">
                                            <!-- /.direct-chat-img -->
                                            <!-- <div class="direct-chat-text">
                      Text Message That's unbelievable!
                    </div>
                    <div class="direct-chat-text">
                      Text Message That's unbelievable!
                    </div>
                    <div class="direct-chat-text">
                      Text Message That's unbelievable!
                    </div> -->
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                    </div>
                                    <!--/.direct-chat-messages-->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" id="message" name="message"
                                                placeholder="Type Message ..." class="form-control">
                                            <span class="input-group-append">
                                                <button type="button" id="sendMessage" class="btn btn-primary">Send
                                                    Message</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card Footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-6">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">ACTIVE AGENDA</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" style="min-height: 200px;">

                                        <?php
                                        $pdo = pdo_connect_mysql();
                                        // Get the page via GET request (URL param: page), if non exists default the page to 1
                                        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
                                        // Number of records to show on each page
                                        $records_per_page = 15;


                                        // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
                                        //$stmt = $pdo->prepare('SELECT * FROM sessions ORDER BY session_id LIMIT :current_page, :record_per_page');
                                        $stmt = $pdo->prepare('SELECT * FROM agenda WHERE agenda_status = :status');
                                        $stmt->execute(array('status' => 'open'));
                                        //$stmt->bindValue(1, "open", PDO::PARAM_STR);               
                                        // $stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
                                        // $stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);

                                        // Fetch the records so we can display them in our template.
                                        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                                        $num_contacts = $pdo->query('SELECT COUNT(*) FROM sessions')->fetchColumn();
                                        ?>
                                        <?php foreach ($contacts as $contact): ?>
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info"><i
                                                            class="far fa-bookmark"></i></span>
                                                    <div class="info-box-content">
                                                        <span
                                                            class="info-box-text fw-bold"><?= $contact['created_at'] ?></span>
                                                        <span class="info-box-number"><?= $contact['agenda_title'] ?></span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-info" style="width: 70%"></div>
                                                        </div>
                                                        <span class="progress-description">
                                                            <small>
                                                                <a
                                                                    href="view-agenda.php?agenda_id=<?= $contact['agenda_id'] ?>">View</a>
                                                            </small>
                                                            <small class="float-right">
                                                                <form id="end-agenda-form" method="post"
                                                                    action="end_agenda.php">
                                                                    <input type="hidden" name="agenda_id" id="agenda_id"
                                                                        value="<?= $contact['agenda_id'] ?>">
                                                                    <button id="end_agenda"
                                                                        class="btn btn-danger float-right"
                                                                        data-session-id="<?= $contact['agenda_id'] ?>">End
                                                                        Session</button>
                                                                </form>
                                                            </small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="pagination float-right p-3">
                                        <?php if ($page > 1): ?>
                                            <a href="log.php?page=<?= $page - 1 ?>"><i
                                                    class="fas fa-angle-double-left fa-lg"></i></a>
                                        <?php endif; ?>
                                        <?php if ($page * $records_per_page < $num_contacts): ?>
                                            <a href="log.php?page=<?= $page + 1 ?>"><i
                                                    class="fas fa-angle-double-right fa-lg ml-3"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <!-- <div class="card-footer">
              Footer
            </div> -->
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                            <!-- Default box -->
                        </div>

                    </div>
                    <!-- SELECT2 EXAMPLE -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <!-- Preview Frame -->
                    <!-- Map card -->
                    <div class="card card-widget d-none">
                        <div class="card-header bg-warning">
                            <h3 class="card-title text-bold">
                                <i class="fas fa-edit"></i>
                                Display Preview
                            </h3>
                            <!-- /.user-block -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <a href="http://localhost:3000/display/" target="_blank" class="btn btn-tool"
                                    title="View in new window">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <!-- Time details -->

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                    <!-- Preview Frame -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <?php if ($contact['agenda_type'] == 'discussion') : ?>
                                <?php $agenda_time = 0; ?>
                                <div class="card">
                                    <!-- -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%;">
                                                        <p class="font-weight-bold">MINISTER'S TIME: <?php if ($contact['agenda_time'] >= 180) {
                                                                                                            echo "30 Minutes";
                                                                                                        } ?></p>
                                                        <p class="font-weight-bold text-danger">MODE:
                                                            <?= strtoupper($contact['agenda_type']); ?></p>
                                                    </td>
                                                    <td>
                                                        <p class="font-weight-bold">DATE: <?= $contact['agenda_date'] ?></p>
                                                        <p class="font-weight-bold">
                                                            TIME ALLOTMENT (Hours: Minutes) :
                                                            <?php $agenda_time = $contact['agenda_time']; ?>
                                                            <?= sprintf('%02d:%02d', ($contact['agenda_time'] / 60 % 60), $contact['agenda_time'] % 60); ?>
                                                            HRS</p>
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
                                                <div class="card">
                                                    <div class="card-header bg-info">
                                                        <?php
                                                        $s = 0;

                                                        $total_strength = 0;
                                                        $pdo = pdo_connect_mysql();
                                                        // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
                                                        //$stmt = $pdo->prepare('SELECT * FROM delegates ORDER BY div_no LIMIT :current_page, :record_per_page');
                                                        $stmt = $pdo->prepare('SELECT * FROM party_groups ORDER BY strength DESC');
                                                        $stmt->execute();
                                                        // Fetch the records so we can display them in our template.
                                                        $groups = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                                        // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                                                        $num_groups = $pdo->query('SELECT COUNT(*) FROM party_groups')->fetchColumn();
                                                        ?>
                                                        <h3 class="card-title font-weight-bold">PARTY WISE TIME DISTRIBUTION
                                                        </h3>
                                                        <h3 class="card-title font-weight-bold"
                                                            style="float: right!important;">Total
                                                            Strength:
                                                            <?php echo $total_strength = array_sum(array_column($groups, 'strength')); ?>
                                                        </h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <?php foreach ($groups as $group): $s + 1; ?>
                                                                <div class="col-2">
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="2"
                                                                                    class="font-weight-bold bg-secondary">
                                                                                    <?= $group['group_name']; ?>
                                                                                    <?= $group['strength']; ?>
                                                                                    <? $agenda_time;
                                                                                    ?>
                                                                                    <? $total_strength;
                                                                                    ?>
                                                                                    <?php $party_time = round($group['strength'] * $agenda_time / $total_strength); ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <!-- <td class="font-weight-bold">

                                                                            </td> -->
                                                                                <td class="font-weight-bold">
                                                                                    <?php
                                                                                    $minutes = $party_time;

                                                                                    $hours = floor($minutes / 60);
                                                                                    $min = $minutes - ($hours * 60);
                                                                                    ?>

                                                                                    <?= sprintf('%02d:%02d', $hours, $min); ?>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            <?php endforeach; ?>

                                                        </div>
                                                        </table>
                                                        <!-- -->

                                                    </div>
                                                <?php endif; ?>
                                                <!-- TO DO List -->
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <h3 class="card-title">
                                                            <i class="ion ion-clipboard mr-1"></i>
                                                            Speaker List
                                                        </h3>

                                                        <div class="card-tools">
                                                            <h3 class="card-title">
                                                                <i class="ion ion-clipboard mr-1"></i>
                                                                MODE: <?= strtoupper($contact['agenda_type']) ?>
                                                            </h3>
                                                            <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/display/?mode=<?= $contact['agenda_type'] ?>&subject=<?= $contact['agenda_title'] ?>&inchair=<?= $contact['in_the_chair'] ?>"
                                                                target="_blank" class="btn btn-tool"
                                                                title="View in new window">
                                                                <i class="fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <?php $pdo = pdo_connect_mysql(); ?>
                                                        <?php if ($contact['agenda_type'] == 'zero-hours'): ?>
                                                            <ul class="todo-list" data-widget="todo-list">
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
                                                                        if ($speaker): ?>

                                                                            <li class="border mb-3">
                                                                                <!-- drag handle -->
                                                                                <span class="handle">
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                </span>
                                                                                <!-- checkbox -->
                                                                                <span class="text">
                                                                                    <div class="icheck-primary d-inline ml-2">
                                                                                        <input type="checkbox" value=""
                                                                                            name="todo<?= $speaker['div_no'] ?>"
                                                                                            id="todoCheck<?= $speaker['div_no'] ?>">
                                                                                        <label
                                                                                            for="todoCheck<?= $speaker['div_no'] ?>"></label>
                                                                                    </div>
                                                                                </span>
                                                                                <!-- todo text -->
                                                                                <span
                                                                                    class="text"><?= sprintf("%03d", $speaker['div_no']) ?></span>
                                                                                <span class="text">
                                                                                    <input type="text"
                                                                                        name="nt_<?= $speaker['div_no'] ?>"
                                                                                        id="nt_<?= $speaker['div_no'] ?>" class="d-none"
                                                                                        value="00:00:03" style="width: 50%;"
                                                                                        placeholder="--:--">
                                                                                </span>
                                                                                <small class="badge badge-danger"><i
                                                                                        class="far fa-clock"></i> 3 mins</small>
                                                                                <!-- Emphasis label -->
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="startSpeaking_<?= $speaker['div_no'] ?>();">
                                                                                        <i class="fas fa-play"></i>
                                                                                    </button>

                                                                                    <script>
                                                                                        function startSpeaking_<?= $speaker['div_no'] ?>() {
                                                                                            const atime_<?= $speaker['div_no'] ?> = document
                                                                                                .getElementById(
                                                                                                    "nt_<?= $speaker['div_no'] ?>").value;
                                                                                            socket.send(JSON.stringify({
                                                                                                action: "time",
                                                                                                spk: ["<?= $speaker['name_en'] ?>",
                                                                                                    "<?= $speaker['name_hi'] ?>",
                                                                                                    "<?= $speaker['full_party_name'] ?>",
                                                                                                    "<?= $speaker['state_name'] ?>",
                                                                                                    "<?= sprintf("%03d", $speaker['div_no']) ?>"
                                                                                                ],
                                                                                                time: ["<?= $speaker['party'] ?>",
                                                                                                    "00:60:00",
                                                                                                    atime_<?= $speaker['div_no'] ?>
                                                                                                ]
                                                                                            }));
                                                                                            //socket.send(JSON.stringify({ action: "time", spk:["AMIT SHAH", "BJP", "UTTAR PRADESH","003"], time: ["60:00", "10:00"] }));

                                                                                        }
                                                                                    </script>
                                                                                </small>
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="pauseSpeaking();">
                                                                                        <i class="fas fa-pause"></i>
                                                                                    </button>
                                                                                </small>

                                                                                <span class="text"><?= $speaker['name_en'] ?></span>
                                                                                <script>
                                                                                    function extraTime() {
                                                                                        alert("Extra Time");
                                                                                    }
                                                                                </script>
                                                                                <!-- General tools such as edit or delete-->
                                                                                <div class="tools">
                                                                                    <!-- <i class="fas fa-edit"></i> <i class="fas fa-trash-o"></i> -->
                                                                                </div>
                                                                            </li>
                                                                <?php endif;
                                                                    }
                                                                }
                                                                ?>

                                                            </ul>
                                                        <?php endif; ?>
                                                        <?php if ($contact['agenda_type'] == 'speaking'): ?>
                                                            <ul class="todo-list" data-widget="todo-list">
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
                                                                        if ($speaker): ?>

                                                                            <li class="border mb-3">
                                                                                <!-- drag handle -->
                                                                                <span class="handle">
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                </span>
                                                                                <!-- checkbox -->
                                                                                <span class="text">
                                                                                    <div class="icheck-primary d-inline ml-2">
                                                                                        <input type="checkbox" value=""
                                                                                            name="todo<?= $speaker['div_no'] ?>"
                                                                                            id="todoCheck<?= $speaker['div_no'] ?>">
                                                                                        <label
                                                                                            for="todoCheck<?= $speaker['div_no'] ?>"></label>
                                                                                    </div>
                                                                                </span>
                                                                                <!-- todo text -->
                                                                                <span
                                                                                    class="text"><?= sprintf("%03d", $speaker['div_no']) ?></span>
                                                                                <span class="text">
                                                                                    <input type="text"
                                                                                        name="nt_<?= $speaker['div_no'] ?>"
                                                                                        id="nt_<?= $speaker['div_no'] ?>" class="d-none"
                                                                                        style="width: 50%;" placeholder="--:--">
                                                                                </span>
                                                                                <!-- <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small> -->
                                                                                <!-- Emphasis label -->
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="startSpeaking_<?= $speaker['div_no'] ?>();">
                                                                                        <i class="fas fa-play"></i>
                                                                                    </button>

                                                                                    <script>
                                                                                        function startSpeaking_<?= $speaker['div_no'] ?>() {
                                                                                            const atime_<?= $speaker['div_no'] ?> = document
                                                                                                .getElementById(
                                                                                                    "nt_<?= $speaker['div_no'] ?>").value;
                                                                                            socket.send(JSON.stringify({
                                                                                                action: "time",
                                                                                                spk: ["<?= $speaker['name_en'] ?>",
                                                                                                    "<?= $speaker['name_hi'] ?>",
                                                                                                    "<?= $speaker['full_party_name'] ?>",
                                                                                                    "<?= $speaker['state_name'] ?>",
                                                                                                    "<?= sprintf("%03d", $speaker['div_no']) ?>"
                                                                                                ],
                                                                                                time: ["<?= $speaker['party'] ?>",
                                                                                                    "00:60:00",
                                                                                                    atime_<?= $speaker['div_no'] ?>
                                                                                                ]
                                                                                            }));
                                                                                            //socket.send(JSON.stringify({ action: "time", spk:["AMIT SHAH", "BJP", "UTTAR PRADESH","003"], time: ["60:00", "10:00"] }));

                                                                                        }
                                                                                    </script>
                                                                                </small>
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="pauseSpeaking();">
                                                                                        <i class="fas fa-pause"></i>
                                                                                    </button>
                                                                                </small>

                                                                                <span class="text"><?= $speaker['name_en'] ?></span>
                                                                                <script>
                                                                                    function extraTime() {
                                                                                        alert("Extra Time");
                                                                                    }
                                                                                </script>
                                                                                <!-- General tools such as edit or delete-->
                                                                                <div class="tools">
                                                                                    <!-- <i class="fas fa-edit"></i> <i class="fas fa-trash-o"></i> -->
                                                                                </div>
                                                                            </li>
                                                                <?php endif;
                                                                    }
                                                                }
                                                                ?>

                                                            </ul>
                                                        <?php endif; ?>
                                                        <?php if ($contact['agenda_type'] == 'discussion'): ?>
                                                            <ul class="todo-list" data-widget="todo-list">
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
                                                                        if ($speaker): ?>

                                                                            <li class="border mb-3">
                                                                                <!-- drag handle -->
                                                                                <span class="handle">
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                                </span>
                                                                                <!-- checkbox -->
                                                                                <span class="text">
                                                                                    <div class="icheck-primary d-inline ml-2">
                                                                                        <input type="checkbox" value=""
                                                                                            class="form-control form-control-sm"
                                                                                            name="todo<?= $speaker['div_no'] ?>"
                                                                                            id="todoCheck<?= $speaker['div_no'] ?>">
                                                                                        <label
                                                                                            for="todoCheck<?= $speaker['div_no'] ?>"></label>
                                                                                    </div>
                                                                                </span>
                                                                                <!-- todo text -->
                                                                                <span
                                                                                    class="text"><?= sprintf("%03d", $speaker['div_no']) ?></span>
                                                                                <span class="text">
                                                                                    <input type="text"
                                                                                        name="nt_<?= $speaker['div_no'] ?>"
                                                                                        id="nt_<?= $speaker['div_no'] ?>"
                                                                                        class="form-control form-control-sm"
                                                                                        style="width: 50%;" placeholder="--:--">
                                                                                </span>
                                                                                <span
                                                                                    class="text text-danger"><?= $speaker['group_name'] ?></span>
                                                                                <!-- <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small> -->
                                                                                <!-- Emphasis label -->
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="startSpeaking_<?= $speaker['div_no'] ?>();">
                                                                                        <i class="fas fa-play"></i>
                                                                                    </button>

                                                                                    <script>
                                                                                        function startSpeaking_<?= $speaker['div_no'] ?>() {
                                                                                            const atime_<?= $speaker['div_no'] ?> = document
                                                                                                .getElementById(
                                                                                                    "nt_<?= $speaker['div_no'] ?>").value;
                                                                                            socket.send(JSON.stringify({
                                                                                                action: "time",
                                                                                                spk: ["<?= $speaker['name_en'] ?>",
                                                                                                    "<?= $speaker['name_hi'] ?>",
                                                                                                    "<?= $speaker['full_party_name'] ?>",
                                                                                                    "<?= $speaker['state_name'] ?>",
                                                                                                    "<?= sprintf("%03d", $speaker['div_no']) ?>"
                                                                                                ],
                                                                                                time: ["<?= $speaker['party'] ?>",
                                                                                                    "00:60:00",
                                                                                                    atime_<?= $speaker['div_no'] ?>
                                                                                                ]
                                                                                            }));
                                                                                            //socket.send(JSON.stringify({ action: "time", spk:["AMIT SHAH", "BJP", "UTTAR PRADESH","003"], time: ["60:00", "10:00"] }));

                                                                                        }
                                                                                    </script>
                                                                                </small>
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="pauseSpeaking();">
                                                                                        <i class="fas fa-pause"></i>
                                                                                    </button>
                                                                                </small>
                                                                                <small class="badge">
                                                                                    <button class="border-light h3"
                                                                                        onclick="extraTime();">
                                                                                        <i class="fas fa-clock"></i>
                                                                                    </button>
                                                                                </small>
                                                                                <span class="text"><?= $speaker['name_en'] ?></span>
                                                                                <script>
                                                                                    function extraTime() {
                                                                                        alert("Extra Time");
                                                                                    }
                                                                                </script>
                                                                                <!-- General tools such as edit or delete-->
                                                                                <div class="tools">
                                                                                    <!-- <i class="fas fa-edit"></i> <i class="fas fa-trash-o"></i> -->
                                                                                </div>
                                                                            </li>
                                                                <?php endif;
                                                                    }
                                                                }
                                                                ?>

                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer clearfix">

                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                                <div class="card d-none">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Log Manager</h3>
                                                    </div>
                                                    <div class="card-body table-responsive pad">


                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive active">
                                                                <input type="radio" name="options" id="option_b1"
                                                                    autocomplete="off" checked=""> Time Allotment Log
                                                            </label>
                                                            <label class="btn bg-olive">
                                                                <input type="radio" name="options" id="option_b2"
                                                                    autocomplete="off">
                                                                Speaker List Log
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->

                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
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
    <script>
        $(document).ready(function() {
            var socket = new WebSocket('ws://localhost:8080');
            var messenger = document.getElementById('messenger');
            const input = document.getElementById('message');
            //var Footermessage = JSON.stringify({ action: "message", data: input.value });
            //alert( "ready!" );
            // sending msg
            $("#sendMessage").on("click", function() {
                messenger.innerHTML = '<div class="direct-chat-msg"><div class="direct-chat-text">' +
                    document.getElementById('message').value + '</div></div>';
                socket.send(JSON.stringify({
                    action: "message",
                    data: input.value
                }));
                input.value = '';
            });

            $("#speaker").on("click", function() {
                //alert( "ready!" );
                socket.send(JSON.stringify({
                    action: "time",
                    spk: ["AMIT SHAH", "BJP", "UTTAR PRADESH", "003"],
                    time: ["60:00", "10:00"]
                }));
            });

            /*
                fetch('http://localhost:3500/json.php')
                  .then( async (response) => {

                    // get json response here
                    let data = await response.json();
                    
                    if(data.status === 200){
                     // Process data here
                     alert(data);
                    }else{
                     // Rest of status codes (400,500,303), can be handled here appropriately
                    }

                  })
                  .catch((err) => {
                      console.log(err);
                  })
              */
        });
    </script>
    <script>
        var socket = new WebSocket('ws://localhost:8080');

        function startSpeaking() {
            alert('Starting Speaking');
            socket.send(JSON.stringify({
                action: "time",
                spk: ["AMIT SHAH", "BJP", "UTTAR PRADESH", "003"],
                time: ["60:00", "10:00"]
            }));
        }

        function pauseSpeaking() {
            alert('Pausing Speaking');
            socket.send(JSON.stringify({
                action: "time",
                spk: ["AMIT SHAH", "BJP", "UTTAR PRADESH", "003"],
                time: ["60:00", "10:00"]
            }));
        }

        function stopSpeaking() {
            alert('Stopping Speaking');
            socket.send(JSON.stringify({
                action: "time",
                spk: ["AMIT SHAH", "BJP", "UTTAR PRADESH", "003"],
                time: ["60:00", "10:00"]
            }));
        }
    </script>


    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->

    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

</body>

</html>