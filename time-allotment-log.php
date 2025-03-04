<?php //include 'debug.php'; 
?>
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
    <?php
    $pdo = pdo_connect_mysql();
    $stmt = $pdo->prepare('SELECT * FROM party_groups ORDER BY strength DESC');
    $stmt->execute();
    // Fetch the records so we can display them in our template.
    $groups = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
    $num_groups = $pdo->query('SELECT COUNT(*) FROM party_groups')->fetchColumn();
    ?>
    <div class="container" style="width: 900px;">
        <?php
        if (isset($_GET['agenda_id'])) {
            $speaker_list;
            $pdo = pdo_connect_mysql();
            $stmt = $pdo->prepare('SELECT * FROM agenda WHERE agenda_id = ? ORDER BY agenda_id DESC LIMIT 1');
            //$stmt = $pdo->query("SELECT * FROM agenda WHERE agenda_status = 'open' ORDER BY agenda_id DESC LIMIT 1");
            $stmt->execute([$_GET['agenda_id']]);
            $agenda = $stmt->fetch(PDO::FETCH_ASSOC);
            $speaker_list = explode(',', $agenda['speaker_list']);
            $agenda_time;
            if (!$agenda) {
                die('Agenda doesn\'t exist with that ID!');
            } else {
                //echo " Agenda Found";
                $agenda_time = $agenda['agenda_time'];
                echo '<h2 class="text-center mb-3 mt-5">' . $agenda['agenda_title'] . '</h2>';
                echo '<h3 class="text-center mb-1">LIST OF SPEAKERS</h3>';
                echo '<strong class="text-center mb-5 d-block">(' . date("d-m-Y", strtotime($agenda['agenda_date'])) . ')</strong>';
                echo '<p class="text-bold d-inline float-left">' . date("d-m-Y", strtotime($agenda['agenda_date'])) . '</p>';
                echo '<p class="text-bold d-inline float-right">' . sprintf('%02d:%02d', ($agenda['agenda_time'] / 60 % 60), $agenda['agenda_time'] % 60) . ' Hrs</p>';
            }
        } else {
            die('No ID specified!');
        }
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" class="text-center">TIME ALLOTTED</th>
                    <th scope="col" class="text-center">TIME TAKEN</th>
                    <th scope="col" class="text-center">OVER TIME</th>
                    <th scope="col" class="text-center">TIME LEFT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td class="text-center text-bold">Hrs. Mts.</td>
                    <td class="text-center text-bold">Hrs. Mts.</td>
                    <td class="text-center text-bold">Hrs. Mts.</td>
                    <td class="text-center text-bold">Hrs. Mts.</td>
                </tr>
                <tr>
                    <th scope="row" style="width: 150px;">Minister's Time</th>
                    <td class="text-center">0-30</td>
                    <td class="text-center">0-00</td>
                    <td class="text-center">0-00</td>
                    <td class="text-center">0-00</td>
                </tr><?php echo $total_strength = array_sum(array_column($groups, 'strength')); ?>
                <?php foreach ($groups as $group): ?>
                    <tr>
                        <?php $party_time = round($group['strength'] * $agenda_time / $total_strength); ?>
                        <th scope="row"><?= $group['group_name']; ?></th>
                        <td class="text-center">
                            <?php echo sprintf('%02d-%02d', ($party_time / 60 % 60), $party_time % 60); ?></td>
                        <td class="text-center">0-00</td>
                        <td class="text-center"></td>
                        <td class="text-center">0-00</td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th scope="row" style="border-top:1px solid #111; border-bottom:1px solid #111;">TOTAL</th>
                    <td class="text-center" style="border-top:1px solid #111; border-bottom:1px solid #111;">
                        0-00</td>
                    <td class="text-center" style="border-top:1px solid #111; border-bottom:1px solid #111;">
                        0-00
                    </td>
                    <td class="text-center" style="border-top:1px solid #111; border-bottom:1px solid #111;">
                        0-00
                    </td>
                    <td class="text-center" style="border-top:1px solid #111; border-bottom:1px solid #111;">0-00
                    </td>
                </tr>
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