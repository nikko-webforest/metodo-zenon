/* mz-header mobile hamburger function */
(function (){

  var
    thisHeaderClass      = '.mz-header',
    hamburgerButtonClass = '.mz-header-hamburger-btn',
    hamburgerMenuClass   = '.mz-header-menu'
  ;

  const hamburgerBtn = document.querySelectorAll(hamburgerButtonClass)[0];
  const hamburgerMenu = document.querySelectorAll(hamburgerMenuClass)[0];

  hamburgerBtn.addEventListener('click', function(){

    this.classList.toggle('--active-hamburger');
    hamburgerMenu.classList.toggle('--show-menu');
    
    if( this.classList.contains('--active-hamburger') ){
      console.log('\nhamburgerButtonClass = '+hamburgerButtonClass+' .--active-hamburger');
      console.log('hamburgerMenuClass   = '+hamburgerMenuClass+' .--show-menu');
    } else {
      console.log('\nhamburgerButtonClass = '+hamburgerButtonClass);
      console.log('hamburgerMenuClass   = '+hamburgerMenuClass);
    }

  });

  console.log(' ');
  console.log('thisHeaderClass      = '+thisHeaderClass);
  console.log('hamburgerButtonClass = '+hamburgerButtonClass);
  console.log('hamburgerMenuClass   = '+hamburgerMenuClass);

})();

/* mz-sc-blog-post-listing resize-to-masonry-grid */
(function (){

  var thisSectionClass = '.mz-sc-blog-post-listing';

  if( document.querySelectorAll(thisSectionClass).length >= 1 ){
    
    console.log(' ');
    console.log('thisSectionClass = '+thisSectionClass);
    console.log('for-resizing-to-masonry-grid');

    function resizeGridItem(item){
      var grid = document.getElementsByClassName('mz-blog-post-list');
      var rowHeight = 1;
      var rowGap = 40;
      var imgWrapHeight = Math.ceil( item.querySelector('.mz-blog-post-img-wrap').getBoundingClientRect().height );
      // console.log( "mz-blog-post-img-wrap = "+imgWrapHeight );

      var detailsWrapHeight = Math.ceil( item.querySelector('.mz-blog-post-details-wrap').getBoundingClientRect().height );
      // console.log( "mz-blog-post-details-wrap = "+ detailsWrapHeight );

      var totalHeight = Math.ceil( imgWrapHeight + detailsWrapHeight );
      // console.log( "mz-blog-post = "+ totalHeight );

      var rowSpan = Math.ceil(( imgWrapHeight + detailsWrapHeight ) / ( rowHeight ));
      // console.log( "rowSpan = "+ rowSpan );

      item.style.gridRowEnd = "span "+(rowSpan + rowGap);
    }

    function resizeAllGridItems(){
      allItems = document.getElementsByClassName('mz-blog-post-item');
      for( x = 0; x < allItems.length; x++ ){
        resizeGridItem( allItems[x] );
      }
    }

    function resizeInstance(instance){
      item = instance.elements[0];
      resizeGridItem(item);
    }

    window.onload = resizeAllGridItems();
    window.addEventListener('resize', resizeAllGridItems);

    allItems = document.getElementsByClassName('mz-blog-post-item');

  }

})();

