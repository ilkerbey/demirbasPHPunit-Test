<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
<html lang="en">

<?head("Demirbas Arama");?>
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
                    <h4>Demirbas Arama</h4>
                </div>
            </div>
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
							<div class="col-md-12">
								<table id="simpletable" class="table dt-responsive table-striped table-bordered nowrap dataTable dtr-inline" role="grid" aria-describedby="simpletable_info" style="width: 1587px;">
								<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 257px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">
										Adı
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 380px;" aria-label="Position: activate to sort column ascending">
										Türü
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 159px;" aria-label="Age: activate to sort column ascending">
										Adet
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 185px;" aria-label="Start date: activate to sort column ascending">
										Tarih
									</th>
									<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" style="width: 159px;" aria-label="Salary: activate to sort column ascending">
										Fiyat
									</th>
								</tr>
								</thead>
								
								<tbody>
								<tr role="row" class="odd">
									<td tabindex="0" class="sorting_1">
										Airi Satou
									</td>
									<td>
										Accountant
									</td>
									<td>
										Tokyo
									</td>
									<td>
										33
									</td>
									<td>
										2008/11/28
									</td>
									
								</tr>
								
								</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">
									Showing 1 to 10 of 57 entries
								</div>
							</div>
							<div class="col-md-7">
								<div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
									<ul class="pagination">
										<li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
										<li class="paginate_button page-item active"><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
										<li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
										<li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
										<li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
										<li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
										<li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
										<li class="paginate_button page-item next" id="simpletable_next"><a href="#" aria-controls="simpletable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
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
            <!-- 4-blocks row start -->
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
