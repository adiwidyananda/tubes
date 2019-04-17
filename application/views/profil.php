<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/profil.css">
</head>
<body>
	<div class="menu">
  		<img style="max-height:25px;max-width: 25px; " src="gambar/logo.png">
  		<b>EXPERT COURSE</b>
  		<ul>
  			<li><b>Modul</b></li>
  			<li><b>Presensi</b></li>
  			<li><b>Pembayaran</b></li>
  			<li><b>Tata Tertib</b></li>
  			<li><b style=" color: #e34735; border-bottom: 2px solid #e34735">Profile</b></li>
  			<li><b>Logout</b></li>
  		</ul>
	</div>
	<div style="background-color: #f8f8f8;" class="isi">
		<center>
		<img width="200px" height="200px" src="gambar/logo2.png">
		<h3>Nama</h3>
		</center>
		<div class="container mt-3">
  <form action="/action_page.php">
  	<div style="background-color: white;" class="container">
  		<div class="row">
  			<div style="border: 1px solid #ddd; padding: 0px;" class="col-sm-6">
  				<div style="border-top-right-radius: 3px; border-top-left-radius: 3px;" class="namaform">
					<p style="font: 18px 'OpenSansSemiboldRegular';"><b>Profile</b></p>
				</div>
				<label style="margin-left: 10px; margin-top: 10px;">Username</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fas fa-user"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Username" id="usr" name="username">
			    </div>
			    	<label style="margin-left: 10px;">Password</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fas fa-key"></i></span>
			      </div>
			      <input type="text" class="form-control" placeholder="Password" id="usr" name="password">
			    </div>
			    <label style="margin-left: 10px;">Email</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			      </div>
			      <input type="email" class="form-control" placeholder="Email" id="usr" name="email">
			    </div>
			    <label style="margin-left: 10px;">Jurusan</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			      </div>
			      <input type="text" class="form-control" placeholder="Jurusan" id="usr" name="jurusan">
			    </div>
			    <label style="margin-left: 10px;">Kelas</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			      </div>
			      <input type="text" class="form-control" placeholder="Kelas" id="usr" name="kelas">
			    </div>
			    <label style="margin-left: 10px; margin-top: 10px;">Tahun</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Tahun" id="usr" name="tahun">
			    </div>
			    <label style="margin-left: 10px;">Tempat Tanggal Lahir</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			      </div>
			      <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" id="usr" name="ttl">
			    </div>
			    <label style="margin-left: 10px;">Alamat</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			      </div>
			      <input type="text" class="form-control" placeholder="Alamat" id="usr" name="alamat">
			    </div>

			</div>
			<div style="border: 1px solid #ddd; padding: 0px;" class="col-sm-6">
				<div style="border-top-right-radius: 3px; border-top-left-radius: 3px;" class="namaform">
					<p style="font: 18px 'OpenSansSemiboldRegular';"><b>Profile</b></p>
				</div>
				 <label style="margin-left: 10px; margin-top: 10px;">Line</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text">@</span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Id Line" id="usr" name="line">
			    </div>
			     <label style="margin-left: 10px; margin-top: 10px;">HP</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fas fa-phone"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="HP" id="usr" name="hp">
			    </div>
			    <label style="margin-left: 10px; margin-top: 10px;">Facebook</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Facebook" id="usr" name="facebook">
			    </div>
			    <label style="margin-left: 10px; margin-top: 10px;">Instagram</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Instagram" id="usr" name="instagram">
			    </div>
			    <label style="margin-left: 10px; margin-top: 10px;">Nama Bank</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fas fa-university"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Nama Bank" id="usr" name="bank">
			    </div>
			    <label style="margin-left: 10px; margin-top: 10px;">Nomor Rekening</label>
			    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text"><i class="fas fa-money-check"></i></span>
			      </div>
			      <input  type="text" class="form-control" placeholder="Nomor Rekening" id="usr" name="norek">
			    </div>
			    <center><label style="color: #e2e2e2;">____________________________________________________________________</label></center>
			<button type="button" class="butn"><i style="margin-right: 4px;" class="fas fa-times"></i>Reset</button>
			<button type="button" class="btn btn-success"><i style="margin-right: 4px;" class="fas fa-check"></i>Update</button>
			</div>
</div>
</div>
  </form>
</div>
	</div>
	</div>
<div class="bottom">
    <p>Experts Course 2019</p>
    <p style="margin-left: 800px;">Follow Us:</p>
    <img class="logo3"src="gambar/logo/facebook.png" style="width: 20px;height: 20px;">
    <img class="logo3"src="gambar/logo/instagram.png" style="width: 20px;height: 20px;margin-right: 5px;">
    <img class="logo3"src="gambar/logo/youtube.png" style="width: 20px;height: 20px;">
  </div>

</body>
</html>