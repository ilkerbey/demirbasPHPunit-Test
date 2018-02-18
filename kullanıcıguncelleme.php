<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">

<?head("Kullanıcı Bölümü");?>
<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
<div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div> -->
    <!-- Navbar-->
  <? menu();?>
    <!-- Side-Nav-->
    <? admin_kategori(); ?>
    <div class="content-wrapper">

        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Kullanıcı Guncelleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
			<?
			$id = g("id");
			$tablo = vericek("user","*","userID",$id);
			if($_POST){
				
				$user=p("adi",true);
				$pass=p("pass",true);
				$yetki=p("yetki",true);
				
				$uzunluk = strlen($pass);
				if($yetki== 1 || $yetki==0){
				
					if($uzunluk >6) {
					$update = $db -> prepare("update user set userName = ? , password = ? , autID = ? where userID = ?");
					$d = $update -> execute(array($user,$pass,$yetki,$id));
					
							if($d){		
								echo '<div class="alert alert-success"> Kullanıcı Başarı ile güncellendi!!!! </div>';
									
								}
								
								else {
									
									echo '<div class="alert alert-danger"> Kullanıcı Eklenirken Bir Hata Oluştu !!!! </div>';
									}
					}
				}
				else {
					echo '<div class="alert alert-danger"> Yetki IDsi  1 yada 0 seçilmelidir.!!!! </div>';
				}
			}
			else {
		
		
		?>
		<form method="post">
			<div class="form-group row">
				<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Kullanıcı Adı</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="adi" value="<?=$tablo["userName"]?>" maxlength="25" id="example-text-input">
				</div>
			</div>
			<div class="form-group row">
				<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Sifresi</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="pass" value="<?=$tablo["password"]?>" maxlength="25" id="example-text-input">
				</div>
			</div>
			<div class="form-group row">
				<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Yetki ID</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="yetki" value="<?=$tablo["autID"]?>" id="example-text-input">
				</div>
			</div>
			
						<button type="submit" name="kaydet" class="btn btn-success waves-effect waves-light m-r-30">Kaydet</button>

			
		</form>
			<?}?>
		
	</div>
            <!-- 4-blocks row end -->

            <!-- 1-3-block row start -->
            
           
            <!-- 1-3-block row end -->

            <!-- 3-1-block start -->
           

            <!-- 3-1-block end -->

            <!-- 2-1 block start -->
            
             
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->



        <!-- Container-fluid ends -->
    </div>
</div>



<!-- Required Jqurey -->
<script src="assets\js\jquery-3.1.1.min.js"></script>
<script src="assets\js\jquery-ui.min.js"></script>
<script src="assets\js\tether.min.js"></script>

<!-- Required Fremwork -->
<script src="assets\js\bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets\plugins\waves\js\waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="assets\plugins\slimscroll\js\jquery.slimscroll.js"></script>
<script src="assets\plugins\slimscroll\js\jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="assets\plugins\search\js\classie.js"></script>

<!-- notification -->
<script src="assets\plugins\notification\js\bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="assets\plugins\charts\sparkline\js\jquery.sparkline.js"></script>

<!-- Counter js  -->
<script src="assets\plugins\countdown\js\waypoints.min.js"></script>
<script src="assets\plugins\countdown\js\jquery.counterup.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets\js\main.js"></script>
<script type="text/javascript" src="assets\pages\dashboard.js"></script>
<script type="text/javascript" src="assets\pages\elements.js"></script>
<script src="assets\js\menu.js"></script>


</body>

</html>