/* mz-sc-blog-post-listing category-tab-filter */
(function () {

  var
    thisSectionClass = '.mz-sc-blog-post-listing',
    filterCategory,
    blogPostItem,
    blogPostItemLength,
    blogPostCategory
  ;

  if( document.querySelectorAll(thisSectionClass).length >= 1 ){

    console.log('');
    console.log('thisSectionClass = '+thisSectionClass);
    console.log('for-category-tab-filter');

    blogPostItem = document.querySelectorAll('.mz-blog-post-item');
    
    const clickedCategory = document.querySelectorAll('.mz-category-tab-filter-item');

    for( var i = 0; i < clickedCategory.length; i++ ){
      clickedCategory[i].addEventListener('click', function(){
        console.log('\nthisSectionClass   = '+thisSectionClass);
        for( var j = 0; j < clickedCategory.length; j++ ){
          clickedCategory[j].classList.remove('--active-item');
        }
        this.classList.add('--active-item');

        filterCategory = this.innerText.toLowerCase();
        console.log('filterCategory     = '+filterCategory);
        console.log('blogPostItemLength = '+blogPostItemLength);
        
        for( var k = 0; k < blogPostItem.length; k++ ){
          blogPostCategory = blogPostItem[k].getElementsByClassName('mz-blog-post-categories')[0].innerHTML.trim();
          console.log("blogPostItem["+k+"]    = "+blogPostCategory);
          
          if( filterCategory == 'all' ){
            for( var l = 0; l < blogPostItem.length; l++ ){
              blogPostItem[l].style.display = 'block';
            }
          } else if( blogPostCategory.toLowerCase().indexOf(filterCategory) > -1 ){
            blogPostItem[k].style.display = '';
          } else {
            blogPostItem[k].style.display = 'none';
          }
        }
      });
    }
  }

})();

/* mz-sc-blog-post-listing search-filter */
(function (){

  var
    thisSectionClass = '.mz-sc-blog-post-listing',
    inputSearch = document.getElementById("mzSearchBarInput")
  ;

  if( document.querySelectorAll(thisSectionClass).length >=1 ){
    
    console.log('');
    console.log('thisSectionClass = '+thisSectionClass);
    console.log('for-search-filter');

    inputSearch.addEventListener('keyup', function(){
      searchFilterFunction();
    });

    function searchFilterFunction(){

      var
        filterSearch,
        titleValue = '',
        contentValue = '',
        dateValue = '',
        blogPostList,
        blogPostItem,
        blogPostDetails,
        blogPostTitle,
        blogPostContent,
        blogPostDate
      ;
      
      console.log('');
      console.log('thisSectionClass  = '+thisSectionClass);
      console.log('for-search-filter');

      filterSearch = inputSearch.value.toLowerCase();
      console.log('filterSearch      = '+filterSearch);

      blogPostList = document.getElementsByClassName('mz-blog-post-list');
      blogPostItem = document.getElementsByClassName('mz-blog-post-item');
      console.log('blogPostItem      = '+blogPostItem.length);

      for( var i = 0; i < blogPostItem.length; i++ ){
        blogPostTitle = blogPostItem[i].getElementsByClassName('mz-blog-post-title')[0];
        titleValue = blogPostTitle.innerText.trim();
        console.log('titleValue['+i+']     = '+titleValue);

        blogPostContent = blogPostItem[i].getElementsByClassName('mz-blog-post-excerpt')[0];
        contentValue = blogPostContent.innerText.trim();
        console.log('contentValue['+i+']   = '+contentValue);

        blogPostDate = blogPostItem[i].getElementsByClassName('mz-blog-post-released-date')[0];
        dateValue = blogPostDate.innerText.trim();
        console.log('dateValue['+i+']      = '+dateValue);
        
        if( titleValue.toLowerCase().indexOf(filterSearch) > -1 ){
          blogPostItem[i].style.display = '';
        } else if( contentValue.toLowerCase().indexOf(filterSearch) > -1 ){
          blogPostItem[i].style.display = '';
        } else if ( dateValue.toLowerCase().indexOf(filterSearch) > -1 ){
          blogPostItem[i].style.display = '';
        } else {
          blogPostItem[i].style.display = 'none';
        }
      }
    }
  }

})();

/* mz-sc-coach-tab function */
(function (){

  var
    thisSectionClass = '.mz-sc-coach-tab',
    tabActiveIndex,
    tabButtonClass = '.mz-tab-btn',
    tabButtonID,
    tabPaneClass = '.mz-tab-pane'
  ;

  if( document.querySelectorAll(thisSectionClass).length >= 1 ){
    console.log("\nthisSectionClass = "+thisSectionClass);

    tabActiveIndex = $(thisSectionClass).attr('data-active-tab');
    // tabActiveIndex = document.querySelector(thisSectionClass).getAttribute('data-active-tab');
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
  }

})();

