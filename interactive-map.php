<div data-pw-id="main">

  <?php require($config->paths->templates.'layouts/left-sidebar.inc') ?>

</div>

<div data-pw-id="main-column">
  <h1><?= $page->get("headline|title") ?></h1>

  <!-- viewer container -->
  <div id="interactiveMap" style="width:100%; height:598px; overflow:hidden; border:solid 1px #a6a6a6; background:#000;"></div>

  <!-- hotspots container -->
  <div id="MyHotspots" style="display:none;">		
    <!-- hotspot -->
    <?php foreach($page->children as $map_objective): ?>
      <div class="lhp_giv_hotspot" data-x="<?= $map_objective->x_pos ?>" data-y="<?= $map_objective->y_pos ?>" data-visible-scale="0">
        <!-- marker -->
        <div class="lhp_giv_marker pos-<?= $map_objective->anchor ?>">
          <div class="<?php echo str_replace(" ", "_",preg_replace("/(?![-])\p{P}/u", "", $map_objective->title)); ?>">
            <?php 
            if ($map_objective->anchor == "BR" || $map_objective->anchor == "TR" || $map_objective->anchor == "R") {
              $arrowFloat = "right";
            }elseif($map_objective->anchor == "BL" || $map_objective->anchor == "TL"){
              $arrowFloat = "left";
            }elseif($map_objective->anchor == "T" || $map_objective->anchor == "B"){
              $arrowFloat = "none";
            }
            if ($map_objective->anchor === "R") {
              $labelFloat = "left";
            }elseif($map_objective->anchor === "L"){
              $labelFloat = "right";
            }
            if ($map_objective->anchor == "TR" || $map_objective->anchor == "BR") {
              $labelFloat = "none";
            }
            if ($map_objective->anchor == "TL" || $map_objective->anchor == "BL") {
              $labelFloat = "none";
            }
            ?>
            <?php if ($map_objective->anchor == "TL" || $map_objective->anchor == "TR" || $map_objective->anchor == "L" || $map_objective->anchor == "T"): ?>
              <img src="/site/templates/images/mapAssets/arrow-<?= $map_objective->anchor ?>.png" alt="arrow" style="float:<?= $arrowFloat ?>">
            <?php endif ?>
            <div class="label" style="float:<?= $labelFloat ?>"><?= $map_objective->title ?></div>
            <?php if ($map_objective->anchor == "BL" || $map_objective->anchor == "BR" || $map_objective->anchor == "R"): ?>
              <img src="/site/templates/images/mapAssets/arrow-<?= $map_objective->anchor ?>.png" alt="arrow" style="float:<?= $arrowFloat ?>">
            <?php endif ?>
          </div>
          
        </div>
        <!-- pop-up -->
        <div class="lhp_giv_popup pos-R">
        </div>
      </div>
      <!-- end hotspot -->
    <?php endforeach; ?>		
  </div>
  <!-- /#MyHotspots -->

  <?php foreach($page->children as $map_objective): ?>

  <div id="<?php echo str_replace(" ", "_",preg_replace("/(?![-])\p{P}/u", "", $map_objective->title)); ?>" style="display: none;" class="mapPopup">
    <div class="contentPopup">
      <div class="close"></div>
      <div class="mainImage">
        <img src="<?= $map_objective->objective_images->first() ? $map_objective->objective_images->first()->getCrop('main_image')->url  : "https://placehold.it/400x400"; ?>"  alt="" />
        <div class="locationDescription">
          <h3><?= $map_objective->title ?></h3>
          <?= $map_objective->objective_description ?>
                  
        </div>
        <!-- /.locationDescription -->
      </div>
      <!-- /.mainImage -->
      <ul class="thumbs">
      <?php foreach($map_objective->objective_images as $objective_image): ?>	
        <li>
          <img src="<?= $objective_image->getCrop('thumbnail')->url  ?>" data-bigImage="<?=$objective_image->getCrop('main_image')->url ?>" alt="" />
        </li>
      <?php endforeach; ?>				
      </ul>			
      <div style="clear: both;"></div>
    </div>
    <!-- /.contentPopup -->
  </div>
  <!-- /.mapPopup -->

  <?php endforeach; ?>	

  <?= $page->body ?>
</div>