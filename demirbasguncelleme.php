<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">

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
                    <h4>Demirbas Güncelleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
			<?
				$id = $_GET["id"];
				$row= vericek("demirbas","*","demirbasID",$id);
			
				
				if($_POST){
				
					$adi=p("adi",true);
					$kodu=p("kodu",true);
					$fiyat=p("fiyat",true);
					$adet=p("adet",true);
					$turu=p("turu",true);
					$fakulte = p("fakulte",true);
					$tarih = p("tarih",true); 
					
					$typeID = tablocek("demirbastype","*","");
					$typeID -> execute();
					$x = $typeID -> fetchAll(PDO::FETCH_ASSOC);
					$xx = count($x);
					if($turu > 0 && $turu <= $xx)
					{
						if($adet >0) {
							$update = $db -> prepare("update demirbas set 
						
							demirbasName = ?,
							demirbasCode = ?,
							price = ?, 
							piece = ? ,
							demirbasTypeID  = ?,
							facultyID = ? ,
							purchaseDate = ? 
							where demirbasID = ?
						
							");
							
							$d = $update -> execute(array($adi,$kodu,$fiyat,$adet,$turu,$fakulte,$tarih,$id));
							
							if($d){
								
								echo '<div class="alert alert-success"> Demirbas Başarı ile güncellendi!!!! </div>';
								
							}
							
							else {
								
								echo '<div class="alert alert-danger"> Demirbas Güncelerken Bir Hata Oluştu !!!! </div>';
								
							}
						}
						else 
						{
							echo '<div></div><div class="alert alert-danger col-md-2"> Lütfen 0(sıfırdan) büyük değer giriniz. </div>';
						}
					}
					else{
						
						echo '<div class="alert alert-danger"> Demirbas Türü Tablosuna Bakarak ID seçimi Yapınız !!!! </div>';
						
					}
					
				}
				
				else {
					
					
			?>
			
		<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Adı</label>
						<div class="col-sm-10">
							<input class="form-control" name="adi" type="text" value=" <?=$row["demirbasName"]?>" maxlength="25" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Kodu</label>
						<div class="col-sm-10">
							<input class="form-control" name="kodu" type="text" value="<?=$row["demirbasCode"]?>" maxlength="25" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Fiyat</label>
						<div class="col-sm-10">
							<input class="form-control" name="fiyat" type="number" value="<?=$row["price"]?>" max="9999" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-neuber-input" class="col-xs-2 col-form-label form-control-label">Adet</label>
						<div class="col-sm-10">
							<input class="form-control" name="adet" type="number" value="<?=$row["piece"]?>" maxlength="9999" id="example-email-input" required>
						</div>
					</div>
					
					
					<div class="form-group row">
						
						
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Demirbaş Türü ID</label>
						<div class="col-sm-10">
							
							<input class="form-control" name="turu" type="number" value="<?=$row["demirbasTypeID"]?>" id="example-text-input" required>

						
						</div>
					</div>
					<div class="form-group row">
				
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Fakulte ID</label>
						<div class="col-sm-10">
								<? $facultyID = tablocek("faculty","*","") ?>
							<select name="fakulte" class="form-control " id="exampleSelect1">
								<?foreach($facultyID as $roow) {?>
								<option><?=$roow["facultyID"]?></option>
								<?}?>
							</select>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="example-date-input" class="col-xs-2 col-form-label form-control-label">Alım Tarihi</label>
						<div class="col-sm-10">
							<input class="form-control" name="tarih" type="date" value="<?=$row["purchaseDate"]?>" id="example-date-input">
						</div>
					</div>
					<input type="submit" name="kaydet" value="Güncelle" class="btn btn-success waves-effect waves-light m-r-30"></input>
					
					
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
