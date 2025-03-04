<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Allotment Log</title>
    <script type="text/javascript" src="plugins/jquery/jquery.slim.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="dist/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php include 'connection.php'; ?>

    <div class="container mb-5" style="width: 900px;">
        <?php
        if (isset($_GET['agenda_id'])) {
            $speaker_list;
            $pdo = pdo_connect_mysql();
            $stmt = $pdo->prepare('SELECT * FROM agenda WHERE agenda_id = ? ORDER BY agenda_id DESC LIMIT 1');
            //$stmt = $pdo->query("SELECT * FROM agenda WHERE agenda_status = 'open' ORDER BY agenda_id DESC LIMIT 1");
            $stmt->execute([$_GET['agenda_id']]);
            $agenda = $stmt->fetch(PDO::FETCH_ASSOC);
            $speaker_list = explode(',', $agenda['speaker_list']);
            if (!$agenda) {
                die('Agenda doesn\'t exist with that ID!');
            } else {
                //echo " Agenda Found";
                echo '<h2 class="text-center mb-3 mt-5">' . $agenda['agenda_title'] . '</h2>';
                echo '<h3 class="text-center mb-1">LIST OF SPEAKERS</h3>';
                echo '<strong class="text-center mb-5 d-block">(' . date("d-m-Y", strtotime($agenda['agenda_date'])) . ')</strong>';
            }
        } else {
            die('No ID specified!');
        }
        ?>

        <table class="table mb-5">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col" class="text-left">SPEAKER'S NAME</th>
                    <th scope="col" class="text-left">STATE</th>
                    <th scope="col" class="text-left">-</th>
                    <th scope="col" class="text-left">PARTY</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $s = 0;
                foreach ($speaker_list as $speaker) :
                    $s + 1;
                    $s++;
                    $stmt = $pdo->prepare('SELECT * FROM delegates WHERE id = ?');
                    $stmt->execute([$speaker]);
                    $speaker = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($speaker): ?>

                        <tr>
                            <th scope="row"><?= $s; ?></th>
                            <td class="text-left text-bold"><?= $speaker['name_hi']; ?> <br> <?= $speaker['name_en']; ?> </td>
                            <td class="text-left text-bold"><?= $speaker['state_name']; ?></td>
                            <td class="text-left">-</td>


                            <td class="text-left text-bold">
                                <?php if ($speaker['group_name'] != $speaker['party']) {
                                    echo strtoupper($speaker['group_name']) . ' [' . $speaker['party'] . ']';
                                } else {
                                    echo $speaker['party'];
                                } ?>
                            </td>
                        </tr>
                <?php endif;
                endforeach; ?>


            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
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
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>