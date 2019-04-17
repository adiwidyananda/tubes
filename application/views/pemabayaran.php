<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran</title>
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
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/pembayaran.css">
</head>
<body>
	<div class="menu">
  		<img style="max-height:25px;max-width: 25px; " src="gambar/logo.png">
  		<b>EXPERT COURSE</b>
  		<ul>
  			<li><b>Modul</b></li>
  			<li><b>Presensi</b></li>
  			<li><b style=" color: #e34735; border-bottom: 2px solid #e34735">Pembayaran</b></li>
  			<li><b>Tata Tertib</b></li>
  			<li><b>Profile</b></li>
  			<li><b>Logout</b></li>
  		</ul>
	</div>
	<div class="isi">
		<center>
		<h1 style="color: #313538;"><b>PEMBAYARAN</b></h1>
		</center>
		<div class="container">
		<div style="margin-left: -60px; margin-right: -60px;" class="row">
			<div class="col-sm-6">
				<div class="container">
					<div style="border-top-right-radius: 3px; border-top-left-radius: 3px;" class="namatable">
						<h3 style="font: 18px 'OpenSansSemiboldRegular';"><b><i style="margin-right: 10px;" class="far fa-clock"></i>History</b></h3>
					</div>
					<table style="border: 1px solid #ddd; text-align: center;" class="table">
						<thead>
							<tr style="color: #65686d;">
								<th>No.</th>
								<th>Tanggal Les</th>
								<th>Nama Grup</th>
								<th>Fee</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>tanggal</td>
								<td>kalkulus2</td>
								<td>Rp 55.000</td>
								<td><button type="button" class="btn btn-danger">Unpaid</button></td>
							</tr>
							<tr>
								<td>1</td>
								<td>tanggal</td>
								<td>kalkulus2</td>
								<td>Rp 55.000</td>
								<td><button type="button" class="btn btn-danger">Unpaid</button></td>
							</tr>
						</tbody>
						
					</table>	
					
				</div>
				<div class="container">
					<div style="border-top-right-radius: 3px; border-top-left-radius: 3px;" class="namatable">
						<h3 style="font: 18px 'OpenSansSemiboldRegular';"><b><i style="margin-right: 10px;" class="fas fa-history"></i>History Payment</b></h3>
					</div>
					<table style="border: 1px solid #ddd; text-align: center; font-size: 14px;" class="table">
						<thead>
							<tr style="color: #65686d;">
								<th>No.</th>
								<th>Tanggal Request</th>
								<th>Tanggal Pembayaran</th>
								<th>Jumlah</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
						
					</table>	
					
				</div>
			</div>
			<div class="col-sm-6">
				<div class="container">
					<div style="border-top-right-radius: 3px; border-top-left-radius: 3px;" class="namatable">
						<h3 style="font: 18px 'OpenSansSemiboldRegular';"><b>Payment Details <img style="margin-left: 180px;" src="gambar/logo/bank.png"></b></h3>
					</div>
					<table style="border: 1px solid #ddd; text-align: center;" class="table">
						<thead>
							<tr style="color: #65686d;">
								<th>No.</th>
								<th>Tanggal Les</th>
								<th>Nama Grup</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>tanggal</td>
								<td>kalkulus2</td>
								<td>Rp 55.000</td>
							</tr>
							<tr>
								<td>1</td>
								<td>tanggal</td>
								<td>kalkulus2</td>
								<td>Rp 55.000</td>
							</tr>
							<tr style="border-bottom: none;">
								<td colspan="3" style="color: #444444; text-align: left;"><b>Total</b></td>
								<td style="color: red"><b>Rp.xxxxxx</b></td>
							</tr>
							<tr style="border-top: none;">
								<td style="text-align: left; font: 16px 'OpenSansRegular'; color: #65686d;" colspan="4"><p><input type="checkbox" name="" style="margin-right: 15px;">Dengan melakukan transaksi diatas maka anda dianggap telah mempelajari dan menyetujui perjanjian yang telah disepakati pada lampiran <b><i>Force Majeure</i></b> Expert Course.</p></td>
							</tr>
							<tr>
								<td colspan="4"><button style="width: 100%; height: 50px;" type="button" class="btn btn-success">Send Request</button></td>
							</tr>
						</tbody>

						
					</table>	
				</div>
				
			</div>
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