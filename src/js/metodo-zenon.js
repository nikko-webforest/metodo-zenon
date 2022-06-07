/* mz-header mobile hamburger function */
(function (){

  var
    thisHeaderClass      = '.mz-header',
    hamburgerButtonClass = '.mz-header-hamburger-btn',
    hamburgerMenuClass   = '.mz-header-menu'
  ;
  
  console.log("\nthisHeaderClass      = "+thisHeaderClass);
  console.log("hamburgerButtonClass = "+hamburgerButtonClass);
  console.log("hamburgerMenuClass   = "+hamburgerMenuClass);

  $(hamburgerButtonClass).click(function (){
    $(this).toggleClass("--active-hamburger");
    $(thisHeaderClass+' '+hamburgerMenuClass).toggleClass("--show-hamburger-menu");
  });

})();

/* mz-sc-about-zenon-carousel function */
(function (){

  var
    thisSectionClass  = '.mz-sc-about-zenon-carousel',
    carouselNavClass  = '.mz-carousel-nav',
    carouselMainClass = '.mz-carousel-main',
    carouselCellClass = '.mz-carousel-cell',
    carouselMain,
    carouselNav,
    carouselTotalSlides
  ;

  // Initialize Flickity
  carouselNav = new Flickity(thisSectionClass+' '+carouselNavClass, {
    asNavFor: '.mz-carousel-main',
    cellAlign: 'center',
    autoPlay: false,
    wrapAround: false,
    prevNextButtons: false,
    pageDots: false,
    contain: false,
    draggable: false
  });

  carouselMain = new Flickity(thisSectionClass+' '+carouselMainClass, {
    cellAlign: 'center',
    autoPlay: 5000,
    wrapAround: true,
    prevNextButtons: false,
    pageDots: false,
    contain: false
  });

  // get total slides
  carouselTotalSlides = carouselMain.slides.length;
  
  function carouselUpdate(){
    console.log("\nthisSectionClass    = "+thisSectionClass);
    console.log("carouselTotalSlides = "+carouselTotalSlides);
  }

  carouselUpdate();

  carouselMain.on( 'dragEnd', function( event, pointer ){

    // console.log('dragEnd');
    carouselUpdate();

  });
  
})();

/* mz-sc-carousel function */
(function () {

  var
    thisSectionClass  = '.mz-sc-carousel',
    carouselMainClass = '.mz-carousel-main',
    carouselCellClass = '.mz-carousel-cell',
    carousel,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide,
    carouselPrevOutSlide,
    carouselNextOutSlide,
    carouselAutoPlay,
    carouselAutoPlayInterval
  ;

  // initialize Flickity
  carousel = new Flickity(thisSectionClass+' '+carouselMainClass, {
    wrapAround: true,
    prevNextButtons: false,
    contain: false,
    pageDots: false,
    // autoPlay: carouselAutoPlayInterval,
    // pauseAutoPlayOnHover: false,
    // freeScroll: true,
    // autoPlay: 5000,
    // fullscreen: true,
    // stagger: 150
  });
  
  // get total slides
  carouselTotalSlides = carousel.slides.length;
  
  // get data-current-slide from shortcode attribute then set as current slide
  carouselSetCurrentSlide = $(thisSectionClass+' '+carouselMainClass).attr('data-current-slide');

  // get data-carousel-autoplay from shortcode attribute
  carouselAutoPlay = $(thisSectionClass+' '+carouselMainClass).attr('data-carousel-autoplay');

  // set autoPlayInterval 3000ms/3s default
  carouselAutoPlayInterval = 3000;

  // index starts at 0
  // convert index to slide
  carousel.select( carouselSetCurrentSlide - 1 );
  
  function carouselUpdate() {

    carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);

    if( carouselSetCurrentSlide > carouselTotalSlides ){

      $(thisSectionClass+' '+carouselMainClass).remove();

      setTimeout(function(){ 
        alert(carouselSectionID+": carouselSetCurrentSlide greater than carouselTotalSlides");
      }, 1000);

    } else {
      
      carouselGetCurrentSlide = carousel.selectedIndex + 1;

      if( carouselGetCurrentSlide == 1 ){
        
        carouselPrevOutSlide = carouselTotalSlides - carouselGetCurrentSlide;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;

      } else if( carouselGetCurrentSlide == 2 ){

        carouselPrevOutSlide = carouselTotalSlides;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;

      } else if( carouselGetCurrentSlide == carouselTotalSlides - 1 ){

        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = 1;

      } else if( carouselGetCurrentSlide == carouselTotalSlides ){

        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = 2;

      } else {

        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;

      }

      $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+'.is-prevOut').removeClass('is-prevOut');
      $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+'.is-nextOut').removeClass('is-nextOut');
      $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+':nth-child('+ carouselPrevOutSlide +')').addClass("is-prevOut");
      $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+':nth-child('+ carouselNextOutSlide +')').addClass("is-nextOut");
      
    }

    console.log("\nthisSectionClass        = "+thisSectionClass);
    console.log("carouselTotalSlides     = "+carouselTotalSlides);
    console.log("carouselSetCurrentSlide = "+carouselSetCurrentSlide);
    console.log("carouselPrevOutSlide    = "+carouselPrevOutSlide);
    console.log("carouselGetCurrentSlide = "+carouselGetCurrentSlide);
    console.log("carouselNextOutSlide    = "+carouselNextOutSlide);	

  }

  carouselUpdate();

  carousel.on( 'dragEnd', function( event, pointer ){

    // console.log('dragEnd');
    carouselUpdate();

  });

  document.onkeydown = function(event){
    switch (event.keyCode){
      case 37:
        carouselUpdate();
        console.log("Left key is pressed.");
        break;
      case 39:
        carouselUpdate();
        console.log("Right key is pressed.");
        break;
    }
  };

  if( carouselAutoPlay == 'true' ){

    setInterval(function () {
      carousel.next();
      carouselUpdate();
    }, carouselAutoPlayInterval);

  } else if ( carouselAutoPlay == 'false' || carouselAutoPlay == '' || carouselAutoPlay == ' ' ){
    
  } else {

    setInterval(function () {
      carousel.next();
      carouselUpdate();
    }, carouselAutoPlay);

  }

})();

