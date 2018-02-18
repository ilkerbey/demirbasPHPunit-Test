<?require_once("interface.php");
session_start();
if(!$_SESSION["oturum"]) header("location:login.php");?>
<!DOCTYPE html>
<html lang="en">

<?head("Bey Stok");?>
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
                <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <a href="demirbas.php">  
								<font color="white">                   
								   <i class="icon-user"></i>
										<div class="f-right">
											   <h3 >Demirbas Bölümü </h3>
										</div>
								</font>     
							 </a>
                        </div>
                       
                    </div>
                </div><?if($_SESSION){ if($_SESSION["durumu"]==1){?>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <a href="personel.php">  
								<font color="white">                   
								   <i class="icon-people"></i>
										<div class="f-right">
											   <h3 >Personel Bölümü </h3>
										</div>
								</font>     
							 </a>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-sm-6">
						<div class="bg-info dasboard-info">
							<div class="sales-warning">
								<a href="kullanıcı.php">  
									<font color="white">                   
									   <i class="icon-bag"></i>
											<div class="f-right">
												   <h3 >Kullanıcı Ekle</h3>
											</div>
									</font>     
								 </a>
							</div>
							<div class="bg-dark-warning">
								
							</div>
						</div>
					</div> 				<?}}?>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <a href="oda.php">  
								<font color="white">                   
								   <i class="icon-plus"></i>
										<div class="f-right">
											   <h3 >Oda Bölümü </h3>
										</div>
								</font>     
							 </a>
                        </div>
                        <div class="bg-dark-warning">
                            
                        </div>
                    </div>
                </div>
			   <div class="col-lg-3 col-sm-6">
				<div class="bg-danger dasboard-danger">
					<div class="sales-warning">
						<a href="odaatama.php">  
							<font color="white">                   
							   <i class="icon-check"></i>
									<div class="f-right">
										   <h3 >Oda Demirbas Atama</h3>
									</div>
							</font>     
						 </a>
					</div>
					<div class="bg-dark-warning">
						
					</div>
				</div>
			</div> <!-- Toplam Masraf Döngüsü -->
			<?/*
								$row= $db ->prepare("Select * from demirbas order by demirbasID desc");
								$row -> execute(array());
								$row  -> fetch(PDO::FETCH_ASSOC);
								$x = $row -> rowCount();
								 foreach($row as $row){
									$a =$row["piece"];
									$b = $row["price"];
									$sonuc = $a*$b;
									$toplam =+ $sonuc;
									$x++;
									
								}
								$toplam =0;
								foreach($row as $row){
									for($s =1 ;$s <= $x ; $s++){
										
											$a =$row[$s];
											$b = $row[$s];
											echo $s."=".$a."<br />";
											echo $s."=".$b;
										
										
										
										
									}	
								}
							echo "toplam =" .$toplam;*/	
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


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
<!-- Warning Section Ends -->

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
<script src="assets\js\menu.js"></script>

<script type="text/javascript" src="assets\js\main.js"></script>
<script type="text/javascript" src="assets\pages\dashboard.js"></script>
<script type="text/javascript" src="assets\pages\elements.js"></script>


</body>

</html>
