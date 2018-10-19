<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>TMU x MIT hackathon 2018 team13 ICU monitoring and alert system</title>
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
      
      <div class="container">
      
        <div class="row">
          <div class="col-md-12">
            ICU-monitoring: 2018-10-21 Sunday
            <?php
              echo ' ' . htmlspecialchars($_GET["ts"]) ;
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="img/ICU_scene2.jpg" style="width:100%" alt="ICU_scene" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            Patient1:<><br/>
            
          </div>
          <div class="col-md-2">
            Patient2:Bob<br/>
            Score:2            
          </div>
          <div class="col-md-2">
            Patient3:Carl<br/>
            Score:1            
          </div>
          <div class="col-md-2">
            Patient4:David<br/>  
            Score:0            
          </div>
          <div class="col-md-2">
            Patient5:<><br/>
              
          </div>
          <div class="col-md-2">
            Patient6:Frank<br/>
            Score:1  
          </div>
          
        </div>
        


      </div>

    
    </div>	<!-- End of Wrap all page content -->
	
    
    
  <?php
      include_once("footer.php");
  ?>  
  </body>
</html>     