/* mz-sc-testimonials-carousel function */
(function () {

  var
    thisSectionClass          = '.mz-sc-testimonials-carousel',
    carouselMainClass         = '.mz-carousel-main',
    carouselCellClass         = '.mz-carousel-cell',
    carouselPrevBtnClass      = '.mz-carousel-prev-btn',
    carouselNextBtnClass      = '.mz-carousel-next-btn',
    carouselCounterSlideClass = '.mz-carousel-counter-slide',
    carouselInitialize,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide
  ;

  // Initialize Flickity
  carouselInitialize = new Flickity(thisSectionClass+' '+carouselMainClass, {
    cellAlign: 'center',
    wrapAround: true,
    prevNextButtons: false,
    contain: false,
    pageDots: false
  });
  
  // get total slides
  carouselTotalSlides = carouselInitialize.slides.length;

  // get data-current-slide from shortcode attribute then set as current slide
  carouselSetCurrentSlide = $(thisSectionClass+' '+carouselMainClass).attr('data-current-slide');

  // get data-carousel-autoplay from shortcode attribute
  carouselAutoPlay = $(thisSectionClass+' '+carouselMainClass).attr('data-carousel-autoplay');

  // set autoPlayInterval 3000ms/3s default
  carouselAutoPlayInterval = 3000;

  // index starts at 0
  // convert index to slide
  carouselInitialize.select( carouselSetCurrentSlide - 1 );
  
  function carouselUpdate() {

    carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);

    if( carouselSetCurrentSlide > carouselTotalSlides ){

      $(thisSectionClass+' '+carouselMainClass).remove();

      setTimeout(function(){ 
        alert(carouselSectionID+": carouselSetCurrentSlide greater than carouselTotalSlides");
      }, 1000);

    } else {
      
      carouselGetCurrentSlide = carouselInitialize.selectedIndex + 1;

      if( carouselGetCurrentSlide == 1 ){
        
        carouselPrevOutSlide = carouselTotalSlides - carouselGetCurrentSlide;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;

      } else if( carouselGetCurrentSlide == 2 ){

        carouselPrevOutSlide = carouselTotalSlides;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;

      } else if( carouselGetCurrentSlide == carouselTotalSlides - 1 ){

        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = 1;

      } else if( carouselGetCurrentSlide == carouselTotalSlides ){

        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = 2;

      } else {

        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;

      }

      $(thisSectionClass+' '+carouselCounterSlideClass).html('0'+carouselGetCurrentSlide);
      // $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+'.is-prevOut').removeClass('is-prevOut');
      // $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+'.is-nextOut').removeClass('is-nextOut');
      // $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+':nth-child('+ carouselPrevOutSlide +')').addClass("is-prevOut");
      // $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+':nth-child('+ carouselNextOutSlide +')').addClass("is-nextOut");	
      
    }

    console.log("\nthisSectionClass        = "+thisSectionClass);
    console.log("carouselTotalSlides     = "+carouselTotalSlides);
    console.log("carouselSetCurrentSlide = "+carouselSetCurrentSlide);
    console.log("carouselPrevOutSlide    = "+carouselPrevOutSlide);
    console.log("carouselGetCurrentSlide = "+carouselGetCurrentSlide);
    console.log("carouselNextOutSlide    = "+carouselNextOutSlide);

  }

  carouselUpdate();

  $(thisSectionClass+' '+carouselPrevBtnClass).click(function() {
    carouselInitialize.previous();
    carouselUpdate();
  });

  $(thisSectionClass+' '+carouselNextBtnClass).click(function() {
    carouselInitialize.next();
    carouselUpdate();
  });

  carouselInitialize.on( 'dragEnd', function( event, pointer ){

    // console.log('dragEnd');
    carouselUpdate();

  });

  document.onkeydown = function(event){
    switch (event.keyCode){
      case 37:
        carouselUpdate();
        console.log("Left key is pressed.");
        break;
      case 39:
        carouselUpdate();
        console.log("Right key is pressed.");
        break;
    }
  };

  if( carouselAutoPlay == 'true' ){

    setInterval(function () {
      carouselInitialize.next();
      carouselUpdate();
    }, carouselAutoPlayInterval);

  } else if ( carouselAutoPlay == 'false' || carouselAutoPlay == '' || carouselAutoPlay == ' ' ){
  } else {

    setInterval(function () {
      carouselInitialize.next();
      carouselUpdate();
    }, carouselAutoPlay);

  }

})();

