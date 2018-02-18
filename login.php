<? session_start();
if($_SESSION["oturum"]) header("location:index.php"); ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMİN PANELİ</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="assets\images\blogo.png" type="image/x-icon">
	<link rel="icon" href="assets\images\blogo.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="assets\css\font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="assets\icon\icofont\css\icofont.css">

	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="assets\plugins\waves\css\waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets\css\main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="assets\css\responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color">

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" action=" " method="post">
						<div class="text-center">
							<img src="assets\images\beystoklogin.png">
						</div>
						<h3 class="text-center txt-primary">
							Hesabınıza Giriş Yapınız
						</h3>
						<div class="md-input-wrapper">
							<input type="text" name="username" class="md-form-control" maxlength="10"  pattern="[a-z]*" required>
							<label>Kullanıcı Adı</label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" name="password" class="md-form-control" required>
							<label>Şifre</label>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
						
								</div>
							<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Giriş Yapınız</button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->
						

						<!-- </div> -->
					</form>
			<?php
						session_start();
						include("interface.php");
						require_once("fonksiyonlar.php");
						if($_POST){
							$kadi = $_POST["username"];
							$sifre = $_POST["password"];
							echo $kadi;
							echo $sifre;
							$kadi=trim($kadi);
							
							$v=login($kadi,$sifre);
							if($v==null){
								
							}
							else{
								$c = $v -> fetch(PDO::FETCH_ASSOC);
								$x = $v -> rowCount();
								
								if($x){
									$_SESSION["oturum"]=$c["userID"];
									$_SESSION["adi"] = $c["userName"];
									$_SESSION["durumu"] = $c["autID"];
									
									header("Location:index.php");				
								}
								else{
									echo '<script language="javascript">';
									echo 'alert("HATALI GİRİŞ TEKRAR DENE")';
									echo '</script>';
									header("refresh:0.5;url=login.php");
									
								}}
						
						
						}?>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>


<!-- Required Jqurey -->
<script src="assets\js\jquery-3.1.1.min.js"></script>
<script src="assets\js\jquery-ui.min.js"></script>
<!-- tether.js -->
<script src="assets\js\tether.min.js"></script>
<!-- waves effects.js -->
<script src="assets\plugins\waves\js\waves.min.js"></script>
<!-- Required Framework -->
<script src="assets\js\bootstrap.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets\pages\elements.js"></script>


</body>
</html>