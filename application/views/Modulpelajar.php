<!DOCTYPE html>
<html>
<head>
	<title>Modul</title>
</head>
<body>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Modul.css">
</head>
<body>
  	<div class="menu">
  		<img style="max-height:25px;max-width: 25px; " src="<?= base_url() ?>assets/gambar/logo.png">
  		<b>EXPERT COURSE</b>
  		<ul style="margin-left:500px;">
  			<li><b>Modul</b></li>
  			<li><b>Tata Tertib</b></li>
  			<li><b>Profile</b></li>
  			<li><b>Logout</b></li>
  		</ul>
	</div>
  <div class="atas">
	 <center><h6 style="color: #ddd; padding-top: 50px;">____________________________________________________________________________________________________________________</h6></center>
   <h4 style="color: #333;;font-family: 'Roboto', sans-serif; padding-left: 110px;"><b>Fakultas Teknik</b></h4>
   <h4 style="color: #ddd; padding-left: 110px; margin-top: -20px;"><b>-----------------------</b></h4>
  </div>
  
  <div class="materi">
    <div class="row">
      <?php 
      foreach ($matkul['pelajar']->result_array() as $matkul_pelajar){
      ?>
      <?php if ($matkul_pelajar['Fakultas'] == 'Teknik'): ?>
      <div class="col-sm-3">
    <div class="buku">
      <center><i style="font-size: 24px; margin-top: 10px;" class='fas fa-book'></i></center>
      <div>
        <h6 style="margin-top: 10px; color: #333"><b><?php echo $matkul_pelajar['nama_matkul'] ?></b></h6>
        <p style="color: #777"><?php echo $matkul_pelajar['jml_modul'] ?> Modul</p>
      </div>
    </div>
  </div>
  <?php endif ?>
  <?php
      }
    ?>
 
    </div>
  </div>
  <div class="atas">
   <h4 style="color: #333;;font-family: 'Roboto', sans-serif; padding-left: 110px;"><b>Fakultas Ekonomi</b></h4>
   <h4 style="color: #ddd; padding-left: 110px; margin-top: -20px;"><b>-----------------------</b></h4>
  </div>
  
  <div class="materi">
    <div class="row">
      <?php 
      foreach ($matkul['pelajar']->result_array() as $matkul_pelajar){
      ?>
      <?php if ($matkul_pelajar['Fakultas'] == 'Ekonomi'): ?>
      <div class="col-sm-3">
    <div class="buku">
      <center><i style="font-size: 24px; margin-top: 10px;" class='fas fa-book'></i></center>
      <div>
        <h6 style="margin-top: 10px; color: #333"><b><?php echo $matkul_pelajar['nama_matkul'] ?></b></h6>
        <p style="color: #777"><?php echo $matkul_pelajar['jml_modul'] ?> Modul</p>
      </div>
    </div>
  </div>
  <?php endif ?>
  <?php
      }
    ?>
 
    </div>
  </div>

  <div class="bottom">
    <p>Experts Course 2019</p>
    <p style="margin-left: 880px;">Follow Us:</p>
    <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/facebook.png" style="width: 20px;height: 20px;">
    <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/instagram.png" style="width: 20px;height: 20px;margin-right: 5px;">
    <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/youtube.png" style="width: 20px;height: 20px;">
  </div>

  
	
	


</body>
</html>