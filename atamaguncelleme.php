<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">

<?head("Oda Atama Bölümü");?>
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
                    <h4>Oda Atama Güncelleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
			<?
				$id = $_GET["id"];
				$row= vericek("apartdemirbas","*","apartDemirbasID",$id);
			
				if($_POST){
				
					$rid=p("rid",true);
					$did=p("did",true);
					$adet=p("adet",true);
					$pid=p("pid",true);
					
					$roomID = tablocek("room","*","");
					$roomID -> execute();
					$x = $roomID -> fetchAll(PDO::FETCH_ASSOC);
					$xx = count($x);
					
					$demID = tablocek("demirbas","*","");
					$demID -> execute();
					$y = $demID -> fetchAll(PDO::FETCH_ASSOC);
					$yy = count($y);
					
					$peID = tablocek("personnel","*","");
					$peID -> execute();
					$z = $peID -> fetchAll(PDO::FETCH_ASSOC);
					$zz = count($z);
					if($rid >0 && $rid <=$xx ){
						if($did >0 && $did <= $yy){
							if($pid >0 && $pid <= $zz){
								
								$update = $db -> prepare("update apartdemirbas set 
						
									roomID = ?,
									demirbasID = ?,
									total = ?, 
									perID = ? 
									where apartDemirbasID = ?
								
								");
								
								$d = $update -> execute(array($rid,$did,$adet,$pid,$id));
								
								if($d){
									
									echo '<div class="alert alert-success"> Oda Atama Başarı ile güncellendi!!!! </div>';
									
								}
								
								else {
									
									echo '<div class="alert alert-danger"> Oda Atama Eklenirken Bir Hata Oluştu !!!! </div>';
								}
							}else {
							
							echo '<div class="alert alert-danger"> Personel Tablosuna Bakarak  ID leri girin!!!! </div>';
							
							}
						}
						else {
							
							echo '<div class="alert alert-danger"> Demirbas Tablosuna Bakarak  ID leri girin!!!! </div>';
							
						}
						
					}
					
						else {
							
							echo '<div class="alert alert-danger"> Oda Tablosuna Bakarak  ID leri girin!!!! </div>';
							
						}
					
						
					
				}
				
				else {
					
					
			?>
			
		<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Oda ID</label>
						<div class="col-sm-10">
							<input class="form-control" name="rid" type="text" value=" <?=$row["roomID"]?>"  id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Demirbas ID</label>
						<div class="col-sm-10">
							<input class="form-control" name="did" type="text" value="<?=$row["demirbasID"]?>" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Adet</label>
						<div class="col-sm-10">
							<input class="form-control" name="adet" type="number" value="<?=$row["total"]?>" maxlength="15" id="example-text-input" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Personel ID</label>
						<div class="col-sm-10">
							<input class="form-control" name="pid" type="number" value="<?=$row["perID"]?>"  id="example-email-input" required>
						</div>
					</div>
					
					
					
					<input type="submit" name="kaydet" value="Güncelle" class="btn btn-success waves-effect waves-light m-r-30"></input>
					
					
				</form>
				
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
			$typeID = tablocek("personnel","*","");
			?> 
				<label for="exampleSelect2" class="form-control-label "> ID || Adları "<font color="green">Personel</font>"</label>
				<select multiple="" class="form-control multiple-select" id="exampleSelect2">
				<?foreach($typeID as $row) {?>
												<option name="turu"><?=$row["perID"]?> || <?=$row["perName"]?>  <?=$row["perSurname"]?> </option>
												<?}?>                                        
				</select>
				
		</div>
		</div>
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
