<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>TMU x MIT hackathon 2018 team13 Data Analysis</title>
        <meta name="description" content=" ">
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="manifest" href="site.webmanifest">
        <!--link rel="apple-touch-icon" href="/static/favicon.png">
        <link rel="shortcut icon" href="/static/favicon.ico"-->


    </head>

    <body>
    <!-- Wrap all page content here -->
	<div id="wrap">
  
    <?php
      include_once("navbar.php");
    ?>
    <div id="container">
      <div id="row">
        <h3>MIMIC-III dataset statistics</h3>    
      </div>
      
      <div id="row">
         Statistics<br/>
         <img src="img/mimic3_icu_stats.jpg" alt="mimic3_icu_stats.jpg"/>
      </div>
      <div id="row">
         Histogram<br/>
         <img src="img/mimic3_icu_hist.png" alt="mimic3_icu_hist.png"/>
        
      </div>
    </div>
  </div>	<!-- End of Wrap all page content -->
	
    
    
  <?php
      include_once("footer.php");
  ?>  
  </body>
</html>     