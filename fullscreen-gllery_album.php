<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=0.5,user-scalable=no">
        <title>Photo Gallery - Cypress Cove Nudist Resort</title>

        <!-- load jQuery -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>

        <!-- load Galleria -->
        <script src="https://www.cypresscoveresort.com/site/templates/galleria/galleria-1.5.7.min.js"></script>

        <style>
html, body {
    /*background:#111 url(broken_noise.png);*/
    font:13px/1.3 arial, sans-serif;
    height: 100%;
    overflow:hidden;
    margin:0;
    padding:0;
}
/*html, body,.galleria-container{
    background-color: <?= $campDarkColor?>;
}
.galleria-thumbnails-list,.galleria-thumbnails {
    background-color: <?= $campColor ?>;
}*/
a {
    color:#823;
    text-decoration:none
}
#container {
    width:100%;
}
#gallery {
    width:100%;
    height:100%;
}
#galleria {
    width:100%;
    height:100%;
    background:#000
}
#loader {
    width:200px;
    height:100px;
    margin:-50px 0 0 -100px;
    position:absolute;
    left:50%;
    top:50%;
    color:#fff;
    text-align:center;
    z-index:4;
    display:none;
    /*background:#000 url('/site/templates/images/fsgallery/loader.gif') no-repeat 50% 25px;*/
    opacity:.8;
    line-height:150px;
    border-radius:6px
}
#menu {
    position:absolute;
    top: 20px;
    right: 10px;
    z-index: 11000;
    background:rgb(76, 110, 34);
    background:rgba(76, 110, 34, 0.61);
    padding: 5px 5px 4px;
    border-radius: 5px;
    border: 1px solid #fff;
}
#menu ul {
    list-style: none outside;
    margin:0;
    padding:0;
}
#menu ul a {
    display:block;
    padding: 6px;
    color: white;
}
#menu ul a:hover {
    background:#151515;
    background:#43601e;
    background:rgba(0, 0, 0, .1);
}
#menu a.active {
    background:#111;
    background:#43601e;
    background:rgba(0, 0, 0, .3);
    color:#fff
}
#menu p {
    color:white;
    width: 122px;
    margin:0;
    padding:3px 0px 0;
    cursor: pointer;
    text-align: center;
    z-index: 999;
}
.logo {
    position:absolute;
    z-index:11200;
    top:0;
    left:20px;
}
.logo img{
    width: 250px;
}
a.backToWebsite {
    position: absolute;
    top: 120px;
    left: 70px;
    font-weight: bold;
    color: white;
    text-shadow: 1px 1px 1px black;
}
#playToggle {
    position:absolute;
    left:-70px;
    background:url('/site/templates/images/fsgallery/playPause.gif') no-repeat left top;
    text-align:center;
    width:57px;
    height: 57px;
    padding: 0 !important;
    text-indent: -999em;
    border-radius: 5px;
    top: 0;
}
#playToggle.play {
    background:url('/site/templates/images/fsgallery/playPause.gif') no-repeat left bottom;
}
.galleria-info-title {
    display:none!important;
    
}
.galleria-info-description {
    font-size: 20px!important;
}

.galleria-theme-fullscreen .galleria-carousel .galleria-thumbnails-list {
    border-left: 30px solid rgb(76, 110, 34);
    border-right: 30px solid rgb(76, 110, 34);
}
.galleria-theme-fullscreen .galleria-thumbnails-list, .galleria-theme-fullscreen .galleria-thumbnails{
    background: rgb(76, 110, 34);

}
html,body,.galleria-theme-fullscreen {
    background-color: #343f26;
}
.galleria-theme-fullscreen .galleria-thumbnails .galleria-image img {
    background: rgb(76, 110, 34);
}
#menu ul {
  display:none;
}
</style>
</head>
<body>
    <div class="logo">
        <a href="/"><img src="/site/templates/images/cypress_logo.png" alt="Cypress Cove Nudist Resort &amp; Spa" /></a>
        <a href="/" class="backToWebsite">&laquo; back to website</a>
    </div>
    <!-- end logo-->

    <div id="menu"> <a href="#" id="playToggle" class="pause">Pause Slide-Show</a>
        <p><img src="<?= $config->urls->templates?>images/fsgallery/selectGallery.gif" alt="Select Photo Gallery" /></p>
        <ul>
            <?php 

            $galleryAlbums = $pages->get("1587")->children("template=fullscreen-gllery_album");

            foreach ($galleryAlbums as $album): ?>
            <li><a href="<?= $album->url ?>" <?= $page->id == $album->id ? 'class="active"' : '' ?>><?= $album->title?></a></li>
            <?php endforeach ?>
            
        </ul
    </div>

    <div class="galleria"> 
      <?php foreach ($page->fs_album as $img): ?>
            <a href="<?= $img->url ?>">
            <img 
                src="<?= $img->height(50)->url ?>",
                data-big="<?= $img->url ?>"
                <?php if ($img->description!=""): ?>
                data-description="description"
                <?php endif ?>  
            >
        </a>
        <?php endforeach ?>     
    </div>

    <script>
    $(function() {
        // Load the Fullscreen theme
        Galleria.loadTheme('/site/templates/galleria/themes/fullscreen/galleria.fullscreen.min.js');

        Galleria.configure({
            _hideDock: false,
            transition: 'fade',
            autoplay: 4000,
            transitionSpeed: 1000,
            pauseOnInteraction: true,
            showInfo: true,
            responsive: true,
            initialTransition: 5000,
            imageCrop: 'landscape',
            dataSort: 'random',
            //dataSource: data,
            thumbnails: 'lazy'
        });

        // Initialize Galleria
        Galleria.run('.galleria');
        
        Galleria.ready(function(options){
          var galleria = this;
          this.lazyLoadChunks( 10 );
          var pauseplay = $('#playToggle');

          pauseplay.click(function(){
            pauseplay.toggleClass("play");
              if (pauseplay.hasClass("play")) {
                galleria.pause();
              }else{
                galleria.play();
              }
            });

        });

    });


    $(document).ready(function() {
       $('#menu ul').slideDown().delay( 2000 ).slideUp();
    });
    
    $('#menu p').click(function(){
      $('#menu ul').slideToggle();
    });

    </script>
    </body>
</html>
