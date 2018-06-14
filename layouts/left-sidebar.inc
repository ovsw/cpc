<div class="twoColumnsLeft" data-pw-id="left-sidebar">
<p class="adnotation" id="sideMenuToggle">Sub-Pages &#9660;</p>
	<nav>
		<ul class="sideMenu">
			<?= renderSideMenu($page->rootParent->children,$page);?>
		</ul>
	</nav>
</div>
<!-- /.leftSidebar -->

<?php 
	if (($page->template != "interactive-map") && ($page->template != "store-home") && ($page->template != "product") && ($page->id != "1012") && ($page->id != "1018")) {
		$contentClass = " richTextContent";
	}else{
		$contentClass = "";
	}
 ?>

<div class="twoColumnsMain<?= $contentClass ?>">
	<section  role="main" data-pw-id="main-column">		
		main column goes here
	</section>
</div>
<!-- /.mainColumn -->


