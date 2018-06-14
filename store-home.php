<div data-pw-id="main">

  <?php require($config->paths->templates.'layouts/left-sidebar.inc') ?>

</div>

<div data-pw-id="left-sidebar">

<?php require($config->paths->templates.'includes/store-sidebar.inc') ?>

</div>

<div data-pw-id="main-column">

	<h1>STORE</h1>
	
	<ul class="storeProductsListing">
	<?php $products = $pages->find("template=product") ?>
	<?php foreach ($products as $product): ?>
		<li class="shopListingItem">
			<a href="<?= $product->url ?>">
				<div class="productListingImage woodenFrame">
					<div class="borderTop">
						<div class="borderRight">
							<div class="borderBottom">
								<div class="borderLeft">
									<div class="corner_top_left"></div>
									<div class="corner_top_right"></div>
									<div class="corner_bottom_right"></div>
									<div class="corner_bottom_left"></div>
									<img src="<?= $product->product_image ? $product->product_image->getCrop("thumbnail")->url : "http://placehold.it/300x300" ?>" alt="<?= $product->product_image->description ?>">
									<div class="clear"></div>
								</div>
								<!-- /.borderLeft -->
							</div>
							<!-- /.borderBottom -->
						</div>
						<!-- /.borderRight -->
					</div>
					<!-- /.topRowTopBorder -->
				</div>
				<!-- /.woodenFrame -->
			
				<h3><?= $product->title ?></h3>
			</a>
		</li>
	<?php endforeach ?>

	</ul>
	

</div>