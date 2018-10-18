<?php

$data = array(
    'foo' => array(
        'bar',
        'baz'
    )
);

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

//echo "<h1>Original</h1>";
echo $jsonData;

?>