<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">

<?head("Odaya Demirbas ekleme Bölümü");?>
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
                    <h4>Demirbas Atama</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<? $facultyID = tablocek("room","*","") ?>
					<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Oda ID </label>
						<div class="col-sm-10">
							
							<select  name="odaID" class="form-control " id="exampleSelect1">
								<?foreach($facultyID as $row) {?>
								<option ><?=$row["roomID"]?></option>
								<?}?>
							</select>
						</div>
			</div>
			<div class="form-group row">
				<? $facultyID = tablocek("demirbas","*","") ?>
					<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Demirbas ID </label>
						<div class="col-sm-10">
							
							<select  name="demID" class="form-control " id="exampleSelect1">
								<?foreach($facultyID as $row) {?>
								<option ><?=$row["demirbasID"]?></option>
								<?}?>
							</select>
						</div>
			</div>
			<div class="form-group row">
				<label for="example-neuber-input" class="col-xs-2 col-form-label form-control-label">Adet</label>
				<div class="col-sm-10">
					<input class="form-control" name="adet" type="number" placeholder="Adeti giriniz" max="99999" id="example-email-input" required>
				</div>
			</div>
			<div class="form-group row">
				<? $facultyID = tablocek("personnel","*","") ?>
					<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Personel ID </label>
						<div class="col-sm-10">
							
							<select  name="perID" class="form-control " id="exampleSelect1">
								<?foreach($facultyID as $row) {?>
								<option ><?=$row["perID"]?></option>
								<?}?>
							</select>
						</div>
			</div>
			
			<button type="submit" name="kaydet"  class="btn btn-success waves-effect waves-light m-r-30">Kaydet</button>
			
		</form>
		<?
					if(isset($_POST["kaydet"])){
						
						$odaID= $_POST["odaID"];
						$demID= $_POST["demID"];
						$adet= $_POST["adet"];
						$perID = $_POST["perID"];
						$stok = vericek("demirbas","*","demirbasID",$demID);
						$stok=$stok["piece"];
						if($adet > $stok){
							echo '<div></div><div class="alert alert-danger col-md-2"> Lütfen Geçerli Adet Değeri Giriniz </div>';
						}
						else {
						
						$insert= $db->prepare("INSERT INTO apartdemirbas SET roomID= ?, demirbasID= ? , total= ?, perID= ?");
						$insert -> execute(array($odaID,$demID,$adet,$perID));
						
						$stok = vericek("demirbas","*","demirbasID",$demID);
						$stok=$stok["piece"];
						$yenistok = $stok - (int)$adet ;
						$update = $db -> prepare("Update demirbas set piece= ? where demirbasID = ?");
						$update -> execute(array($yenistok, $demID));
						
						
						if($insert){
							echo '<div class="alert alert-success col-md-6"> Başarı ile Eklendi!!!! </div>';
						}
						else {
							echo '<div></div><div class="alert alert-danger col-md-2"> Oppsss !!! Bir Hata Oluştu </div>';
						}
						}
						
					}
				
				?>
		
		
		
		
		
		
		
		<!-- tablolar dan çekme ıdleri  -->
		<div class="row">
		<div class="form-group col-md-4 " style="float:right">
		<? 
			$typeID = tablocek("room","*","");
			?> 
			<label for="exampleSelect2" class="form-control-label ">ID || Adları "<font color="green">Oda</font>"</label>
				<select multiple="" class="form-control multiple-select" id="exampleSelect2">
					<?foreach($typeID as $row) {?>
						<option name="turu"><?=$row["roomID"]?> || <?=$row["roomName"]?></option>
					<?}?>                                        
			</select>
				
		</div>
		<div class="form-group col-md-4 " style="float:right">
		<? 
			$typeID = tablocek("demirbas","*","");
			?> 
				<label for="exampleSelect2" class="form-control-label ">ID || Adet || Adları "<font color="green">Demirbas</font>"</label>
				<select multiple="" class="form-control multiple-select" id="exampleSelect2">
				<?foreach($typeID as $row) {?>
												<option name="turu"><?=$row["demirbasID"]?> || <?=$row["piece"]?> ||<?=$row["demirbasName"]?></option>
												<?}?>                                        
				</select>
				
		</div>
		<div class="form-group col-md-4 " style="float:right">
		<? 
			$typeID = tablocek("department","*","");
			?> 
				<label for="exampleSelect2" class="form-control-label "> ID || Adları "<font color="green">Departman</font>"</label>
				<select multiple="" class="form-control multiple-select" id="exampleSelect2">
				<?foreach($typeID as $row) {?>
												<option name="turu"><?=$row["departmentID"]?> || <?=$row["departmentName"]?></option>
												<?}?>                                        
				</select>
				<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" >
			<i class="icofont icofont-home "></i><span class="m-1-10"><a href="index.php"><font color="white">Ana Sayfa</font></a></span>
		</button>
		<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=""   aria-describedby="tooltip787862" onclick="javascript:history.back(-1)">
			<i class="icofont icofont-bubble-left"></i><span class="m-l-10">backward</span>
		</button>
		</div>
		</div>
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
