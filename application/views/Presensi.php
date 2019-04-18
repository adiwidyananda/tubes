<!DOCTYPE html>
<html>
<head>
	<title>Presensi</title>
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
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Presensi.css">
</head>
<body>
	<div class="menu">
  		<img style="max-height:25px;max-width: 25px; " src="<?= base_url() ?>assets/gambar/logo.png">
  		<b>EXPERT COURSE</b>
  		<ul>
  			<li><b><a style="text-decoration: none; color: #696969" href="<?= base_url() ?>index.php/Pengajar/modul_pengajar/<?php echo $username; ?>">Modul</a></b></li>
  			<li><b style=" color: #e34735; border-bottom: 2px solid #e34735">Presensi</b></li>
  			<li><b><a style="text-decoration: none; color: #696969" href="<?= base_url() ?>index.php/Pengajar/pembayaran_pengajar/<?php echo $username; ?>">Pembayaran</a></b></li>
  			<li><b>Tata Tertib</b></li>
  			<li><b>Profile</b></li>
  			<li><b><a style="text-decoration: none; color: #696969" href="<?= base_url() ?>index.php/Pengajar/logout_pengajar">Logout</a></b></li>
  		</ul>
	</div>
	<div style="background-color: #f8f8f8;" class="isi">
		<center>
		<h1 style="color: #333;font-family: 'Roboto', sans-serif;margin-bottom: 30px; margin-top: 60px;"><b>PRESENSI</b></h1>
		</center>
		<form method="post" action="<?= base_url() ?>index.php/Pengajar/proses_presensi">	
			<input  name="username" value="<?php echo $username; ?>" style="display: none;">
			<input  name="status" value="unpaid" style="display: none;">
			<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Tanggal Les<b></label></br>
			<input type="text" name="tanggal" placeholder="yyyy-mm-dd">
			<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Materi<b></label></br>
			<input type="text" name="materi" placeholder="Materi Pembahasan">
			<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Nama Grup<b></label></br>
			<input type="text" name="grup" placeholder="Contoh : Kalkulus 7">
			<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Jumlah Anggota Grup<b></label></br>
			<select name="jumlah" style="width: 100%;height: 30px;">
				<option selected>Pilih Jumlah</option>
				<option value="1-2 Orang">1-2 Orang</option>
				<option value="3-4 Orang">3-4 Orang</option>
				<option value="5-7 Orang">5-7 Orang</option>
			</select>
				<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Jumlah Anggota Yang Hadir<b></label></br>
				<select name="hadir" style="width: 100%;height: 30px;">
				<option selected>Pilih Jumlah</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
				<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Keterangan<b></label></br>
				<textarea rows="4" cols="58" type="text" name="keterangan" placeholder="Keterangan"></textarea>
				<label><i class='fas fa-star' style="color: red;font-size: 6px;margin-right: 5px;"></i><b>Wajib Diisi<b></label></br>
				<button type="button" class="butn"><i style="margin-right: 4px;" class="fas fa-times"></i>Reset</button>
				<button type="Submit" class="btn btn-danger" style="margin-top: -2px;"><i style="margin-right: 4px;" class="fas fa-paper-plane"></i>Submit</button>
			</form>
	</div>
	 <div class="bottom">
    <p>Experts Course 2019</p>
    <p style="margin-left: 800px;">Follow Us:</p>
    <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/facebook.png" style="width: 20px;height: 20px;">
    <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/instagram.png" style="width: 20px;height: 20px;margin-right: 5px;">
    <img class="logo3"src="<?= base_url() ?>assets/gambar/logo/youtube.png" style="width: 20px;height: 20px;">
  </div>
	

</body>
</html>