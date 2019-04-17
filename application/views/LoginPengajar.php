<!DOCTYPE html>
<html>
<head>
	<title>LoginMahasiswa</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/LoginMahasiswa.css">
</head>
<body>
	<div class="menu">
  		<img style="max-height:25px;max-width: 25px; " src="<?= base_url() ?>assets/gambar/logo.png">
  		<b>EXPERT COURSE</b>
  		<ul>
  			<li><b><a style="text-decoration: none; color: #696969" href="<?= base_url() ?>index.php/Home/paket">Paket Belajar</a></b></li>
        <li><b>Pendaftaran</b></li>
        <li><b>Hubungi</b></li>
        <li><b>Karir</b></li>
        <li><b>Blog</b></li>
        <li><button style="margin-right: 20px;" type="button" class="btn btn-danger"><i class='fas fa-user' style="margin-right: 2px;"></i><a style="text-decoration: none; color: white;" href="<?= base_url() ?>index.php/Home/login">Login</button></li>
        <li><button type="button" class="btn btn-danger"><a style="text-decoration: none; color: white;" href="<?= base_url() ?>index.php/Home/daftar">Daftar</button></li></a>
  		</ul>
	</div>
  <div class="badan">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <center>
          <div class="form">
            <h4 style="margin-bottom: 20px;"><b>Login <span class="maroon">Expert Squad</span></b></h4>
           <button style=" font-size: 14px; width: 180px; height: 35px; border-bottom: 3px solid #adadad; border-radius: 3px;" type="button" class="btn btn-secondary"><a style="text-decoration: none;color: white" href="<?= base_url() ?>index.php/Home/login">Mahasiswa</a></button><button style="font-size: 14px; width: 180px;height: 35px; border-bottom: 3px solid #be2a2a; border-radius: 3px;" type="button" class="btn btn-danger"><i class='fas fa-user-md' style="margin-right: 5px;"></i>Pengajar</button>
            <form method="post" style="margin-top: 40px;" action="<?= base_url() ?>index.php/Login/proses_login_pengajar">
              <center>
                <div class="input-ctr" >
                <input style="height: 35px; width: 360px;" type="text" name="username" class="form-control" placeholder="Username">
                <i class="fas fa-user fa-3x"></i>
              </div>
                <div class="input-ctr" >
                <input style="height: 35px; width: 360px;" type="text" name="password" class="form-control" placeholder="Password">
                <i class="fas fa-key fa-3x"></i>
              </div>
              </center>
              <button style="width: 360px; height: 45px; border-bottom: 3px solid #be2a2a" type="submit" class="btn btn-danger"><i class="fa fa-sign-in-alt"style="margin-right: 2px;" ></i>Login</button>
          </form>
          <p>Belum punya akun ? <button style="border-bottom: 3px solid #adadad; height: 35px;" type="button" class="btn btn-secondary"><a style="text-decoration: none; color: white;" href="<?= base_url() ?>index.php/Home/daftarpengajar">Daftar</a></button></p>

          </div>
        </div>
      </center>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </div>
  <div class="bottom">
  <div class="container" style="padding-top: 40px;">
      <div class="row">
        <div class="col-sm-3">
          <center>
              <img style="width: 500px; height: 128px; width: 128px;" src="<?= base_url() ?>assets/gambar/logo3.png">
              <h4 style="color: #d2d2d2; margin-top: 10px;"><b>EXPERT COURSE</b></h4>
              <d style="font-family: 'Roboto', sans-serif;font-weight: 400;color: #d2d2d2;"><b>#BimbelnyaMahasiswa</b></d>
            </center>
        </div>
        <div class="col-sm-3">
          <h4 style="color: #d2d2d2;"><b>TENTANG KAMI</b></h4></br>
          <p style="color: #d2d2d2">Kontak</p>
          <p style="color: #d2d2d2">Blog</p>
        </div>
        <div class="col-sm-3">
          <h4 style="color: #d2d2d2;"><b>JADI BAGIAN DARI KAMI</b></h4></br>
          <p style="color: #d2d2d2">Expert Squad</p>
          <p style="color: #d2d2d2">Expert Team</p>
          <p style="color: #d2d2d2">Karir</p>
        </div>
        <div class="col-sm-3">
          <h4 style="color: #d2d2d2;"><b>CONTACT US</b></h4></br>
          <div>
            <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/line.png" width="40px;">
            <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/facebook.png" width="40px;">
            <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/instagram.png" width="40px;">
            <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/youtube.png" width="40px;">
          </div>
        </div>
      </div>
   </div>
</div>
<div class="bottomm">
  <center><d style="font-family: 'Roboto', sans-serif;font-weight: 400;color: #d2d2d2;">Expert Course 2019</d></center>
</div>

</body>
</html>