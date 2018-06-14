<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title><?= $page->get("seo_pageTitle|title") ?> | Cypress Cove Nudist Resort</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php if ($page->seo_description == "") : $autoMetaDesc = $sanitizer->truncate($page->get("body"), 140, 'word'); ?>
    <meta name="description" content="<?= $autoMetaDesc ?>" />
		<?php else: ?>
    <meta name="description" content="<?= $page->seo_description ?>" />
		<?php endif ?>


		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Le styles -->
		<?php if ($page->template == "interactive-map" || $page->template == "interactive-map2"): ?><!-- map -->
		<!-- style sheets -->
		<!-- jQuery ThemeRoller -->
		<link rel="stylesheet" type="text/css" href="/site/templates/styles/giv/custom-theme/jquery-ui-1.10.3.custom.css" />
		<!-- lhpGigaImgViewer plugin css -->
		<link rel="stylesheet" type="text/css" href="/site/templates/styles/giv/lhp_giv.css" />
		<?php endif ?>
    <link rel="stylesheet" href="/site/templates/styles/main.css">
    <link rel="stylesheet" href="/site/templates/scripts/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/site/templates/scripts/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/site/templates/scripts/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="/site/templates/scripts/tyni-scrollbar/responsive/tinyscrollbar.css">
		

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

</head>

