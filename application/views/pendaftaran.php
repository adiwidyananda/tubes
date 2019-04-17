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
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/pendaftaran.css">
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
	<center>
		<h3 style="color: #272727;padding-top: 150px;"><b>DAFTAR MEMBER</b></h3>
		<div class="line">
		    <div class="titik"></div>
		</div>
		 <p>Sebelum mendaftar melalui form ini, pastikan kalian sudah mendapatkan kode aktivasi. Cara mendapatkan kode aktivasi klik <span style="color:#d64545;">disini</span></p>
	</center>
	<form method="post" style="margin-top: 100px;" action="<?= base_url() ?>index.php/Pelajar/proses_tambah">
  		<div style="background-color: white;" class="container">
  			<div class="row">
  				<div style="padding: 0px;" class="col-sm-6">
					<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Nama Lengkap<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Nama Lengkap" id="usr" name="nama">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-credit-card"></i></i></span>
				      </div>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Username<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Username" id="usr" name="username">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-user"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Password<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Password" id="usr" name="password">
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Ketik Ulang Password<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Masukkan kembali password" id="usr" name="pass">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-check"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Tempat Tanggal Lahir<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Contoh : Bandung, 3 Mei 1998" id="usr" name="ttl">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Jurusan<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Contoh S1 Teknik Informatika" id="usr" name="jurusan">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-gopuram"></i></span>
				      </div>
				    </div>
				       <label><b style=" color:#64686d; font-size: 14px;padding-left: 10px;">Kelas<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Contoh : TI-38-02" id="usr" name="kelas">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fab fa-font-awesome-flag"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Tahun (Angkatan)<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Tahun" id="usr" name="tahun">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Alamat<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Alamat" id="usr" name="alamat">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Line<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="Line" id="usr" name="line">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fab fa-line"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Email<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="email" class="form-control" placeholder="Email" id="usr" name="email">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
				      </div>
				    </div>
				       <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">HP<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="HP" id="usr" name="hp">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-phone"></i></span>
				      </div>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">No. HP Wali<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <input  type="text" class="form-control" placeholder="No. HP Wali" id="usr" name="wali">
				     <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-phone"></i></span>
				      </div>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Tahu Expert Dari ?<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <select style="width: 100%">
				     	<option selected>Pilih Salah Satu</option>
				     </select>
				   
				    </div>

				</div>
				<div style="padding: 0" class="col-sm-6">
				<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Universitas<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <select name="universitas" style="width: 100%">
				     	<option selected>Pilih Universitas</option>
				     	<option>Telkom University</option>
				     </select>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Paket<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <select name="paket" style="width: 100%">
				     	<option selected>Pilih Paket</option>
				     	<option>Bronze A</option>
				     	<option>Silver A</option>
				     	<option>Gold A</option>
				     	<option>Bronze B</option>
				     	<option>Silver B</option>
				     	<option>Gold B</option>
				     	<option>Bronze C</option>
				     	<option>Silver C</option>
				     	<option>Gold C</option>

				     </select>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Mata Kuliah 1<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <select name="matkul1" style="width: 100%">
				     	<option selected>Pilih Universitas</option>
				     	<option>Telkom University</option>
				     </select>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Mata Kuliah 2<b></label></br>
				    <div style="margin-left: 10px; width: 530px;" class="input-group mb-3">
				     <select name="matkul2" style="width: 100%">
				     	<option selected>Pilih Universitas</option>
				     	<option>Telkom University</option>
				     </select>
				    </div>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Paket<b></label></br>
				    <label><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><i class='fas fa-star' style="color: red;font-size: 6px;margin-left: 10px; margin-right: 5px;"></i><b style=" color:#64686d; font-size: 14px;">Tidak Wajib Diisi<b></label></br>
				    	<div style="display: flex; text-align: right;width: 200%;">
				    <button type="button" class="butn"><i style="margin-right: 4px;" class="fas fa-times"></i>Reset</button>
				    <button type="submit" class="btn btn-danger" style="margin-top: -2px;"><i style="margin-right: 4px;" class="fas fa-check"></i>Daftar</button>
				
						</div>
				   </div>

						
						
			</div>
		</div>
 </form>
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