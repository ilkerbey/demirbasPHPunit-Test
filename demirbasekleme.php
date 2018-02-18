<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
	var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("max", today);
</script>

<?head("Demirbas Bölümü");?>
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
                    <h4>Demirbas Ekleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Adı</label>
						<div class="col-sm-10">
							<input class="form-control" name="adi" type="text" placeholder="Demirbas Adını Giriniz" maxlength="25" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Kodu</label>
						<div class="col-sm-10">
							<input class="form-control" name="kodu" type="text" placeholder="Demirbas Kodunu Giriniz" maxlength="15" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Fiyat</label>
						<div class="col-sm-10">
							<input class="form-control" name="fiyat" type="number" placeholder="Adeti giriniz" max="99999" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-neuber-input" class="col-xs-2 col-form-label form-control-label">Adet</label>
						<div class="col-sm-10">
							<input class="form-control" name="adet" type="number" placeholder="Adeti giriniz" max="10000" id="example-email-input" required>
						</div>
					</div>
					
					
					<div class="form-group row">
						
						<? 
						$typeID = tablocek("demirbastype","*","");
						?> 
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Demirbaş Türü </label>
						<div class="col-sm-10">
							
							<select name="turu" class="form-control " id="exampleSelect1">
								<?foreach($typeID as $row) {?>
								<option ><?=$row["demirbasTypeID"]?></option>
								<?}?>
							</select>
						
						</div>
					</div>
					<div class="form-group row">
					<? $facultyID = tablocek("faculty","*","") ?>
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Fakulte </label>
						<div class="col-sm-10">
							
							<select  name="fakulte" class="form-control " id="exampleSelect1">
								<?foreach($facultyID as $row) {?>
								<option ><?=$row["facultyID"]?></option>
								<?}?>
							</select>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="example-date-input" class="col-xs-2 col-form-label form-control-label">Alım Tarihi</label>
						<div class="col-sm-10">
							<input class="form-control" name="tarih" type="date" min="1899-01-01" max="2000-13-13" id="datefield">
						</div>
					</div>
					<button type="submit" name="kaydet" class="btn btn-success waves-effect waves-light m-r-30">Kaydet</button>
					
					
				</form>
	
		<div class="row">
			<div class="form-group col-md-4 " style="float:right">
				<? 
				$typeID = tablocek("demirbastype","*","");
				?> 
				<label for="exampleSelect2" class="form-control-label ">Demirbas Türü ID || Adları</label>
				<select multiple="" class="form-control multiple-select" id="exampleSelect2">
				<?foreach($typeID as $row) {?>
				<option name="turu"><?=$row["demirbasTypeID"]?> || <?=$row["demirbasTypeName"]?></option>
				<?}?>                                        
				</select>
				
					</div>
			

			<div class="form-group col-md-4 " style="float:right">
			<? 
			$typeID = tablocek("faculty","*","");
			?> 
			<label for="exampleSelect2" class="form-control-label ">Fakülte ID || Adları</label>
			<select multiple="" class="form-control multiple-select" id="exampleSelect2">
			<?foreach($typeID as $row) {?>
			<option name="turu"><?=$row["facultyID"]?> || <?=$row["facultyName"]?></option>
			<?}?>                                        
			</select>
			</div>
		</div>
	</div>

				
				<?
					if(isset($_POST["kaydet"])){
						
						$adi= $_POST["adi"];
						$kodu= $_POST["kodu"];
						$fiyat = $_POST["fiyat"];
						$adet = $_POST["adet"];
						$turu=$_POST["turu"];
						$fakulte= $_POST["fakulte"];
						$tarih= $_POST["tarih"];
						
						
						if($adet >0){
						$insert= $db->prepare("INSERT INTO demirbas SET demirbasName= ?, demirbasCode= ? , price = ?, piece= ? , demirbasTypeID= ? ,facultyID= ?, purchaseDate= ?");
						$insert -> execute(array($adi,$kodu,$fiyat,$adet,$turu,$fakulte,$tarih));
							
							if($insert){
								echo '<div class="alert alert-success col-md-6"> Başarı ile Eklendi!!!! </div>';
							}
							else {
								echo '<div></div><div class="alert alert-danger col-md-2"> Oppsss !!! Bir Hata Oluştu </div>';
							}
						}
						else {
							echo '<div></div><div class="alert alert-danger col-md-2"> Lütfen 0(sıfırdan) büyük değer giriniz.</div>';
							}
						
					}
				
				?>
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
