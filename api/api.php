<?php

$data = array(
    'alert' => 0
);

$data2 = array(
    'alert' => 1
);


$jsonData = json_encode($data, JSON_PRETTY_PRINT);


//if (isset($_GET['k']) && $_GET['k'] == 1){
//  $jsonData = json_encode($data2, JSON_PRETTY_PRINT);
//}  

require_once('../mysql_config.php');


$alert_diagram_length=10;  

// Connects to your Database
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
/* check connection */
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
$conn->set_charset("utf8");

$sql = "SELECT (CURRENT_TIMESTAMP() - max(cre_timestamp) ) as magic_num FROM tmu_hack2018.log_tbl  WHERE sim_ts='0300'";

$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$magic_num = $row['magic_num'];
//echo ' '.$magic_num;

// Close the connection
mysqli_close ($conn);    

//$is_alert = rand(-10,3);
$is_alert=0;
$allowed_warning_sec = 60;
if($magic_num <$allowed_warning_sec){
  $is_alert=1;
}

if ($is_alert>0){
  $jsonData = json_encode($data2, JSON_PRETTY_PRINT);  
}


//echo "<h1>Original</h1>";
echo $jsonData;

?>