/*eslint-env jquery*/ 
$('document').ready(function() {
    //This applies a sticky nav when you hit the section-features
    $('.js--section-features').waypoint(function(direction) {
        if(direction == "down"){
            $('nav').addClass('sticky');
        }else {
            $('nav').removeClass('sticky');
        }
    }, {
  offset: '60px;' //Says we will make sticky nav 60 px before section-features
});
    
    
      
   /* Scroll on buttons */
    $('.js--scroll-to-plans').click(function(){
        $('html,body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
    })
    
    $('.js--scroll-to-start').click(function(){
        $('html,body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);
    })
    
    /* Navigation Scroll */
    $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    
    
    /* Animations on scroll */
    
    $('.js--wp-1').waypoint(function(direction){
        $('.js--wp-1').addClass('animated fadeIn');/*adding fade in animation. ELEMENTS MUST BE INVISIBLE FIRST */
    }, {
        offset: '50%' /*So fade in happens a little bit above rather than below */
    });
    
    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInUp');/*adding fade in animation. ELEMENTS MUST BE INVISIBLE FIRST */
    }, {
        offset: '50%' /*So fade in happens a little bit above rather than below */
    });
    
    $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated fadeIn');/*adding fade in animation. ELEMENTS MUST BE INVISIBLE FIRST */
    }, {
        offset: '50%' /*So fade in happens a little bit above rather than below */
    });
    
    $('.js--wp-4').waypoint(function(direction){
        $('.js--wp-4').addClass('animated pulse');/*adding fade in animation. ELEMENTS MUST BE INVISIBLE FIRST */
    }, {
        offset: '50%' /*So fade in happens a little bit above rather than below */
    });
    
    /* Mobile Nav */
    $('.js--nav-icon').click(function(){
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        nav.slideToggle(200);
        if(icon.hasClass('ion-ios-menu')) {
            icon.addClass('ion-ios-close');
            icon.removeClass('icon ion-ios-menu');
        } else {
            icon.addClass('ion-ios-menu');
            icon.removeClass('ion-ios-close');
        }
    });
    
          
      
                  
});