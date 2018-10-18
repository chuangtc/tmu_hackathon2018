<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>TMU x MIT hackathon 2018 team13 ICU</title>
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
    ICU-web，timestamp:2018-10-21 T
    <?php
      echo ' ' . htmlspecialchars($_GET["ts"]) ;
    ?>


    </div>	<!-- End of Wrap all page content -->
	
    
    
  <?php
      include_once("footer.php");
  ?>  
  </body>
</html>     