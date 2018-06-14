<div data-pw-id="main">

  <?php require($config->paths->templates.'layouts/left-sidebar.inc') ?>

</div>

<div data-pw-id="main-column">

  <h1><?= $page->get("headline|title") ?></h1>
  <?php if ($page->testimonials_video): ?>
  <div class="embed-container"><iframe src="<?= $page->testimonials_video ?>" frameborder="0" allowfullscreen ></iframe></div>
  <?php endif ?>
  
  <?php if ($page->body == "" && !$page->general_content): ?>
    <p><strong>This page has yet to have any content added. When you add some it will be displayed here. Meanwhile, here is some placeholder text.</strong></p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat consectetur metus, eget ultricies tellus consequat vitae. Etiam dui libero, euismod vel nisl a, placerat elementum nisi. Aliquam erat volutpat.</p> 

    <p>Sed dolor orci, luctus at blandit id, sagittis ac nibh. Suspendisse et adipiscing velit, eu sodales ante. Vestibulum purus sapien, lacinia ac iaculis sed, ultricies et magna. Vivamus auctor enim vitae purus viverra, ac aliquet mauris tempor. Ut a adipiscing tellus, ac consectetur tortor. Mauris mattis, est at tincidunt rutrum, arcu justo interdum mi, sed posuere leo elit eu erat.</p> 

    <p>Suspendisse enim lacus, vehicula vel ante id, consequat auctor neque. Vestibulum in magna eu arcu euismod semper. Fusce ultricies sit amet nulla id varius.</p>
  
  <?php else :?>
    <?= $page->body ?>
  <?php endif ?>
  <?php if (count($page->testimonials)>0): ?>
    
  <?php foreach ($page->testimonials as $testimonial): ?>
    <h2><?= $testimonial->title ?></h2>
    <div class="testimonialContent">
      "<?= $testimonial->summary ?>"
    </div>
    <!-- /.testimonialContent -->
    <p><strong><em>~<?= $testimonial->author_name ?></em></strong></p>
  <?php endforeach ?>
  <?php endif ?>

</div>