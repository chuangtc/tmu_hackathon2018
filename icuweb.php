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
      
      <div class="container text-monospace  mx-auto">
      
        <div class="row mx-auto">
          <div class="h4 mb-5 mt-5 text-monospace" style="color: gray; transform: scale(.9, 1)">
            ICU-Monitoring: 2018-10-21 Sunday
            <?php
              echo ' ' . htmlspecialchars($_GET["ts"]) ;
            ?>
          </div>
        </div>

          <div class="mb-4 card-deck">
            <div class="col">
              <div class="card bg-light w-40 border-danger" style="border-width:3px">
                <div class="card-header text-danger">ICU 1</div>
                <div class="card-body">
                  <p class="card-title text-danger">Score: 7</p>
                  <p>II
                  <img src="img/EKG" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">172</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">98</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">168</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 2</div>
                <div class="card-body">
                  <p class="card-title">Score: 2</p>
                  <p>II
                  <img src="img/EKG" style="width:100%" alt="ICU_scene" /></p>
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

            <div class="col">
              <div class="card  bg-light w-40 card border-success">
                <div class="card-header">ICU 3</div>
                <div class="card-body">
                  <p class="card-title">Score: 1</p>
                  <p>II
                  <img src="img/EKG" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">164</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">90</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">168</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-4 card-deck mb-15">
            <div class="col">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 4</div>
                <div class="card-body">
                  <p class="card-title">Score: 2</p>
                  <p>II
                  <img src="img/EKG" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">172</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">98</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">168</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

          
            <div class="col">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 5</div>
                <div class="card-body">
                  <p class="card-title">Score: 7</p>
                  <p>II
                  <img src="img/EKG" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">172</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">98</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">168</p></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="card-text mt-2">NO ARRHYTHMIA.</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card bg-light w-40 card border-success">
                <div class="card-header">ICU 6</div>
                <div class="card-body">
                  <p class="card-title">Score: 7</p>
                  <p>II
                  <img src="img/EKG" style="width:100%" alt="ICU_scene" /></p>
                  <table class="table  mt-2 mb-0">
                    <tbody>
                      <tr>
                        <td><p class="mb-0 text-success">HR</p></td>
                        <td><p class="mb-0 text-success">172</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-info">SpO2</p></td>
                        <td><p class="mb-0 text-info">98</p></td>
                      </tr>
                      <tr>
                        <td><p class="mb-0 text-danger">RR</p></td>
                        <td><p class="mb-0 text-danger">168</p></td>
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