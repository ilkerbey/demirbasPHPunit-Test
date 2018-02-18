<?require_once("interface.php");session_start();
if(!$_SESSION["oturum"]) header("location:login.php");

?><!DOCTYPE html>
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
                    <h4>Hoş Geldiniz</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row m-b-30 dashboard-header">
			<?if($_SESSION){ if($_SESSION["durumu"]==1){?>
                <div class="col-lg-4 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <a href="odaarama.php">  
								<font color="white">                   
								   <i class="icon-puzzle"></i>
										<div class="f-right">
											   <h3 >Oda Arama </h3>
										</div>
								</font>     
							 </a>
                        </div>
                       
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6">
                    <div class="dashboard-info bg-info">
                        <div class="sales-primary">
                            <a href="odaekle.php">  
								<font color="white">                   
								   <i class="icon-plus"></i>
										<div class="f-right">
											   <h3 >Oda Ekleme </h3>
										</div>
								</font>     
							 </a>
                        </div>
                       
                    </div>
                </div> <!--
                <div class="col-lg-4 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <a href="">  
								<font color="white">                   
								   <i class="icon-refresh"></i>
										<div class="f-right">
											   <h3 >Oda Güncelleme</h3>
										</div>
								</font>     
							 </a>
                        </div>
                        
                    </div>
                </div> -->
                <div class="col-lg-4 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <a href="odalisteleme.php">  
								<font color="white">                   
								   <i class="icon-list"></i>
										<div class="f-right">
											   <h3 >Oda Listeleme</h3>
										</div>
								</font>     
							 </a>
                        </div>
                        <div class="bg-dark-warning">
                            
                        </div>
                    </div>
                </div> <!-- 
				<div class="col-lg-4 col-sm-6">
                    <div class="bg-danger dasboard-danger">
                        <div class="sales-warning">
                            <a href="">  
								<font color="white">                   
								   <i class="icon-ban"></i>
										<div class="f-right">
											   <h3 >Oda Silme</h3>
										</div>
								</font>     
							 </a>
                        </div>
                        <div class="bg-dark-warning">
                            
                        </div>
                    </div>
                </div> -->
                
			<?} else {?>
			
			
			<div class="col-lg-4 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <a href="odaarama.php">  
								<font color="white">                   
								   <i class="icon-puzzle"></i>
										<div class="f-right">
											   <h3 >Oda Arama </h3>
										</div>
								</font>     
							 </a>
                        </div>
                       
                    </div>
                </div>
			
			
			
			 <div class="col-lg-4 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <a href="odalisteleme.php">  
								<font color="white">                   
								   <i class="icon-list"></i>
										<div class="f-right">
											   <h3 >Oda Listeleme</h3>
										</div>
								</font>     
							 </a>
                        </div>
                        <div class="bg-dark-warning">
                            
                        </div>
                    </div>
                </div> 
			
			
			
			
			
			
			
			<?}}?>
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
