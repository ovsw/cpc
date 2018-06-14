<div data-pw-id="main">

  <?php require($config->paths->templates.'layouts/left-sidebar.inc') ?>

</div>

<div data-pw-id="main-column">

  <h1><?= $page->get("headline|title") ?></h1>
  <?php if ($page->body == "" && !$page->general_content): ?>
    <p><strong>This page has yet to have any content added. When you add some it will be displayed here. Meanwhile, here is some placeholder text.</strong></p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat consectetur metus, eget ultricies tellus consequat vitae. Etiam dui libero, euismod vel nisl a, placerat elementum nisi. Aliquam erat volutpat.</p> 

    <p>Sed dolor orci, luctus at blandit id, sagittis ac nibh. Suspendisse et adipiscing velit, eu sodales ante. Vestibulum purus sapien, lacinia ac iaculis sed, ultricies et magna. Vivamus auctor enim vitae purus viverra, ac aliquet mauris tempor. Ut a adipiscing tellus, ac consectetur tortor. Mauris mattis, est at tincidunt rutrum, arcu justo interdum mi, sed posuere leo elit eu erat.</p> 

    <p>Suspendisse enim lacus, vehicula vel ante id, consequat auctor neque. Vestibulum in magna eu arcu euismod semper. Fusce ultricies sit amet nulla id varius.</p>
  
  <?php else :?>
    <?= $page->body ?>
  <?php endif ?>

  <div class="epEventsListing"> 
  <?php foreach ($page->children as $event): ?>
  
    <div class="epEventWrapper">  

      <?php if ($event->event_cover_photo) : ?>
      <img class="coverThumbnail" src="<?= $event->event_cover_photo->getCrop("homepage_slideshow_size")->url; ?>" alt="<?= $event->event_cover_photo->description ?>" />
      <?php else: ?>
      <img class="coverThumbnail" src="http://placehold.it/250x200&text=Missing+Cover+Image" alt="placeholder" />
      <?php endif ?>
    
      <h2><a href="<?= $event->url ?>"><?= $event->title ?></a></h2>
      <h3><a href="<?= $event->url ?>"><?= $event->event_date ?></a></h3>

    <?php if ($event->body == ""): ?>
      <p><strong>This page has yet to have any content added. When you add some it will be displayed here. Meanwhile, here is some placeholder text.</strong></p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat consectetur metus, eget ultricies tellus consequat vitae. Etiam dui libero, euismod vel nisl a, placerat elementum nisi. Aliquam erat volutpat.</p> 
  
      <?php else :?>
      <?= $event->body ?>
    <?php endif ?>
    <!-- <p><a href="<?= $event->url ?>">Read more here</a></p> -->

    </div>
    <!-- /.epEventWrapper -->

  <?php endforeach ?>
  </div>
  <!-- /.epEventsListing -->

</div>