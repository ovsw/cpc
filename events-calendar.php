<div data-pw-id="main">

  <?php require($config->paths->templates.'layouts/left-sidebar.inc') ?>

</div>

<div data-pw-id="main-column">
  <h1><?= $page->get("headline|title") ?></h1>

  <?php if (count($page->inner_page_slideshow)>=1): ?>
  <div  class="innerPageBannerSlideshow cycle-slideshow" data-cycle-fx="fade"  data-cycle-timeout="3000" data-cycle-speed="1000">
  <?php foreach ($page->inner_page_slideshow as $slide): ?>			
    <img src="<?= $slide->getCrop("banner_size")->url; ?>" alt="<?= $slide->description ?>" />
  <?php endforeach ?>
  </div>
  <!-- .cycle-slideshow -->
  <?php endif ?>

   <?= $page->body ?>
   <?php foreach ($page->events_calendar as $month): ?>
     <div class="collapsable_wrapper">
       <h3 class="monthName"><span><?= $month->title ?></span></h3>
          <div class="monthContent">
            <?= $month->body ?>
          </div>
       </div>
   <?php endforeach ?>
  <?= $page->embedable_content ?>
</div>