<?require_once("interface.php");
session_start();
if(!$_SESSION["oturum"]) header("location:login.php");?>
<!DOCTYPE html>
<html lang="en">

<?head("Oda Bölümü");?>
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
                    <h4>Oda Güncelleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
			<?
				$id = $_GET["id"];
				$row= vericek("room","*","roomID",$id);
				if($_POST){
				
					$adi=p("adi",true);
					$depID=p("depID",true);
						
					$typeID = tablocek("department","*","");
					$typeID -> execute();
					$x = $typeID -> fetchAll(PDO::FETCH_ASSOC);
					$xx = count($x);
					if($depID > 0 &&   $depID<= $xx){
					
					
					$update = $db -> prepare("update room set 
						
							roomName = ?,
							departmentID = ?
					
							where roomID = ?
						
						");
						
						$d = $update -> execute(array($adi,$depID,$id));
						
						if($d){
							
							echo '<div class="alert alert-success"> Oda Başarı ile güncellendi!!!! </div>';
							
						}
						
						else {
							
							echo '<div class="alert alert-danger"> Oda Eklenirken Bir Hata Oluştu !!!! </div>';
							
						}
						
					}
					else {
						
							echo '<div class="alert alert-warning">Lütfen Tabloya Bakarak Bir ID giriniz!!!! </div>';
						
					}
				}
				
				else {
					
					
			?>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Adı</label>
				<div class="col-sm-10">
					<input class="form-control" name="adi" type="text" value="<?=$row["roomName"]?>" maxlength="25" id="example-text-input" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Departman ID</label>
				<div class="col-sm-10">
					<input class="form-control" name="depID" type="number" value="<?=$row["departmentID"]?>"  id="example-search-input" required>
				</div>
				</div>
			
			<button type="submit"  class="btn btn-success waves-effect waves-light m-r-30">Kaydet</button>
			
				</form ><?}?>
	</div>
	<div class="form-group col-md-4 " style="float:right">
		<? 
		$typeID = tablocek("department","*","");
		?> 
		<label for="exampleSelect2" class="form-control-label ">Departman ID || Adları</label>
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
