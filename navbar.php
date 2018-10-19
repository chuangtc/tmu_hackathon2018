<?php
    $htype="http";
    if( isset($_SERVER['HTTPS'] ) ) {     
        $htype="https";
    }
?>        
<!-- Begin of navbar-fixed -->
<nav class="navbar-expand-lg  navbar-light bg-light" >
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
          ICU-app <span class="sr-only">(current)</span></a>
      </li>

      


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="icuweb.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ICU-web
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="icuweb.php?ts=0800">Timestamp:0800</a>
          <a class="dropdown-item" href="icuweb.php?ts=0810">Timestamp:0810</a>
          <a class="dropdown-item" href="icuweb.php?ts=0820">Timestamp:0820</a>
          <a class="dropdown-item" href="icuweb.php?ts=0830">Timestamp:0830</a>
          <a class="dropdown-item" href="icuweb.php?ts=0840">Timestamp:0840</a>
          <a class="dropdown-item" href="icuweb.php?ts=0850">Timestamp:0850</a>
          <a class="dropdown-item" href="icuweb.php?ts=0900">Timestamp:0900</a>
          <a class="dropdown-item" href="icuweb.php?ts=0910">Timestamp:0910</a>
          <a class="dropdown-item" href="icuweb.php?ts=0920">Timestamp:0920</a>
          <a class="dropdown-item" href="icuweb.php?ts=0930">Timestamp:0930</a>
          <a class="dropdown-item" href="icuweb.php?ts=0940">Timestamp:0940</a>
          <a class="dropdown-item" href="icuweb.php?ts=0950">Timestamp:0950</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Final</a>

        </div>
      </li>
      
      

      <!--li class="nav-item">
        <a class="nav-link disabled" href="#">Pricing</a>
      </li-->

    </ul>
  </div>
</nav>


