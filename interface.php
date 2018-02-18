<?php require_once("dbcon.php");

session_start();


		function head($baslik){;
?>

<head>
    <title><?=$baslik;?></title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets\images\blogo.png" type="image/x-icon">
    <link rel="icon" href="assets\images\blogo.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets\icon\icofont\css\icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets\icon\simple-line-icons\css\simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="assets\plugins\charts\chartlist\css\chartlist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="assets\css\svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="assets\plugins\charts\echarts\js\echarts-all.js"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets\css\main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets\css\responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color">
	
	<script type="text/javascript">
		function ShowConfirm() {
        var confirmation = confirm("Emin misiniz?");
        if (confirmation) {
          alert("Kayıt Silinmiştir.");
        }
        return confirmation;
    };
		
	
	</script>

</head>

<? }?>



<? function seo($s) {

	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 return $s;

 }?>

<? function Reklam() { ?>

	<div class="sidebar-box">
						<div class="sidebar-title">
							<span>Reklamlar</span>
						</div>
						<!--Product carousel Start-->
						<div id="product-carousel-owl" class="owl-carousel owl-theme">
							<!-- product carousel wrapper start -->
							<div class="item">
								<div class="product-carousel">
									<!-- product image start -->
									 <div class="product-carousel-image">
									 <a href=""><img src="img\product\1.jpg" alt=""></a>
									 </div>
									<!-- product image end -->
									<!-- product price start -->
									 <div class="product-carousel-price">24 $ </div>
									 <!-- product price end -->
									 <!-- product name start -->
									 <div class="product-carousel-name"><a href="#"><h5>Lorem ipsum dolor sit amet</h5></a></div>
									  <!-- product name end -->
									  <!-- product add the cart button start -->
									 <div class="product-carousel-add-btn"><a href="#">Add the cart</a></div>
									<!-- product add the cart button start -->
								</div>
							</div>
							<!-- product carousel wrapper start -->
							<div class="item">
								<div class="product-carousel">
									<!-- product image start -->
									 <div class="product-carousel-image">
									 <a href=""><img src="img\product\2.jpg" alt=""></a>
									 </div>
									<!-- product image end -->
									<!-- product price start -->
									 <div class="product-carousel-price">24 $ </div>
									 <!-- product price end -->
									 <!-- product name start -->
									 <div class="product-carousel-name"><a href="#"><h5>Lorem ipsum dolor sit amet</h5></a></div>
									  <!-- product name end -->
									  <!-- product add the cart button start -->
									 <div class="product-carousel-add-btn"><a href="#">Add the cart</a></div>
									<!-- product add the cart button start -->
								</div>
							</div>
							<!-- product carousel wrapper start -->
							<div class="item">
								<div class="product-carousel">
									<!-- product image start -->
									 <div class="product-carousel-image">
									 <a href=""><img src="img\product\3.jpg" alt=""></a>
									 </div>
									<!-- product image end -->
									<!-- product price start -->
									 <div class="product-carousel-price">24 $ </div>
									 <!-- product price end -->
									 <!-- product name start -->
									 <div class="product-carousel-name"><a href="#"><h5>Lorem ipsum dolor sit amet</h5></a></div>
									  <!-- product name end -->
									  <!-- product add the cart button start -->
									 <div class="product-carousel-add-btn"><a href="#">Add the cart</a></div>
									<!-- product add the cart button start -->
								</div>
							</div>
							<!-- product carousel wrapper start -->
						</div>
						<!--Product carousel Start-->
					</div>

<?}?>

<?php function menu_overlay() { ?>
	
	<!-- Mobile Menu overlay Start -->
		<div class="p-overlay"></div>
		<!-- Mobile Menu overlay End --> 
		<!-- Start Page Loading -->
		<div id="loader-wrapper">
		  <div id="loader"></div>
		  <div class="loader-section section-left"></div>
		  <div class="loader-section section-right"></div>
		</div>
		<!-- End Page Loading -->

<? } ?>	

<? function en_cok_goruntulenen() { ?>
	<div class="sidebar-box">
						<div class="sidebar-title">
							
								<span>Peynir Ekmek Gibi Gidenler   </span>
								
						</div>
						<div class="lines"></div>

						<ul class="list">
						
							<? $baslik = tabloCek("bloglar","*","ORDER BY blog_hit DESC LIMIT 5");
								
								$deger=1;
								foreach($baslik as $kategori){
									if($deger==1)
									{
										$deger=0;
									}
									else{
										$article="";
									}
									
															
							?>
							<li><a href="<?=seo($kategori["Id"].'/'.$kategori["Baslik"]);?>"><span  class="badge"><strong ><i class="fa fa-eye" ></i><?=$kategori["blog_hit"]?></strong>  </span> <?=$kategori["Baslik"];?></li>
							
							<?}?>
						</ul>	
					</div>



<? } ?>	

