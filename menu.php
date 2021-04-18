<div class="row">
	<div class="col-md-12">
         <!--awal menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Yudandan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php?hal=beranda">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php?hal=tentangkami">Tentang Kami</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?hal=datapegawai">Data Pegawai</a>
          <a class="dropdown-item" href="#">action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Tentang Kami</a>
        </div>
      </li>
      <?php
      $member = $_SESSION['MEMBER'];
      if(!isset($member)){
      ?>      
      <li class="nav-item">
      <a class="nav-link" href="index.php?hal=formlogin">Login</a>
    </li>
    <?php
      }else{
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?=$member['fullname'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?hal=datauser">user</a>
          <a class="dropdown-item" href="#">profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logut.php">Logout</a>
        </div>
      </li>
      <?php 
      }
    ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	</div>
</div>
          <!---akhir menu-->
    </div>
</div>
