$(document).ready(function() {
 
  $('a.videoLink,a.videoLinkOverlay').magnificPopup({ 
    type: 'iframe',
    iframe: {
      markup: '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
              '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

      patterns: {
        youtube: {
          index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

          id: 'v=', // String that splits URL in a two parts, second part should be %id%
          // Or null - full URL will be returned
          // Or a function that should return %id%, for example:
          // id: function(url) { return 'parsed id'; } 

          src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0' // URL that will be set as a source for iframe. 
        },
        vimeo: {
          index: 'vimeo.com/',
          id: '/',
          src: '//player.vimeo.com/video/%id%?autoplay=1'
        },
        gmaps: {
          index: '//maps.google.',
          src: '%id%&output=embed'
        }

        // you may add here more sources

      },

      srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
    }
  });


  var hpTestimonialsOwl = $(".testimonialsScroller");
 
  hpTestimonialsOwl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsTablet: [700,2], //2 items between 700 and 0
      itemsMobile : [400,1] // itemsMobile disabled - inherit from itemsTablet option
  });
 
  // Custom Navigation Events
  $(".hpTestimonialsControls .next").click(function(){
    hpTestimonialsOwl.trigger('owl.next');
    return false;
  })
  $(".hpTestimonialsControls .prev").click(function(){
    hpTestimonialsOwl.trigger('owl.prev');
    return false;
  })
  // $(".play").click(function(){
  //   owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  // })
  // $(".stop").click(function(){
  //   owl.trigger('owl.stop');
  // })
 
  $(".hpTestimonialContent").tinyscrollbar();



});

$(".mapPopup ul li img").click(function(){

        $( ".visibleSlide img" ).removeClass( "activeThumb" );
        $( ".visibleSlide .thumbs li img" ).addClass( "inactiveThumb" );
        var src = $(this).attr('data-bigImage');
        $(this).removeClass("inactiveThumb");
        $(this).addClass("activeThumb");
        $('.visibleSlide .mainImage img').attr("src", src);

      
    });
    $(".contentPopup .close").click(function(){
      $(".mapPopup").hide("slow");
      $( "div" ).removeClass( "visibleSlide" );
    });



$("#sideMenuToggle").click(function(){
              $(".sideMenu").slideToggle("slow"); 
           $(this).toggleClass("activeDropdown"); 
    });
$("li.mainMenuQuickLinks > a").click(function(e){
  e.preventDefault();
 
  $(".mainMenuQuickLinks > ul ").slideToggle();
});

///////////////////////////////////////////
// vertical align

(function ($) {
// VERTICALLY ALIGN FUNCTION
$.fn.vAlign = function() {
  return this.each(function(i){
  var ah = $(this).height();
  var ph = $(this).parent().height();
  //alert ('this height: ' + ah +  ' parent height: ' + ph);
  var mh = Math.ceil((ph-ah) / 2);
  $(this).css('padding-top', mh);
  });
};
})(jQuery);

$('span.linkTextWrapper').vAlign();
$( window ).resize(function() {
  $('span.linkTextWrapper').vAlign();
});

$('.mainMenu li').hover(function(){
  $('.mainMenu li ul li a').vAlign();
})

// Function for collapsing stuff

  $questions = $('.monthName span');
  $answers = $('.monthContent');
  $answers.hide();

  $questions.click(function() {
    //console.log("working");
    if ($(this).parent().next("div.monthContent").is(":hidden")) {
        $answers.hide();
        $(this).parent().next("div.monthContent").slideDown('fast');
      console.log("1");
    }else{
      $(this).parent().next("div.monthContent").slideUp();
      console.log("2");
    }
    return false;
});