<?php function admin_navbar() { ?>

	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="sweet-gray sweet-go-back-from-screen">&nbsp;</span>
          </a>
          <div class="nav-collapse">            
            <ul class="nav main_nav" role="navigation">                
            
			</ul> 
            <ul class="main_nav nav pull-right">                
                <li id="search" class="search"> 
                  <a href="#">Arama</a> 
                  <div class="search_cont">
                      <form class="navbar-search form-search">                          
                          <input type="text" class="input-medium search-query" placeholder="Search">
                          <button type="submit">Arama</button>
                      </form> 
                  </div>              
                </li> 
                <li id="settings" class="styled dropdown settings">
                </li>
                <li id="profile" class="styled dropdown profile">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile</a>
					<? $hakkimda = tablocek("hakkimda","*","ORDER BY Id");
						foreach($hakkimda as $row){
						
					?>
				   <ul class="dropdown-menu top_menu">                        
                        <li class="profile group">
                          <img src="<?=$row["resim"]?>" width="50" height="50" alt="User">
                          <ul>
                            <li><strong>İlker bey</strong></li>
                            <li>@ilkerbey</li>
                            <li><span>Administrator</span></li>
                          </ul>
                        </li>
                        <li><a class="mn_settings" href="#"><span>Ayarlar</span></a></li>
                        <li><a class="mn_profile" href="hakkimda.php"><span>Profilim</span></a></li>
                        <li><a class="mn_logout" href="cikis.php"><span>Çıkış</span></a></li>
                    </ul>
						<?}?>
                </li>                          
            </ul>           
          </div>
          <h1 class="brand"><a href="editor.php">İlker Bey</a></h1>                                       
        </div>
      </div>
    </div>



<? } ?>

<? function admin_footer() { ?>
	
	<footer>
        <p>&copy; ilkerbey.com - İlkerbey 2017</p>
      </footer>



<?}?>


<? function admin_kategori() {  global $db ; ?>
		<aside class="main-sidebar hidden-print ">
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                
            </div>
            <!-- sidebar profile Menu-->
             
            <!-- Sidebar Menu-->
									
            <ul class="sidebar-menu">
                <li class="nav-level">Ayrıntılar</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Hesap Özeti</span><i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                      <div class="card-block">
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
								
							</li>
						</ul>
					</div>
					<div class="card-block">
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
						<? 
									$tablo = tablocek("demirbas","*","ORDER BY demirbasID ASC");
									$toplamx=0;
									foreach($tablo as $row){$toplamx+=$row["piece"]*$row["price"];}
											?>
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
                    </ul>
                </li>
               

            
            
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Two
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Two</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Three
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>Level Three</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>

<?} ?>
		
<? function menu() { global $db; ?>
	<header class="main-header-top hidden-print">
        <a href="index.php" class="logo"><img class="img-fluid able-logo" src="assets\images\beystok.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--> <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->

                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                     
					  <button type="submit" name="kaydet" onClick="window.print()" class="btn btn-success waves-effect waves-light m-r-30">Pdf</button>
                    </li>
             
                    <!-- chat dropdown -->
                   
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                    <!-- User Menu-->
					<?if($_SESSION) { ?>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="img-circle " src="assets\images\avatar-1.png" style="width:40px;" alt="User Image"></span>
                            <span><?=$_SESSION["adi"];?> <b></b> <i class=" icofont icofont-simple-down"></i></span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            
                            <li><a href="cik.php"><i class="icon-logout"></i> Logout</a></li>

                        </ul>
                    </li> <?}?>
                </ul>

                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search...">

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan">
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona">
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets\images\avatar-1.png" alt="PagePreloadingEffect">
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="assets\images\avatar-1.png" alt="DraggableDualViewSlideshow">
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                           <a class="dummy-media-object" href="#!">
                                <img src="assets\images\avatar-1.png" alt="TooltipStylesInspiration">
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets\images\avatar-1.png" alt="NotificationStyles">
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div><!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </nav>
    </header>

<?php } ?>

<? function hakkinda_box() { ?>
	
	<div class="sidebar-box no-padding">
						<div class="profile-header">
							<div class="profile-header-image" style="background-image:url(img/kapak.jpg)"></div>
							<div class="profile-image">
								<a href="img\ilker.jpg" data-lightbox="example-set">
									<img src="img\ilker.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="profile-details">
							<h3>İlker Bey</h3>
							 Kafasına Esen İlginç Bilgileri,Gezip Gördüğü Yerleri, Katıldığı Seminerler Hakkında Video veya Yazan Bir Bey'dir.
							<div class="social">
								<ul>
									<li><a target="_align" href="https://www.facebook.com/yasin.ilker.9028" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a target="_align" href="https://www.twitter.com/ilkerbbey" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a target="_align" href="https://www.instagram.com/ilkerbbey" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a target="_align" href="https://www.youtube.com/c/ilkerbey" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
	
<?}?>
<? function aylik_soz() { ?>

	<div class="postit">
	Oynamadan Kazanamazsın ...
	</div>


<?}?>

<?php function footer() { ?>
<!--footer start-->
			<footer class="footer" id="footer-bottom">
				<!--footer container start-->
				<div class="container">
					<!--footer copyright start-->
					<div class="copyright">Copyright <i class="fa fa-copyright"></i> All Right Reserved 2017 <strong>İlker Bey</strong></div>
					<!--footer copyright end-->
				</div>
				<!--footer container end-->
			</footer>
			<!--footer end-->


<? } ?>