/* mz-sc-zenon-method */
(function (){
  
  var
    thisSectionClass = '.mz-sc-zenon-method',
    prevSectionClass,
    nextSectionClass
  ;
  
  if( document.querySelectorAll(thisSectionClass).length >= 1 ){

    prevSectionClass = document.querySelector(thisSectionClass).previousElementSibling.classList[1];
    nextSectionClass = document.querySelector(thisSectionClass).nextElementSibling.classList[1];

    gsap.registerPlugin(ScrollTrigger);
    gsap.defaults({duration: 30});

    const tl = gsap.timeline();
    tl.from(thisSectionClass+' .mz-title', {y:50, opacity: 0, delay: 0});
    tl.from(thisSectionClass+' .mz-svg-wrap', {opacity: 0, delay: 2});
    tl.from(thisSectionClass+' .--col-01', {x:-50, opacity: 0, delay: 6});
    tl.from(thisSectionClass+' .--col-02', {x:50, opacity: 0, delay: 8});
    tl.from(thisSectionClass+' .--col-03', {x:-50, opacity: 0, delay: 10});
    tl.from(thisSectionClass+' .--col-04', {x:50, opacity: 0, delay: 12});
    tl.from(thisSectionClass+' .--col-05', {y:50, opacity: 0, delay: 14});

    ScrollTrigger.create({
      animation: tl,
      trigger: thisSectionClass,
      start: "top top",
      scrub: 1,
      snap: {
        snapTo: "labels",
        duration: { min: 0.2, max: 1 },
        delay: 0.1
      },
      pin: true,
      anticipatePin: 1,
    });

    console.log('');
    console.log('thisSectionClass = '+thisSectionClass);
    console.log('prevSectionClass = '+prevSectionClass);
    console.log('nextSectionClass = '+nextSectionClass);

  }

})();