/* mz-sc-coach-tab function */
(function (){

  var
    thisSectionClass = '.mz-sc-coach-tab',
    tabActiveIndex,
    tabButtonClass   = '.mz-tab-btn',
    tabButtonID,
    tabPaneClass     = '.mz-tab-pane'
  ;

  console.log("\nthisSectionClass = "+thisSectionClass);

  tabActiveIndex = $(thisSectionClass).attr('data-active-tab');
  console.log("tabActiveIndex   = "+tabActiveIndex);
  
  $(thisSectionClass+' '+tabPaneClass).hide();
  $(thisSectionClass+' [data-tab-index='+tabActiveIndex+']').addClass("--active-tab");
  $(thisSectionClass+' '+tabPaneClass+'.pane-0'+tabActiveIndex).addClass("--active-pane");
  $(thisSectionClass+' '+tabPaneClass+'.pane-0'+tabActiveIndex).fadeIn();

  $(thisSectionClass+' '+tabButtonClass).click(function (){

    $(thisSectionClass+' '+tabButtonClass).removeClass("--active-tab");
    $(this).addClass("--active-tab");

    tabButtonID = $(this).attr('data-tab-index');
    console.log("tabButtonID      = "+tabButtonID);
    
    $(thisSectionClass+' '+tabPaneClass).hide();
    $(thisSectionClass+' '+tabPaneClass).removeClass("--active-pane");
    $(thisSectionClass+' '+tabPaneClass+'.pane-0'+tabButtonID).addClass("--active-pane");
    $(thisSectionClass+' '+tabPaneClass+'.pane-0'+tabButtonID).fadeIn();

  });

})();

/* mz-back-to-top-btn function */
(function (){

  $(document).ready(function() {
    $(window).scroll(function() {
      var scrollTopValue = $(window).scrollTop();
      if( scrollTopValue >= 600 ){
        $(".mz-back-to-top-btn").addClass("--show-btn");
      } else {
        $(".mz-back-to-top-btn").removeClass("--show-btn");
      }
    });

    $(".mz-back-to-top-btn").click(function () {
      $("html, body").animate({scrollTop: 0}, 400);
    });
  });

})();

/* Initialize Animate-On-Scroll */
AOS.init({
  duration: 1200,
  once: true
});