<?php 
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// Read the JSON file
$json_att = file_get_contents('attendance-data.json');
$a='';
$b='';
$c='';
$d='';
$e='';
$f='';
$g='';
$h='';
$object = json_decode($json_att, true);
//print_r($object['data']);
//print_r($object['ip']);
// $conn = new mysqli("localhost", "root", "root", "rajyasabha"); 
// $stmt = $conn->prepare("INSERT INTO delegates (id, div_no, name_en, name_hi, pics, ip, party, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
// $stmt->bind_param($a, $b, $c, $d, $e, $f, $g, $h);

//echo "INSERT INTO `delegates` (`id`, `div_no`, `name_en`, `name_hi`, `pics`, `ip`, `party`) VALUES ";
foreach($object as $data){
    $a =NULL;
    $b = $data['seat_no'];
    $c = $data['name_english'];
    $d = $data['name_hindi'];
    $e = $data['seat_no'];
    $f = sprintf('%03u', $data['seat_no']);
    $g = $data['party'];
    $h = '0000-00-00 00:00:00'; //date('Y-m-d H:i:s');
    // $stmt->execute();
        // echo $data['seat_no'].'<br>';
        // echo $data['name_english'].'<br>';        
        // echo $data['name_hindi'].'<br>';
        // echo $data['party'].'<br>';
    //print_r($datas);      
    //echo "(NULL, '" . $data['seat_no'] . "', '" . $data['name_english'] . "', '" . $data['name_hindi'] . "', '" . $data['seat_no'] . "', '" . $data['seat_no'] . "', '" . $data['party'] . "', ''),<BR>"; 
    echo "(".$data['seat_no'].",'".$data['seat_no']."','".$data['name_english']."','".$data['name_hindi']."','".$f.".png','".$data['seat_no']."','".$data['party']."'),<br>";
    
}
//print_r($att);
// $stmt->close();
// $conn->close();
foreach($datas as $data){
    //echo $data['seat_no'].'<br>';
    // echo $data['name_english'].'<br>';        
    // echo $data['name_hindi'].'<br>';
    // echo $data['party'].'<br>';
    // echo $data['ip_address'].'<br>';
    // echo $data['name_english'];
    // echo $data['ip_address'];
    // print_r ($data);
    // 'name_english' => $data['name_english'],
    // 'name_hindi' => $data['name_hindi'],
    // 'seat_no' => $data['seat_no'],
    // 'party' => $data['party'],
    // 'ip_address' => $data['ip_address']
    // ));
    // $att['name_english'] = $data['name_english'];
    // $att['name_hindi'] = $data['name_hindi'];
    // $att['seat_no'] = $data['seat_no'];
    // $att['party'] = $data['party'];
    // $att['ip_address'] = $data['ip_address'];
    //print_r($data);
     //echo $data['name_english'];
    // echo $data['name_hindi'];
    // echo $data['seat_no'];
    // echo $data['party'];
    // echo $data['ip_address'];
    // echo '<br>';
}  
//print_r($json_data_ip);
//print_r($json_data_att);
//echo "<pre>";

// Display data
//print_r($json_data_ip);
//print_r($json_data_att);

//echo "</pre>";

?>