/* mz-pb-about-zenon-carousel function */
(function (){

  var
    thisSectionClass  = '.mz-sc-about-zenon-carousel',
    prevSectionClass,
    nextSectionClass,
    carouselNavClass  = '.mz-carousel-navs',
    carouselSlideClass = '.mz-carousel-slides',
    carouselItemClass = '.mz-carousel-item',
    carouselMain,
    carouselNav,
    carouselTotalSlides,
    carouselSelectedItemIndex
  ;

  if( document.querySelectorAll(thisSectionClass).length >= 1 ){
    
    prevSectionClass = document.querySelector(thisSectionClass).previousElementSibling.classList[1];
    nextSectionClass = document.querySelector(thisSectionClass).nextElementSibling.classList[1];

    // get total slides
    carouselTotalSlides = $(thisSectionClass+' '+carouselSlideClass+' '+carouselItemClass).length;

    // set width of row Slides
    // $(thisSectionClass+' '+carouselSlideClass+' .mz-row').css({ 'width' : carouselTotalSlides*100+'%' });

    gsap.registerPlugin(ScrollTrigger);
    gsap.defaults({duration: 30});

    const tl = gsap.timeline();
    // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '   0%'} );
    // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(1)', {opacity: 1} );
    // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-100%'} );
    // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(2)', {opacity: 1} );
    // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-200%'} );
    // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(3)', {opacity: 1} );
    // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-300%'} );
    // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(4)', {opacity: 1} );
    // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-400%'} );
    // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(5)', {opacity: 1} );
    
    tl.to(thisSectionClass+' .mz-carousel-slides .mz-row ', {duration: 2} ).add( );
    tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(1)', {duration: 3} )
      .add(
        function(){
          $('.mz-carousel-navs .mz-carousel-nav-item').css({ 'opacity' : '0.14' });
          $('.mz-carousel-navs .mz-carousel-nav-item:nth-child(1)').css({ 'opacity' : '1' });
          $('.mz-carousel-slides .mz-row').css({ 'left' : '   0%'});
        }
      );
    tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(2)', {duration: 3} )
      .add(
        function(){
          $('.mz-carousel-navs .mz-carousel-nav-item').css({ 'opacity' : '0.14' });
          $('.mz-carousel-navs .mz-carousel-nav-item:nth-child(2)').css({ 'opacity' : '1' });
          $('.mz-carousel-slides .mz-row').css({ 'left' : '-100%'});
        }
      );
    tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(3)', {duration: 3} )
      .add(
        function(){
          $('.mz-carousel-navs .mz-carousel-nav-item').css({ 'opacity' : '0.14' });
          $('.mz-carousel-navs .mz-carousel-nav-item:nth-child(3)').css({ 'opacity' : '1' });
          $('.mz-carousel-slides .mz-row').css({ 'left' : '-200%'});
        }
      );
    tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(4)', {duration: 3} )
      .add(
        function(){
          $('.mz-carousel-navs .mz-carousel-nav-item').css({ 'opacity' : '0.14' });
          $('.mz-carousel-navs .mz-carousel-nav-item:nth-child(4)').css({ 'opacity' : '1' });
          $('.mz-carousel-slides .mz-row').css({ 'left' : '-300%'});
        }
      );
    tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(5)', {duration: 3} )
      .add(
        function(){
          $('.mz-carousel-navs .mz-carousel-nav-item').css({ 'opacity' : '0.14' });
          $('.mz-carousel-navs .mz-carousel-nav-item:nth-child(5)').css({ 'opacity' : '1' });
          $('.mz-carousel-slides .mz-row').css({ 'left' : '-400%'});
        }
      );
    tl.to(thisSectionClass+' .mz-carousel-slides .mz-row ', {duration: 2} ).add( );

    ScrollTrigger.create({
      animation: tl,
      trigger: thisSectionClass,
      scrub: 2,
      pin: true,
      anticipatePin: 1
    });

    console.log('');
    console.log('thisSectionClass = '+thisSectionClass);
    console.log('prevSectionClass = '+prevSectionClass);
    console.log('nextSectionClass = '+nextSectionClass);
  }

})();

/* mz-sc-coaches-carousel function */
(function (){

  var
    thisSectionClass  = '.mz-sc-coaches-carousel',
    carouselMainClass = '.carousel-main',
    carouselCellClass = '.carousel-cell',
    carouselInitialize,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide,
    carouselPrevOutSlide,
    carouselNextOutSlide,
    carouselAutoPlay,
    carouselAutoPlayInterval
  ;
  
  if( document.querySelectorAll(thisSectionClass).length >= 1 ){
    // get total slides
    carouselTotalSlides = $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass).length;

    if( carouselTotalSlides < 5 ){

      // $(thisSectionClass+' '+carouselMainClass).addClass("flickity-disabled");
      document.querySelector(thisSectionClass+' '+carouselMainClass).classList.add('flickity-disabled');

    } else {

      // initialize Flickity
      carouselInitialize = new Flickity(thisSectionClass+' '+carouselMainClass, {
        wrapAround: true,
        prevNextButtons: false,
        contain: false,
        pageDots: false,
      });
      
      // get data-current-slide from shortcode attribute then set as current slide
      // carouselSetCurrentSlide = $(thisSectionClass+' '+carouselMainClass).attr('data-current-slide');
      carouselSetCurrentSlide = document.querySelector(thisSectionClass+' '+carouselMainClass).dataset.currentSlide;

      // get data-carousel-autoplay from shortcode attribute
      // carouselAutoPlay = $(thisSectionClass+' '+carouselMainClass).attr('data-carousel-autoplay');
      carouselAutoPlay = document.querySelector(thisSectionClass+' '+carouselMainClass).dataset.carouselAutoplay;

      // set autoPlayInterval 3000ms/3s default
      carouselAutoPlayInterval = 3000;

      // index starts at 0
      // convert index to slide
      carouselInitialize.select( carouselSetCurrentSlide - 1 );

      function carouselUpdate() {

        carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);
          
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

        $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+'.is-prevOut').removeClass('is-prevOut');
        $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+'.is-nextOut').removeClass('is-nextOut');
        $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+':nth-child('+ carouselPrevOutSlide +')').addClass("is-prevOut");
        $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass+':nth-child('+ carouselNextOutSlide +')').addClass("is-nextOut");

        console.log("\nthisSectionClass        = "+thisSectionClass);
        console.log("carouselTotalSlides     = "+carouselTotalSlides);
        console.log("carouselAutoPlay        = "+carouselAutoPlay);
        console.log("carouselSetCurrentSlide = "+carouselSetCurrentSlide);
        console.log("carouselPrevOutSlide    = "+carouselPrevOutSlide);
        console.log("carouselGetCurrentSlide = "+carouselGetCurrentSlide);
        console.log("carouselNextOutSlide    = "+carouselNextOutSlide);	

      }

      carouselUpdate();

      carouselInitialize.on( 'dragEnd', function( event, pointer ){

        // console.log('dragEnd');
        carouselUpdate();

      });

    }
  }

})();

