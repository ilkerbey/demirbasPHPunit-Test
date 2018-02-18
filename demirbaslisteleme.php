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
                    <h4>Demirbas Listeleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
		<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-header-text">
				<button type="button"href="index.php"class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="">
                                  <i class="icofont icofont-home "></i><span  class="m-l-10">Anasayfa</span> 
				</button></h5>
			</div>
			<div class="card-block">
				<div class="data_table_main">
					<div id="simpletable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4">
						<div class="row">
							
							<div class="col-md-6">
								<div id="simpletable_filter" class="dataTables_filter">
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<table id="simpletable" class="table dt-responsive table-striped table-bordered nowrap dataTable dtr-inline" role="grid" aria-describedby="simpletable_info" style="width: 1587px;">
								<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 257px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">
										Adı
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 380px;" aria-label="Position: activate to sort column ascending">
										Kodu
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 380px;" aria-label="Position: activate to sort column ascending">
										Demirbas Türü ID
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 380px;" aria-label="Position: activate to sort column ascending">
										Fakulte ID
									</th><?if($_SESSION){ if($_SESSION["durumu"] == 1){?>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 190px;" aria-label="Office: activate to sort column ascending">
										Hangi İşlem Yapılsın
									</th><?}}?>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 159px;" aria-label="Age: activate to sort column ascending">
										Adet
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 185px;" aria-label="Start date: activate to sort column ascending">
										Alım Tarihi
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 159px;" aria-label="Salary: activate to sort column ascending">
										Fiyat
									</th>
								</tr>
								</thead>
								
								<tbody>
								<? $tablo = tablocek("demirbas","*","ORDER BY demirbasID asc");
									
									$sayfada = 15; // sayfada gösterilecek içerik miktarını belirtiyoruz.
									$toplam_icerik = $tablo->rowCount();
									
									$toplam_sayfa = ceil($toplam_icerik / $sayfada);
									 
									$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
									 
									if($sayfa < 1) $sayfa = 1; 
									if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
									 
									$limit = ($sayfa - 1) * $sayfada;
									$tablo=tablocek("demirbas","*","ORDER BY demirbasID DESC LIMIT {$limit}, {$sayfada}");
											
									$toplamx=0;
									foreach($tablo as $row){
										$toplamx+=$row["piece"]*$row["price"];
								
								?>
								<tr role="row" class="odd">
									<td tabindex="0" class="sorting_1">
										<?=$row["demirbasName"]?>
									</td>
									<td>
										<?=$row["demirbasCode"]?>
									</td>
									<td>
										<?=$row["demirbasTypeID"]?>
									</td>
									<td >
										<?=$row["facultyID"]?>
									</td><?if($_SESSION){ if($_SESSION["durumu"]==1){?>
									<td>
										<a class="col-md-6 "href="demirbasguncelleme.php?id=<?=$row["demirbasID"]?>">  
											<font color="blue">                   
											   <i class="icon-pencil"> Düzenle</i>
													
											</font>     
										 </a>
										 
										 <a class="col-md-6 " href="demirbassil.php?id=<?=$row["demirbasID"]?>">  
											<font color="red">                   
											   <i class="icon-dislike" onclick="return ShowConfirm();"> Sil</i>
													
											</font>     
										 </a>
									</td><?}}?>
									<td>
										<?=$row["piece"]?>
									</td>
									<td>
										<?=$row["purchaseDate"]?>
									</td>
									<td>
										₺<?=$row["price"]?>
									</td>
								</tr>
									<?}?>
								</tbody>
								</table>
							</div>
						</div>
						<div class="row" float="right">
							<div class="card-block col-md-2">
							
								<? $toplam=$db -> query("SELECT SUM(piece) AS toplam FROM demirbas");
									 $toplam ->execute();
										$row = $toplam -> fetch(PDO::FETCH_ASSOC);
										$roow=$row['toplam'];
										
													
													?>
								<div class="media d-flex order-counter">
									<div class="media-left media-middle">
										<div class="new-orders">
											<i class="icofont icofont-users bg-warning"></i>
										</div>
									</div>
									
									<div class="media-body">
										<span class="counter-txt">
											<span class="counter"><?=$roow?> </span>
										</span>
										<h6> <font size="2px">Toplam Demirbaş</font></h6>
									</div>
								</div>
								<ul>
									<li class="new-users">
										
								</ul>
							</div>
							<div class="card-block col-md-2">
								<? $toplam=$db -> query("SELECT SUM(total) AS toplam FROM apartdemirbas");
									 $toplam ->execute();
										$row = $toplam -> fetch(PDO::FETCH_ASSOC);
										$roow=$row['toplam'];
													
													?>
								<div class="media d-flex order-counter">
									<div class="media-left media-middle">
										<div class="new-orders">
											<i class="icofont icofont-users bg-warning"></i>
										</div>
									</div>
									
									<div class="media-body">
										<span class="counter-txt">
											<span class="counter"><?=$roow?> </span>
										</span>
										<h6>Toplam Stok</h6>
									</div>
								</div>
								<ul>
									<li class="new-users">
										
									</li>
								</ul>
							</div>
							<div class="card-block">
                                    <div class="media d-flex order-counter">
                                        <div class="media-left media-middle">
                                            <div class="new-orders">
                                                <i class="icofont icofont-cur-dollar bg-success"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="counter-txt">
                                                ₺  <span class="counter"><?=$toplamx;?></span>
                                            </span>
                                            <h6>Toplam Masraf</h6>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="new-users"></li>
                                    </ul>
								</div>
							</div>
							</li>
						<div class="row">
							<div class="col-md-5">
								<div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">

								</div>
							</div>
							<div class="col-md-7">
								<div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
									<ul class="pagination">
										<? if( $sayfa >= 1 ) {
											for($s = 1; $s <= $toplam_sayfa; $s++) {
											   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
												  echo '<li class="paginate_button page-item active "><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">'.$s.'</a></li>';
											   } else {
												  echo' <li class="paginate_button page-item "><a href="?sayfa='.$s.'" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link"> '.$s.'</a></li>';
												  
											   }
										} }	?>
										
										
										
									</ul>
								</div>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="form-group col-md-4 " style="float:right">
						<? 
							$typeID = tablocek("demirbastype","*","");
							?> 
							<label for="exampleSelect2" class="form-control-label ">ID || Adları "<font color="green">Demirbas</font>"</label>
								<select multiple="" class="form-control multiple-select" id="exampleSelect2">
									<?foreach($typeID as $row) {?>
										<option name="turu"><?=$row["demirbasTypeID"]?> || <?=$row["demirbasTypeName"]?></option>
									<?}?>                                        
							</select>
								
						</div>
						<div class="form-group col-md-4 " style="float:left">
						<? 
							$typeID = tablocek("faculty","*","");
							?> 
								<label for="exampleSelect2" class="form-control-label ">ID || Adet || Adları "<font color="green">Fakulte</font>"</label>
								<select multiple="" class="form-control multiple-select" id="exampleSelect2">
								<?foreach($typeID as $row) {?>
																<option name="turu"><?=$row["facultyID"]?> || <?=$row["facultyName"]?></option>
																<?}?>                                        
								</select>
								
						</div>
						
					</div>	
					</div>
			</div>
		</div>
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
