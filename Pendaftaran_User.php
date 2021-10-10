<!-- <?php
//session_start();

?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway&display=swap"/>
    
    <!-- <script src="Jelajah_dropdownfunction.js"></script> -->
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="Form_PU.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		#loading-part {
			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: center no-repeat rgba(23,23,23,1);
		}
		@-webkit-keyframes spin {
			0% {-webkit-transform: rotate(0deg);}
			100% {-webkit-transform: rotate(360deg);}
		}
		@keyframes spin {
			0% {transform: rotate(0deg);}
			100% {transform: rotate(360deg);}
		}
		.no-js #loader {display: none;}
		.js #loader {
			display: block;
			position: absolute;
			left: 100px;
			top: 0;
		}
		.loader {
			border: 10px solid #737373;
			border-top: 10px solid rgb(98, 255, 20);
			border-bottom: 10px solid rgb(98, 255, 20);
			border-radius: 50%;
			width: 150px;
			height: 150px;
			left: 43.5%;
			top: 20%;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
			position: fixed;
		}
		.txt-loader {
			position: fixed;
			top: 56%;
			left: 45.6%;
			color: rgb(98, 255, 20);
		}
		@media screen and (max-width: 1034px){
			.txt-loader {
				left: 44.2%;
			}
		}
		@media screen and (max-width: 824px){
			.txt-loader {
				left: 47.2%;
			}
		}
		@media screen and (max-width: 732px){
			.txt-loader {
				left: 48.2%;
			}
		}
		@media screen and (max-width: 500px){
			.loader {
				left: 36.5%;
			}
			.txt-loader {
				left: 40.5%;
			}
		}
		@media screen and (max-width: 432px){
			.txt-loader {
				top: 65%;
			}
		}
		@media screen and (max-width: 350px){
			.txt-loader {
				top: 75%;
			}
		}
		@media screen and (max-width: 312px){
			.txt-loader {
				display: none;
			}
		}

	</style>
<body onload="loader()">
	<div id="loading-part">
		<span class="loader"></span>
		<div class="txt-loader">
			<center>
				<b>Tunggu Sebentar...</b>
			</center>
		</div>
	</div>
	<div class="main-form" style="display: flex;flex-direction: column; justify-content: center;">
		<div class="head-form" style="text-align: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
			<span style="font-weight: 600;font-size: 14pt;color: rgb(98, 255, 20);text-align: center;">Pendaftaran Akun</span><br>
			<span style="font-size: 11pt;color: rgba(98, 255, 20, 0.5);font-style: italic;font-weight: 120;">Silahkan isi form pendaftaran dibawah ini</span>
		</div>
		<div class="origin-form">
			<form action="" method="POST" id="reg-form">
				<section id="user-data">
					<div class="form-group">
						<label id="full-name-lbl" for="full-name">Nama Lengkap</label>
						<input type="text" id="full-name" name="full-name" class="form-control" placeholder="Masukkan Nama Lengkap" required="" autocomplete="off"/>
					</div>
					<div class="form-group">
						<label id="username-lbl" for="username">Nama Pengguna</label>
						<input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Nama Pengguna" required="" autocomplete="off"/>
					</div>
					<div class="form-group">
						<label id="numberphone" for="numberphone">Nomor Tlp</label>
						<input type="charset" id="numberphone" name="numberphone" class="form-control" placeholder="Masukkan Nomor Telepon" required="" autocomplete="off"/>
					</div>
				</section>
			</form>
		</div>
	</div>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		var delay = 3000;

		$(window).load(function(){
			setTimeout(function(){
				$("#loading-part").hide();
				$(".loader").hide();
			}, delay);
		});
	</script>
</body>
</html>