<?php

$data = array(
    'alert' => 0
);

$data2 = array(
    'alert' => 1
);


$jsonData = json_encode($data, JSON_PRETTY_PRINT);


if (isset($_GET['k']) && $_GET['k'] == 1){
  $jsonData = json_encode($data2, JSON_PRETTY_PRINT);
}  

//echo "<h1>Original</h1>";
echo $jsonData;

?>