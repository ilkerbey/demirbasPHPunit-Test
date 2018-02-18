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
						<div class="card-block">
						<form action="demirbasaramasonuc.php" name="arama" id="search" method="post">
							<div class="row seacrh-header">
								

									<div class="col-lg-3 offset-lg-4 col-sm-6 offset-sm-1 col-xs-12">
										<div class="md-group-add-on">
														 <span class="md-add-on">
														  <i class="icofont icofont-list"></i>
														 </span>
											<div class="md-input-wrapper">
												
													<input type="text" name="arama" id="search-data" class="md-form-control" maxlength="25">
													<label>Demirbaş (Ad,Türü,Tarih,Adet) Arama</label>
													<span class="md-line"></span></div>
												
										</div>
									</div>
									<div class="col-lg-2 col-sm-4 col-xs-12">
										<button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Arama
										</button>
									</div>
								
							</div></form>
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
