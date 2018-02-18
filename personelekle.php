<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">

<?head("Personel Bölümü");?>
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
                    <h4>Personel Ekleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Adı</label>
				<div class="col-sm-10">
					<input class="form-control" name="adi" type="text" placeholder="Adını Giriniz" maxlength="15" id="example-text-input">
				</div>
			</div>
			<div class="form-group row">
				<label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Soyadı</label>
				<div class="col-sm-10">
					<input class="form-control" name="soyadi"type="search" placeholder="Soyadını Giriniz" maxlength="15" id="example-search-input">
				</div>
			</div>
			
			<button type="submit" name="kaydet"  class="btn btn-success waves-effect waves-light m-r-30">Kaydet</button>
			
		</form>
		<?
		
		include("fonksiyonlar.php");
		if(isset($_POST["kaydet"])){
						
						$adi= $_POST["adi"];
						$soyadi= $_POST["soyadi"];
						
						
						$insert=personelEkle($adi,$soyadi);
						if(!$insert || $insert==null){
							echo '<div></div><div class="alert alert-danger col-md-2"> Oppsss !!! Bir Hata Oluştu </div>';
						}
						else {
							echo '<div class="alert alert-success col-md-6"> Başarı ile Eklendi!!!! </div>';
							
						}
						
						
					}?>
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
