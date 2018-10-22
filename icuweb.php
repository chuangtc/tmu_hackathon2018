<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>TMU x MIT hackathon 2018 team13 ICU monitoring and alert system</title>
        <meta name="description" content=" ">
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
$wait_sec=2;
$next_ts='0300';
$auto_refresh=0;
if (htmlspecialchars($_GET["ts"]=='0200')){
    $next_ts='0210';
    $auto_refresh=1;
}
elseif (htmlspecialchars($_GET["ts"]=='0210')){
    $next_ts='0220';
    $auto_refresh=1;
}
elseif (htmlspecialchars($_GET["ts"]=='0220')){
    $next_ts='0230';
    $auto_refresh=1;
}
elseif (htmlspecialchars($_GET["ts"]=='0230')){
    $next_ts='0240';
    $auto_refresh=1;
}
elseif (htmlspecialchars($_GET["ts"]=='0240')){
    $next_ts='0250';
    $auto_refresh=1;
}
elseif (htmlspecialchars($_GET["ts"]=='0250')){
    $next_ts='0300';
    $auto_refresh=1;
}
if($auto_refresh==1){
  $stmp='<meta http-equiv="refresh" content="';
  $stmp.= $wait_sec;
  $stmp.= '; URL=icuweb.php?ts=';
  $stmp.=$next_ts;
  $stmp.='" />';
  
  echo $stmp;
  
}
  
  
?>

        
        <link rel="manifest" href="site.webmanifest">
        <!--link rel="apple-touch-icon" href="/static/favicon.png">
        <link rel="shortcut icon" href="/static/favicon.ico"-->
    </head>
    <style>
    </style>
    <body class="bg-light" style="font-family: Futura,Trebuchet MS,Arial,sans-serif;">
    <!-- Wrap all page content here -->

	  <div id="wrap">
      <?php
        include_once("navbar.php");
      ?>
      
      <div class="container ">
      
        <?php

require_once('mysql_config.php');


$alert_diagram_length=10;  

// Connects to your Database
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
/* check connection */
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
$conn->set_charset("utf8");
$query = "INSERT INTO tmu_hack2018.log_tbl (sim_ts) VALUES('";
$query = $query . htmlspecialchars($_GET["ts"]);
$query = $query . "');";
//echo ' ' . $query ;
// Attempt insert query execution
if(mysqli_query($conn, $query)){
    //echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $query. " . mysqli_error($conn);
}

// Close the connection
mysqli_close ($conn);        
?>
      
        <div class="row">
          <div class="h4 mb-5 mt-5 text-monospace" style="color: gray; transform: scale(.9, 1)">
            ICU-Monitoring: 2018-10-21 Sunday
            <?php
              echo ' ' . htmlspecialchars($_GET["ts"]) ;
              
              if(htmlspecialchars($_GET["ts"])=='0300'){                
                echo '<br/>UI design: Juien Lo 羅瑞恩,#visits:';
                
                require_once('mysql_config.php');
                // Connects to your Database
                $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
                /* check connection */
                if ($conn->connect_errno) {
                    printf("Connect failed: %s\n", $conn->connect_error);
                    exit();
                }

                $sql = "SELECT count(*) as visit_cnt FROM tmu_hack2018.log_tbl WHERE sim_ts='0300'";

                $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                $visit_cnt = $row['visit_cnt'];
                echo $visit_cnt;
                
              }
            ?>
          </div>
        </div>
        <div class="row">
          
            <?php
              if(htmlspecialchars($_GET["ts"])=='0300'){
                echo '<div class="col-md-4 col-xs-6 card bg-light w-40 border-danger" style="border-width:3px">';
                echo '<div >';

                echo '<div class="card-header text-danger">ICU 1</div>';
              }
              else{
                
                echo '<div class="col-md-4 col-xs-6 card bg-light">';
                echo '<div class="card bg-light w-40 card border-success">';
                echo '<div class="card-header">ICU 1</div>';
              }
            ?>          
            
                <div class="card-body">
                  <?php
                    //echo '->'.rand(10,100);
                    if(htmlspecialchars($_GET["ts"])=='0300'){
                      echo '<p class="card-title text-danger">Score: 9</p>';
                    }
                    else{
                      echo '<p class="card-title">Score: 1</p>';
                    }
                  ?>                  
                  
                  <p>II
                  <img src="img/EKG.png" style="width:100%" alt="ECG_chart" /></p>
                  <table class="table mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">
                        <?php
                          if(htmlspecialchars($_GET["ts"])=='0300'){
                            echo '40';
                          }
                          else{
                            echo ''.rand(51,90);
                          }
                        ?>
                        </p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">
                        <?php
                          if(htmlspecialchars($_GET["ts"])=='0300'){
                            echo '83';
                          }
                          else{
                            echo ''.rand(88,92);
                          }
                        ?>
                        </p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">
                        <?php
                          if(htmlspecialchars($_GET["ts"])=='0300'){
                            echo '7';
                          }
                          else{
                            echo ''.rand(12,20);
                          }
                        ?>
                        </p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-xs-6 card bg-light">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 2</div>
                <div class="card-body">
                  <p class="card-title">Score: <?php echo ''.rand(0,2) ?></p>
                  <p>II
                  <img src="img/EKG.png" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success"><?php echo ''.rand(51,90) ?></p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info"><?php echo ''.rand(88,92) ?></p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger"><?php echo ''.rand(12,20) ?></p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 col-xs-6 card bg-light">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 3</div>
                <div class="card-body">
                  <p class="card-title">Score: <?php echo ''.rand(0,2) ?></p>
                  <p>II
                  <img src="img/EKG.png" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success"><?php echo ''.rand(51,90) ?></p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info"><?php echo ''.rand(88,92) ?></p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger"><?php echo ''.rand(12,20) ?></p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-xs-6 card bg-light">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 4</div>
                <div class="card-body">
                  <p class="card-title">Score: 1</p>
                  <p>II
                  <img src="img/EKG.png" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">190</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">92</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">188</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>
          

          <div class="col-md-4 col-xs-6 card bg-light">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 5</div>
                <div class="card-body">
                  <p class="card-title">Score: 1</p>
                  <p>II
                  <img src="img/EKG.png" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">190</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">92</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">188</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

          
            <div class="col-md-4 col-xs-6 card bg-light">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 6</div>
                <div class="card-body">
                  <p class="card-title">Score: 1</p>
                  <p>II
                  <img src="img/EKG.png" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">190</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">92</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">188</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>	<!-- End of Wrap all page content -->
  <?php
      include_once("footer.php");
  ?>
  </body>
</html>     