/* mz-sc-testimonials-carousel function */
(function (){

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

  if( document.querySelectorAll(thisSectionClass).length >= 1 ){
    
    // Initialize Flickity
    carouselInitialize = new Flickity(thisSectionClass+' '+carouselMainClass, {
      cellAlign: 'center',
      wrapAround: true,
      prevNextButtons: false,
      contain: false,
      pageDots: false
    });
    
    // get total slides
    // carouselTotalSlides = carouselInitialize.slides.length;
    carouselTotalSlides = $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass).length;

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

    carouselInitialize.onkeydown = function(event){
      switch (event.keyCode){
        case 37:
          carouselInitialize.previous();
          carouselUpdate();
          console.log("Left key is pressed.");
          break;
        case 39:
          carouselInitialize.next();
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
  }

})();

/* mz-programs-content function */
(function (){

  var
    thisSectionClass  = '.mz-programs-content',
    carouselMainClass = '.carousel-main',
    carouselCellClass = '.carousel-cell',
    carouselInitialize01,
    carouselInitialize02,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide,
    carouselPrevOutSlide,
    carouselNextOutSlide,
    carouselAutoPlay,
    carouselAutoPlayInterval
  ;
  
  if( document.querySelectorAll(thisSectionClass).length >= 1 ){
    // get total slides
    carouselTotalSlides = $(thisSectionClass+' '+carouselMainClass+' '+carouselCellClass).length;

    if( carouselTotalSlides < 5 ){

      // $(thisSectionClass+' '+carouselMainClass).addClass("flickity-disabled");
      document.querySelector(thisSectionClass+' '+carouselMainClass).classList.add('flickity-disabled');

    } else {

      // initialize Flickity
      carouselInitialize01 = new Flickity(thisSectionClass+' '+carouselMainClass, {
        wrapAround: true,
        prevNextButtons: false,
        contain: false,
        pageDots: false,
      });

      // carouselInitialize02 = new Flickity(thisSectionClass+' .carousel-content', {
      //   wrapAround: true,
      //   prevNextButtons: false,
      //   contain: false,
      //   pageDots: false,
      // });
      
      // get data-current-slide from shortcode attribute then set as current slide
      // carouselSetCurrentSlide = $(thisSectionClass+' '+carouselMainClass).attr('data-current-slide');
      carouselSetCurrentSlide = document.querySelector(thisSectionClass+' '+carouselMainClass).dataset.currentSlide;

      // get data-carousel-autoplay from shortcode attribute
      // carouselAutoPlay = $(thisSectionClass+' '+carouselMainClass).attr('data-carousel-autoplay');
      carouselAutoPlay = document.querySelector(thisSectionClass+' '+carouselMainClass).dataset.carouselAutoplay;

      // set autoPlayInterval 3000ms/3s default
      carouselAutoPlayInterval = 3000;

      // index starts at 0
      // convert index to slide
      carouselInitialize01.select( carouselSetCurrentSlide - 1 );
      $(thisSectionClass+' .carousel-content .carousel-cell:nth-child('+(carouselSetCurrentSlide)+')').addClass('is-selected');

      function carouselUpdate() {

        carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);
          
        carouselGetCurrentSlide = carouselInitialize01.selectedIndex + 1;

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
        $(thisSectionClass+' .carousel-content .carousel-cell').removeClass('is-selected');
        $(thisSectionClass+' .carousel-content .carousel-cell:nth-child('+(carouselGetCurrentSlide)+')').addClass('is-selected');

        console.log("\nthisSectionClass        = "+thisSectionClass);
        console.log("carouselTotalSlides     = "+carouselTotalSlides);
        console.log("carouselAutoPlay        = "+carouselAutoPlay);
        console.log("carouselSetCurrentSlide = "+carouselSetCurrentSlide);
        console.log("carouselPrevOutSlide    = "+carouselPrevOutSlide);
        console.log("carouselGetCurrentSlide = "+carouselGetCurrentSlide);
        console.log("carouselNextOutSlide    = "+carouselNextOutSlide);	

      }

      carouselUpdate();

      carouselInitialize01.on( 'dragEnd', function( event, pointer ){

        // console.log('dragEnd');
        carouselUpdate();

      });

    }
  }

})();

