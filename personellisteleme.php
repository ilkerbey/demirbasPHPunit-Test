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
                    <h4>Personel Listeleme</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="card-block">
		<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-header-text">Simple Table</h5>
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
										Soyadı
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 190px;" aria-label="Office: activate to sort column ascending">
										Hangi İşlem Yapılsın
									</th>
									
								</tr>
								</thead>
								
								<tbody>
								<? $tablo = tablocek("personnel","*","ORDER BY perID desc");
									
									$sayfada = 15; // sayfada gösterilecek içerik miktarını belirtiyoruz.
									$toplam_icerik = $tablo->rowCount();
									
									$toplam_sayfa = ceil($toplam_icerik / $sayfada);
									 
									$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
									 
									if($sayfa < 1) $sayfa = 1; 
									if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
									 
									$limit = ($sayfa - 1) * $sayfada;
									$tablo=tablocek("personnel","*","ORDER BY perID desc LIMIT {$limit}, {$sayfada}");
											
									
									foreach($tablo as $row){
								
								?>
								<tr role="row" class="odd">
									<td tabindex="0" class="sorting_1">
										<?=$row["perName"]?>
									</td>
									<td>
										<?=$row["perSurname"]?>
									</td>
									<td>
										<a class="col-md-7 "href="personelguncelle.php?id=<?=$row["perID"]?>">  
											<font color="blue">                   
											   <i class="icon-pencil"> Düzenle</i>
													
											</font>     
										 </a>
										 
										 <a  href="personelsil.php?id=<?=$row["perID"]?>">  
											<font color="red">                   
											   <i class="icon-dislike" onclick="return ShowConfirm();"> Sil</i>
													
											</font>     
										 </a>
									</td>
								
								</tr>
									<?}?>
								</tbody>
								</table>
							</div>
						</div>
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
