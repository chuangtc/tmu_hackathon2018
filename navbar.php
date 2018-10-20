<?php
    $htype="http";
    if( isset($_SERVER['HTTPS'] ) ) {     
        $htype="https";
    }
?>        
<!-- Begin of navbar-fixed -->
<nav class="align-middle text-monospace navbar-expand-lg navbar-light  height:500px" style="background-color: #F5F5F5;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://chuangtc.com" >JasonChuang</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php">
          Introduction <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_analysis.php">
          DataAnalysis <span class="sr-only">(current)</span></a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="icuapp.php">
          ICU-App <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="icuweb.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ICU-Monitoring
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="icuweb.php?ts=0200">Timestamp:0200</a>
          <a class="dropdown-item" href="icuweb.php?ts=0210">Timestamp:0210</a>
          <a class="dropdown-item" href="icuweb.php?ts=0220">Timestamp:0220</a>
          <a class="dropdown-item" href="icuweb.php?ts=0230">Timestamp:0230</a>
          <a class="dropdown-item" href="icuweb.php?ts=0240">Timestamp:0240</a>
          <a class="dropdown-item" href="icuweb.php?ts=0250">Timestamp:0250</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="icuweb.php?ts=0300">Alerting:0300</a>

        </div>
      </li>
      
      

      <!--li class="nav-item">
        <a class="nav-link disabled" href="#">Pricing</a>
      </li-->

    </ul>
  </div>
</nav>