/* mz-back-to-top-btn function */
(function (){

  var
    mzBackToTopBtnClass = '.mz-back-to-top-btn',
    mzBackToTopBtn,
    scrollTopValue
  ;

  mzBackToTopBtn = document.querySelector(mzBackToTopBtnClass);

  window.onscroll = function(){
    scrollTopValue = window.pageYOffset;
    // console.log('scrollTopValue = '+scrollTopValue);

    if( scrollTopValue >= 600 ){
      mzBackToTopBtn.classList.add('--show-btn');
    } else {
      mzBackToTopBtn.classList.remove('--show-btn');
    }

    mzBackToTopBtn.addEventListener("click", function(){
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
    });
  }

})();

/* custom-animate-on-scroll */
function customAnimateOnScroll(){
  var dataAOS = document.querySelectorAll('[data-mz-aos]');
  console.log( 'dataAOSLength = '+dataAOS.length);

  for( var m = 0; m < dataAOS.length; m++ ){
    dataAOS[m].classList.add("aos-init");

    var animateProperty = dataAOS[m].getAttribute('data-mz-aos');
    var animateDelay = dataAOS[m].getAttribute('data-mz-aos-delay');
    var animateDuration = dataAOS[m].getAttribute('data-mz-aos-duration');
    var windowHeight = window.innerHeight;
    var elementTop = dataAOS[m].getBoundingClientRect().top;
    var elementVisible = 150;

    dataAOS[m].style.transitionDuration = animateDuration+'ms';
    dataAOS[m].style.transitionDelay = animateDelay+'ms';

    if( elementTop < windowHeight - elementVisible )
    {
      dataAOS[m].classList.add('aos-animate');
    }
    else
    {
      dataAOS[m].classList.remove('aos-animate');
    }


    console.log( 'windowHeight                = '+windowHeight);
    console.log( 'elementTop                  = '+elementTop);
    console.log( 'elementVisible              = '+elementVisible);
    console.log( '['+m+']data-mz-aos          = '+animateProperty);
    console.log( '['+m+']data-mz-aos-delay    = '+animateDelay);
    console.log( '['+m+']data-mz-aos-duration = '+animateDuration);
  }
}

window.addEventListener('scroll', customAnimateOnScroll);