<body<?= $page->template == "product" ? ' id="productPage"' : "" ?><?= $page->template == "store-home" ? ' id="storeHomePage"' : "" ?>>
	
	<div class="leafSpacer">
	<div class="branchesLeft"></div>
	<div class="branchesRight"></div>
	<div class="cloudsLeft"></div>
	<div class="cloudsRight"></div>
		<header>
			
			<div class="headerWrapper">
				<h1 class="mainLogo">	
					<a href="/" title="Cypress Cove Nudist Resort"><img src="/site/templates/images/cypress_logo_2017.png" alt="Cypress Cove Nudist Resort Logo"/></a>
				</h1>
				<div class="headerLinks">
					<p class="motto">just as nature intended ...</p>
					<nav>
						<ul class="topMenu">
							<?= renderMenu($pages->get("/")->top_menu_pages,$page);?>
						</ul>
					</nav>
				
				</div>
				<!-- /.headerLinks -->
				
				
				<div class="clear"></div>
				<div class="mainMenuWrapper">
					<nav>
						<ul class="mainMenu">
							<?php 
							$menuPages = $pages->get("/")->main_menu_pages;
							if (count($menuPages)) {
						        foreach ($menuPages as $item){
						            $url = $item->template == "link" ? $item->headline : $item->url;
						            $target = $item->template == "link" ? ' target="_blank"' : "";
						            if ($item->id == "1377") {
						            	$class = ' class="bookNowTopLink"';
						            }else{
										$class = ($item === $page || $item == $page->rootParent) ? ' class="active"' : "";
						            }
						            
						            
						            echo "<li".$class."><a href='".$url."'".$target.">".$item->title."</a>";
						            if ($item->id != '1' && $item->id != '1092' && count($item->children)>0) {
						                echo "<ul>";
						                foreach ($item->children as $child) {
						                	$childUrl = $child->template == "link" ? $child->headline : $child->url;
            								$childTarget = $child->template == "link" ? ' target="_blank"' : "";
						                    $subClass = ($child == $page) ? ' class="active"' : "";
						                    echo '<li'.$subClass.'><a href="'.$childUrl.'"'.$childTarget.'>'.$child->title.'</a></li>';
						                }
						                echo "</ul>";
						            }
						            echo "</li>";
						        }
						        echo "<li class='mainMenuQuickLinks'><a href='#'>Quick-Links</a>";
						        echo "<ul>";
						        	renderMenu($pages->get("/")->top_menu_pages,$page);
						        echo "</ul>";
						        echo "</li>";
						    }
						    ?>
						</ul>
						<!-- /.mainMenu -->
					</nav>
					<div class="butterfly"></div>
				</div>
			 	<!-- /.mainMenuWrapper -->

			</div>
			<!-- /.headerWrapper -->
			
		</header>

		<div class="contentWrapper">
			
			<div class="grassLeft"></div>
			<div class="grassRight"></div>
      
      <pw-region id="main">Here's where the main content goes.</pw-region>

		<div class="clear"></div>
		</div>
		<!-- /.contentWrapper -->
	
		<div class="footerOuterWrapper">
			<div class="footerWrapper">
				<div class="footer">
					<div class="lakeLeft"></div>
					<div class="lakeRight"></div>
					<footer>
						<div class="footerRight">
							<ul class="legalMenu">
								<li>| <a href="<?= $pages->get("1345")->httpUrl ?>"><?= $pages->get("1345")->title ?></a></li>
								<li>| <a href="<?= $pages->get("1346")->httpUrl ?>"><?= $pages->get("1346")->title ?></a></li>
								<li><a href="<?= $pages->get("1347")->httpUrl ?>"><?= $pages->get("1347")->title ?></a></li>
							</ul>
							<!-- /.legalMenu -->
							<a href="#" class="cypressCoveFooterLogo"><img src="/site/templates/images/cypress_footer_logo_2017.jpg" alt="Cypress Cove Resort logo" /></a>
							<a href="#" class="travelersChoiceLogo"><img src="/site/templates/images/travelers_choice_logo.jpg" alt="Winner Traveler's Chouce 2012" /></a>
						</div>
						<!-- /.footerRight -->

						<div class="footerText">
							<div class="vcard">
								<div class="org">Cypress Cove Nudist Resort</div>
								<span class="email"><a class="email" href="#">Relax@cypresscoveresort.com</a></span> <br/>
								Telephone: <span class="tel">(888) 683-3140</span>
								Fax: <span class="fax">(407) 933-3559</span>
								<div class="adr">
									<div class="street-address">4425 Pleasant Hill Road</div>
									<span class="locality">Kissimmee</span>, 
									<span class="region">Florida</span>, 
									<span class="postal-code">FL 34746</span>
									<span class="country-name">United States</span>
								</div>
							</div>
							<p class="copyRight">Copyright &copy;<?= date("Y") ?> Cypress Cove Nudist Resort <br/>All rights reserved </p>
							<p><a href="https://ovswebsites.com" target="_blank">Website by OVS Websites</a></p>

						</div>
						<!-- /.footerText -->
					</footer>
					<div class="clear"></div>
				</div>
				<!-- /.footer -->
			</div>
			<!-- /.footerWrapper -->
		</div>
		<!-- /.footerOuterWrapper -->
	</div>
	<!-- /.leafSpacer -->

	<!-- Le javascript
	================================================== -->

	<!-- include jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="/site/templates/scripts/jquery.cycle2.min.js"></script>
  <script src="/site/templates/scripts/owl-carousel/owl.carousel.min.js"></script>
  <script src="/site/templates/scripts/tyni-scrollbar/responsive/jquery.tinyscrollbar.min.js"></script>
  <script src="/site/templates/scripts/magnific-popup.min.js"></script>
  <script src="/site/templates/scripts/scripts.js"></script>

  <pw-region id="foot-js"></pw-region>



	<?php if ($page->template == "interactive-map" || $page->template == "interactive-map2"): ?>
		<!-- js files -->
		<!-- jQuery easing plugin-->
		<script type="text/javascript" src="/site/templates/scripts/giv/jquery.easing.1.3.js"></script>
		<!-- jQuery mousewheel plugin-->
		<script type="text/javascript" src="/site/templates/scripts/giv/jquery.mousewheel.min.js"></script>
		<!-- lhpGigaImgViewer plugin -->
		<script type="text/javascript" src="/site/templates/scripts/giv/jquery.lhpGigaImgViewer.js"></script>
		<script>
			$(document).ready(function(){
			var settings = {
				'viewportWidth' : '100%',
				'viewportHeight' : '100%',
				'fitToViewportShortSide' : true,  
				'contentSizeOver100' : false,
				'startScale' : 0,
				'startX' : 1860,
				'startY' : 2830,
				'animTime' : 500,
				'draggInertia' : 10,
				'imgDir' : '/site/templates/images/map/',
				'mainImgWidth' : 3454,
				'mainImgHeight' : 2303,
				'intNavEnable' : true,
				'intNavPos' : 'B',
				'intNavAutoHide' : false,
				'intNavMoveDownBtt' : true,
				'intNavMoveUpBtt' : true,
				'intNavMoveRightBtt' : true,
				'intNavMoveLeftBtt' : true,
				'intNavZoomBtt' : true,
				'intNavUnzoomBtt' : true,
				'intNavFitToViewportBtt' : true,
				'intNavFullSizeBtt' : true,
				'intNavBttSizeRation' : 1,
				'mapEnable' : true,
				'mapPos' : 'BL',
				'popupShowAction' : 'click',
				'testMode' : false
			};
	
			$('#interactiveMap').lhpGigaImgViewer(settings, 'MyHotspots');
			});
		</script>
	<?php endif ?>

	<?php if ($page->template == "product"): ?>
	<script src="/site/templates/scripts/zoom/jquery.zoom.min.js"></script>
	<script>
		$('#productImage').zoom({ url:'<?= $page->product_image->getCrop("large_version")->url ?>' });	
	</script>
	<?php endif ?>

	<!-- GA CODE -->
  <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-30885979-1', 'auto');
	ga('send', 'pageview');

	</script>

	<?php if ($page->template == "store-home" || $page->template == "product"): ?>
		<!-- FOXYCART -->
		<script src="//cdn.foxycart.com/cypresscove/loader.js" async defer></script>
		<!-- /FOXYCART -->
		<script>
		$("select#productSize").on('change', function() {
  			//alert( $(this).val() ); 
  			if ($(this).val().indexOf('p:') >= 0) { // if we spot a price changer
  				var n = $(this).val().lastIndexOf('p:');
				var modifiedPrice = $(this).val().substring(n + 2);
  				$('p.productPrice').html("$"+modifiedPrice.replace(/}\s*$/, ''));
  			}else{
  				$('p.productPrice').html("$"+<?= $page->price ?>);
  			};
		});
		</script>
	<?php endif ?>
	

</body>
</html>