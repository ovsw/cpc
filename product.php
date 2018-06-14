<div data-pw-id="main">

  <?php require($config->paths->templates.'layouts/left-sidebar.inc') ?>

</div>

<div data-pw-id="left-sidebar">

<?php require($config->paths->templates.'includes/store-sidebar.inc') ?>

</div>

<div data-pw-id="main-column">

	<div class="productInfo">
		<h1><?= $page->title ?></h1>
		<?= $page->body ?>

		<!-- foxycart form  -->
		<form action="https://cypresscove.foxycart.com/cart" method="post" accept-charset="utf-8" class="productPageForm">
		<input type="hidden" name="name" value="<?= $page->title ?>" />
		<input type="hidden" name="price" value="<?= $page->price ?>" />
		<?php if ($page->weight): ?>
		<input type="hidden" name="weight" value="<?= $page->weight ?>" />	
		<?php endif ?>
		<!-- <input type="hidden" name="code" value="sku123" /> -->
		<?php if ($page->size_toggle && count($page->sizes) > 0): ?>
			<?php $visibleSizes = 0; foreach ($page->sizes as $size) {
				if (!($size->hide_size)) {
					$visibleSizes++;
				}
			} ?>
			<?php if ($visibleSizes > 0): ?>
			<label class="label_left">Size</label>
			<select name="size" id="productSize">
			    <?php foreach ($page->sizes as $size): ?>
			    	<?php if (!($size->hide_size)): ?>
			    		<?php if ($size->price != ""): ?>
			    		<option value="<?= $size->title."{p:".$size->price."}" ?>"><?= $size->title ?></option>
			    		<?php else: ?>
			    		<option value="<?= $size->title ?>"><?= $size->title ?></option>
			    		<?php endif ?>
			    		
			    	<?php endif ?>
			    <?php endforeach ?>
			</select>
			<?php endif ?>
			
		<?php endif ?>
		<p class="productPrice">$<?= $page->price ?></p>
		<input type="submit" value="Add to Cart" class="submit" />
		</form>
		<!-- /.foxycart form -->
	</div>
	<!-- /.productInfo -->
	<div class="productImage woodenFrame">
		<div class="borderTop">
			<div class="borderRight">
				<div class="borderBottom">
					<div class="borderLeft">
						<div class="corner_top_left"></div>
						<div class="corner_top_right"></div>
						<div class="corner_bottom_right"></div>
						<div class="corner_bottom_left"></div>
						<span class="zoomImage" id="productImage">
							<img src="<?= $page->product_image ? $page->product_image->getCrop("thumbnail")->url : "http://placehold.it/300x300" ?>" alt="<?= $page->product_image->description ?>" width="252" height="252" />	
						</span>
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
	

		

</div>