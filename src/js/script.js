/* mz-header mobile hamburger | function */
(function () {
  var thisHeaderClass = ".mz-header",
    hamburgerButtonClass = ".mz-header-hamburger-btn",
    hamburgerMenuClass = ".mz-header-menu";
  const hamburgerBtn = document.querySelectorAll(hamburgerButtonClass)[0];
  const hamburgerMenu = document.querySelectorAll(hamburgerMenuClass)[0];

  hamburgerBtn.addEventListener("click", function () {
    this.classList.toggle("--active-hamburger");
    hamburgerMenu.classList.toggle("--show-menu");

    if (this.classList.contains("--active-hamburger")) {
      console.log(
        "\nhamburgerButtonClass = " +
          hamburgerButtonClass +
          " .--active-hamburger"
      );
      console.log(
        "hamburgerMenuClass   = " + hamburgerMenuClass + " .--show-menu"
      );
    } else {
      console.log("\nhamburgerButtonClass = " + hamburgerButtonClass);
      console.log("hamburgerMenuClass   = " + hamburgerMenuClass);
    }
  });

  console.log(" ");
  console.log("thisHeaderClass      = " + thisHeaderClass);
  console.log("hamburgerButtonClass = " + hamburgerButtonClass);
  console.log("hamburgerMenuClass   = " + hamburgerMenuClass);

  if ($(window).width() < 768) {
    $(
      ".mz-header-menu > .menu-item.menu-item-has-children:nth-child(1) > a"
    ).attr("href", "javacsript:void(0)");
    $(
      ".mz-header-menu > .menu-item.menu-item-has-children:nth-child(1) > a"
    ).click(function () {
      $(this).toggleClass("--show-sub-menu");
      $(
        ".mz-header-menu > .menu-item.menu-item-has-children:nth-child(1) > .sub-menu"
      ).toggleClass("--show-sub-menu");
    });
  }
  console.log("windowWidth = " + $(window).width());
})();

/* mz-section--blog-listing | resize-to-masonry-grid */
(function () {
  var thisSectionClass = ".mz-section--blog-listing";

  if (document.querySelectorAll(thisSectionClass).length >= 1) {
    var colWidth = $(".mz-blog-post-item").width();

    window.onresize = function () {
      var colWidth = $(".mz-blog-post-item").width();
    };

    var $grid = $(".mz-blog-post-list").masonry({
      // options
      itemSelector: ".mz-blog-post-item",
      columnWidth: ".mz-blog-post-item",
      gutter: 40,
    });

    $grid.masonry("on", "layoutComplete", function () {
      console.log(" ");
      console.log("thisSectionClass = " + thisSectionClass);
      console.log("for-resizing-to-masonry-grid");
      console.log("Grid Masonry Layout is Complete");
    });
  }
})();

/* mz-section--blog-listing | search-filter */
(function () {
  var thisSectionClass = ".mz-section--blog-listing",
    inputSearch = document.getElementById("mzSearchBarInput");
  if (document.querySelectorAll(thisSectionClass).length >= 1) {
    console.log("");
    console.log("thisSectionClass = " + thisSectionClass);
    console.log("for-search-filter");

    inputSearch.addEventListener("keyup", function () {
      searchFilterFunction();
    });

    function searchFilterFunction() {
      var filterSearch,
        titleValue = "",
        contentValue = "",
        dateValue = "",
        blogPostList,
        blogPostItem,
        blogPostDetails,
        blogPostTitle,
        blogPostContent,
        blogPostDate;

      console.log("");
      console.log("thisSectionClass  = " + thisSectionClass);
      console.log("for-search-filter");

      filterSearch = inputSearch.value.toLowerCase();
      console.log("filterSearch      = " + filterSearch);

      blogPostList = document.getElementsByClassName("mz-blog-post-list");
      blogPostItem = document.getElementsByClassName("mz-blog-post-item");
      console.log("blogPostItem      = " + blogPostItem.length);

      for (var i = 0; i < blogPostItem.length; i++) {
        blogPostTitle =
          blogPostItem[i].getElementsByClassName("mz-blog-post-title")[0];
        titleValue = blogPostTitle.innerText.trim();
        console.log("titleValue[" + i + "]     = " + titleValue);

        blogPostContent = blogPostItem[i].getElementsByClassName(
          "mz-blog-post-excerpt"
        )[0];
        contentValue = blogPostContent.innerText.trim();
        console.log("contentValue[" + i + "]   = " + contentValue);

        blogPostDate = blogPostItem[i].getElementsByClassName(
          "mz-blog-post-released-date"
        )[0];
        dateValue = blogPostDate.innerText.trim();
        console.log("dateValue[" + i + "]      = " + dateValue);

        if (titleValue.toLowerCase().indexOf(filterSearch) > -1) {
          blogPostItem[i].style.display = "";
        } else if (contentValue.toLowerCase().indexOf(filterSearch) > -1) {
          blogPostItem[i].style.display = "";
        } else if (dateValue.toLowerCase().indexOf(filterSearch) > -1) {
          blogPostItem[i].style.display = "";
        } else {
          blogPostItem[i].style.display = "none";
        }
      }
    }

    var colWidth = $(".mz-blog-post-item").width();

    window.onresize = function () {
      var colWidth = $(".mz-blog-post-item").width();
    };

    var $grid = $(".mz-blog-post-list").masonry({
      // options
      itemSelector: ".mz-blog-post-item",
      columnWidth: ".mz-blog-post-item",
      gutter: 40,
    });

    $grid.masonry("on", "layoutComplete", function () {
      console.log(" ");
      console.log("thisSectionClass = " + thisSectionClass);
      console.log("for-resizing-to-masonry-grid");
      console.log("Grid Masonry Layout is Complete");
    });
  }
})();

/* mz-sc-section--zenon-method | function */
// (function () {
//   var thisSectionClass = ".mz-sc-section--zenon-method",
//     prevSectionClass,
//     nextSectionClass;

//   if (document.querySelectorAll(thisSectionClass).length >= 1) {
//     prevSectionClass =
//       document.querySelector(thisSectionClass).previousElementSibling
//         .classList[1];
//     nextSectionClass =
//       document.querySelector(thisSectionClass).nextElementSibling.classList[1];

//     gsap.registerPlugin(ScrollTrigger);
//     gsap.defaults({ duration: 30 });

//     const tl = gsap.timeline();
//     tl.from(thisSectionClass + " .mz-ds-view .mz-title", {
//       y: 50,
//       opacity: 0,
//       delay: 0,
//     });
//     tl.from(thisSectionClass + " .mz-ds-view .mz-svg-wrap", {
//       opacity: 0,
//       delay: 2,
//     });
//     tl.from(thisSectionClass + " .mz-ds-view .mz-col:nth-child(1)", {
//       x: -50,
//       opacity: 0,
//       delay: 6,
//     });
//     tl.from(thisSectionClass + " .mz-ds-view .mz-col:nth-child(2)", {
//       x: 50,
//       opacity: 0,
//       delay: 8,
//     });
//     tl.from(thisSectionClass + " .mz-ds-view .mz-col:nth-child(3)", {
//       x: -50,
//       opacity: 0,
//       delay: 10,
//     });
//     tl.from(thisSectionClass + " .mz-ds-view .mz-col:nth-child(4)", {
//       x: 50,
//       opacity: 0,
//       delay: 12,
//     });
//     tl.from(thisSectionClass + " .mz-ds-view .mz-col:nth-child(5)", {
//       y: 50,
//       opacity: 0,
//       delay: 14,
//     });

//     ScrollTrigger.create({
//       animation: tl,
//       trigger: thisSectionClass + " .mz-ds-view",
//       start: "top top",
//       scrub: 1,
//       snap: {
//         snapTo: "labels",
//         duration: { min: 0.2, max: 1 },
//         delay: 0.1,
//       },
//       pin: true,
//       anticipatePin: 1,
//     });

//     console.log("");
//     console.log("thisSectionClass = " + thisSectionClass);
//     console.log("prevSectionClass = " + prevSectionClass);
//     console.log("nextSectionClass = " + nextSectionClass);
//   }
// })();

/* mz-sc-section--about-zenon-carousel | function */
// (function () {
//   var thisSectionClass = ".mz-sc-section--about-zenon-carousel",
//     prevSectionClass,
//     nextSectionClass,
//     carouselNavClass = ".mz-carousel-navs",
//     carouselSlideClass = ".mz-carousel-slides",
//     carouselItemClass = ".mz-carousel-item",
//     carouselMain,
//     carouselNav,
//     carouselTotalSlides,
//     carouselSelectedItemIndex;

//   if (document.querySelectorAll(thisSectionClass).length >= 1) {
//     prevSectionClass =
//       document.querySelector(thisSectionClass).previousElementSibling
//         .classList[1];
//     nextSectionClass =
//       document.querySelector(thisSectionClass).nextElementSibling.classList[1];

//     // get total slides
//     carouselTotalSlides = $(
//       thisSectionClass + " " + carouselSlideClass + " " + carouselItemClass
//     ).length;

//     // set width of row Slides
//     // $(thisSectionClass+' '+carouselSlideClass+' .mz-row').css({ 'width' : carouselTotalSlides*100+'%' });

//     gsap.registerPlugin(ScrollTrigger);
//     gsap.defaults({ duration: 30 });

//     const tl = gsap.timeline();
//     // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '   0%'} );
//     // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(1)', {opacity: 1} );
//     // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-100%'} );
//     // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(2)', {opacity: 1} );
//     // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-200%'} );
//     // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(3)', {opacity: 1} );
//     // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-300%'} );
//     // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(4)', {opacity: 1} );
//     // tl.to(thisSectionClass+' .mz-carousel-slides .mz-row', {left: '-400%'} );
//     // tl.to(thisSectionClass+' .mz-carousel-navs .mz-carousel-nav-item:nth-child(5)', {opacity: 1} );

//     tl.to(thisSectionClass + " .mz-carousel-slides .mz-row ", {
//       duration: 2,
//     }).add();
//     tl.to(
//       thisSectionClass +
//         " .mz-carousel-navs .mz-carousel-nav-item:nth-child(1)",
//       { duration: 3 }
//     ).add(function () {
//       $(".mz-carousel-navs .mz-carousel-nav-item").css({ opacity: "0.14" });
//       $(".mz-carousel-navs .mz-carousel-nav-item:nth-child(1)").css({
//         opacity: "1",
//       });
//       $(".mz-carousel-slides .mz-row").css({ left: "   0%" });
//     });
//     tl.to(
//       thisSectionClass +
//         " .mz-carousel-navs .mz-carousel-nav-item:nth-child(2)",
//       { duration: 3 }
//     ).add(function () {
//       $(".mz-carousel-navs .mz-carousel-nav-item").css({ opacity: "0.14" });
//       $(".mz-carousel-navs .mz-carousel-nav-item:nth-child(2)").css({
//         opacity: "1",
//       });
//       $(".mz-carousel-slides .mz-row").css({ left: "-100%" });
//     });
//     tl.to(
//       thisSectionClass +
//         " .mz-carousel-navs .mz-carousel-nav-item:nth-child(3)",
//       { duration: 3 }
//     ).add(function () {
//       $(".mz-carousel-navs .mz-carousel-nav-item").css({ opacity: "0.14" });
//       $(".mz-carousel-navs .mz-carousel-nav-item:nth-child(3)").css({
//         opacity: "1",
//       });
//       $(".mz-carousel-slides .mz-row").css({ left: "-200%" });
//     });
//     tl.to(
//       thisSectionClass +
//         " .mz-carousel-navs .mz-carousel-nav-item:nth-child(4)",
//       { duration: 3 }
//     ).add(function () {
//       $(".mz-carousel-navs .mz-carousel-nav-item").css({ opacity: "0.14" });
//       $(".mz-carousel-navs .mz-carousel-nav-item:nth-child(4)").css({
//         opacity: "1",
//       });
//       $(".mz-carousel-slides .mz-row").css({ left: "-300%" });
//     });
//     tl.to(
//       thisSectionClass +
//         " .mz-carousel-navs .mz-carousel-nav-item:nth-child(5)",
//       { duration: 3 }
//     ).add(function () {
//       $(".mz-carousel-navs .mz-carousel-nav-item").css({ opacity: "0.14" });
//       $(".mz-carousel-navs .mz-carousel-nav-item:nth-child(5)").css({
//         opacity: "1",
//       });
//       $(".mz-carousel-slides .mz-row").css({ left: "-400%" });
//     });
//     tl.to(thisSectionClass + " .mz-carousel-slides .mz-row ", {
//       duration: 2,
//     }).add();

//     ScrollTrigger.create({
//       animation: tl,
//       trigger: thisSectionClass,
//       scrub: 2,
//       pin: true,
//       anticipatePin: 1,
//     });

//     console.log("");
//     console.log("thisSectionClass = " + thisSectionClass);
//     console.log("prevSectionClass = " + prevSectionClass);
//     console.log("nextSectionClass = " + nextSectionClass);
//   }
// })();

/* mz-sc-section--written-testimonials-carousel | function */
(function () {
  var thisSectionClass = ".mz-sc-section--written-testimonials-carousel",
    carouselMainClass = ".testimonial-carousel-main",
    carouselCellClass = ".testimonial-carousel-cell",
    carouselPrevBtnClass = ".testimonial-carousel-prev-btn",
    carouselNextBtnClass = ".testimonial-carousel-next-btn",
    carouselCounterSlideClass = ".testimonial-carousel-counter-slide",
    carouselInitialize,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide;

  if (document.querySelectorAll(thisSectionClass).length >= 1) {
    // Initialize Flickity
    carouselInitialize = new Flickity(
      thisSectionClass + " " + carouselMainClass,
      {
        cellAlign: "center",
        wrapAround: true,
        prevNextButtons: false,
        contain: false,
        pageDots: false,
      }
    );

    // get total slides
    // carouselTotalSlides = carouselInitialize.slides.length;
    carouselTotalSlides = $(
      thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
    ).length;

    // get data-current-slide from shortcode attribute then set as current slide
    carouselSetCurrentSlide = $(
      thisSectionClass + " " + carouselMainClass
    ).attr("data-current-slide");

    // index starts at 0
    // convert index to slide
    carouselInitialize.select(carouselSetCurrentSlide - 1);

    function carouselUpdate() {
      carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);

      carouselGetCurrentSlide = carouselInitialize.selectedIndex + 1;

      if (carouselGetCurrentSlide == 1) {
        carouselPrevOutSlide = carouselTotalSlides - carouselGetCurrentSlide;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;
      } else if (carouselGetCurrentSlide == 2) {
        carouselPrevOutSlide = carouselTotalSlides;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;
      } else if (carouselGetCurrentSlide == carouselTotalSlides - 1) {
        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = 1;
      } else if (carouselGetCurrentSlide == carouselTotalSlides) {
        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = 2;
      } else {
        carouselPrevOutSlide = carouselGetCurrentSlide - 2;
        carouselNextOutSlide = carouselGetCurrentSlide + 2;
      }

      if (carouselGetCurrentSlide < 10) {
        $(thisSectionClass + " " + carouselCounterSlideClass).html(
          "0" + carouselGetCurrentSlide
        );
      } else {
        $(thisSectionClass + " " + carouselCounterSlideClass).html(
          carouselGetCurrentSlide
        );
      }

      console.log("\nthisSectionClass        = " + thisSectionClass);
      console.log("carouselTotalSlides     = " + carouselTotalSlides);
      console.log("carouselSetCurrentSlide = " + carouselSetCurrentSlide);
      console.log("carouselPrevOutSlide    = " + carouselPrevOutSlide);
      console.log("carouselGetCurrentSlide = " + carouselGetCurrentSlide);
      console.log("carouselNextOutSlide    = " + carouselNextOutSlide);
    }

    carouselUpdate();

    $(thisSectionClass + " " + carouselPrevBtnClass).click(function () {
      carouselInitialize.previous();
      carouselUpdate();
    });

    $(thisSectionClass + " " + carouselNextBtnClass).click(function () {
      carouselInitialize.next();
      carouselUpdate();
    });

    carouselInitialize.on("dragEnd", function (event, pointer) {
      // console.log('dragEnd');
      carouselUpdate();
    });

    carouselInitialize.onkeydown = function (event) {
      switch (event.keyCode) {
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
  }
})();

/* mz-sc-section--coaches-carousel | function */
(function () {
  var thisSectionClass = ".mz-sc-section--coaches-carousel",
    carouselMainClass = ".carousel-main",
    carouselCellClass = ".carousel-cell",
    carouselInitialize,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide,
    carouselPrevOutSlide,
    carouselNextOutSlide,
    carouselAutoPlay,
    carouselAutoPlayInterval;

  if (document.querySelectorAll(thisSectionClass).length >= 1) {
    // get total slides
    carouselTotalSlides = $(
      thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
    ).length;

    if (carouselTotalSlides < 5) {
      // $(thisSectionClass+' '+carouselMainClass).addClass("flickity-disabled");
      document
        .querySelector(thisSectionClass + " " + carouselMainClass)
        .classList.add("flickity-disabled");
    } else {
      // initialize Flickity
      carouselInitialize = new Flickity(
        thisSectionClass + " " + carouselMainClass,
        {
          wrapAround: true,
          prevNextButtons: false,
          contain: false,
          pageDots: false,
        }
      );

      // get data-current-slide from shortcode attribute then set as current slide
      // carouselSetCurrentSlide = $(thisSectionClass+' '+carouselMainClass).attr('data-current-slide');
      carouselSetCurrentSlide = document.querySelector(
        thisSectionClass + " " + carouselMainClass
      ).dataset.currentSlide;

      // get data-carousel-autoplay from shortcode attribute
      // carouselAutoPlay = $(thisSectionClass+' '+carouselMainClass).attr('data-carousel-autoplay');
      carouselAutoPlay = document.querySelector(
        thisSectionClass + " " + carouselMainClass
      ).dataset.carouselAutoplay;

      // set autoPlayInterval 3000ms/3s default
      carouselAutoPlayInterval = 3000;

      // index starts at 0
      // convert index to slide
      carouselInitialize.select(carouselSetCurrentSlide - 1);

      function carouselUpdate() {
        carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);

        carouselGetCurrentSlide = carouselInitialize.selectedIndex + 1;

        if (carouselGetCurrentSlide == 1) {
          carouselPrevOutSlide = carouselTotalSlides - carouselGetCurrentSlide;
          carouselNextOutSlide = carouselGetCurrentSlide + 2;
        } else if (carouselGetCurrentSlide == 2) {
          carouselPrevOutSlide = carouselTotalSlides;
          carouselNextOutSlide = carouselGetCurrentSlide + 2;
        } else if (carouselGetCurrentSlide == carouselTotalSlides - 1) {
          carouselPrevOutSlide = carouselGetCurrentSlide - 2;
          carouselNextOutSlide = 1;
        } else if (carouselGetCurrentSlide == carouselTotalSlides) {
          carouselPrevOutSlide = carouselGetCurrentSlide - 2;
          carouselNextOutSlide = 2;
        } else {
          carouselPrevOutSlide = carouselGetCurrentSlide - 2;
          carouselNextOutSlide = carouselGetCurrentSlide + 2;
        }

        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ".is-prevOut"
        ).removeClass("is-prevOut");
        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ".is-nextOut"
        ).removeClass("is-nextOut");
        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ":nth-child(" +
            carouselPrevOutSlide +
            ")"
        ).addClass("is-prevOut");
        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ":nth-child(" +
            carouselNextOutSlide +
            ")"
        ).addClass("is-nextOut");

        console.log("\nthisSectionClass        = " + thisSectionClass);
        console.log("carouselTotalSlides     = " + carouselTotalSlides);
        console.log("carouselAutoPlay        = " + carouselAutoPlay);
        console.log("carouselSetCurrentSlide = " + carouselSetCurrentSlide);
        console.log("carouselPrevOutSlide    = " + carouselPrevOutSlide);
        console.log("carouselGetCurrentSlide = " + carouselGetCurrentSlide);
        console.log("carouselNextOutSlide    = " + carouselNextOutSlide);
      }

      carouselUpdate();

      carouselInitialize.on("dragEnd", function (event, pointer) {
        // console.log('dragEnd');
        carouselUpdate();
      });
    }
  }
})();

/* mz-section--coaches-profile-carousel | function */
(function () {
  var thisSectionClass = ".mz-section--coaches-profile-carousel",
    carouselMainClass = ".carousel-main",
    carouselCellClass = ".carousel-cell",
    carouselInitialize,
    carouselTotalSlides,
    carouselSetCurrentSlide = 0,
    carouselGetCurrentSlide,
    carouselPrevOutSlide,
    carouselNextOutSlide,
    carouselAutoPlay,
    carouselAutoPlayInterval;

  if (document.querySelectorAll(thisSectionClass).length >= 1) {
    console.log("");
    console.log("thisSectionClass        = " + thisSectionClass);

    carouselTotalSlides = $(
      thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
    ).length;
    console.log("carouselTotalSlides     = " + carouselTotalSlides);

    // initialize Flickity
    carouselInitialize = new Flickity(
      thisSectionClass + " " + carouselMainClass,
      {
        contain: true,
        cellAlign: "center",
        wrapAround: false,
        prevNextButtons: false,
        pageDots: false,
        initialIndex: 0,
      }
    );

    carouselInitialize.selectCell(carouselSetCurrentSlide);
    selectedCarouselContentCell(carouselSetCurrentSlide);

    $(
      thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
    ).click(function () {
      carouselSetCurrentSlide = $(this).index();
      console.log("carouselSetCurrentSlide = " + $(this).index());
      carouselInitialize.selectCell(carouselSetCurrentSlide);
      selectedCarouselContentCell(carouselSetCurrentSlide);
    });

    function selectedCarouselContentCell(index) {
      $(
        thisSectionClass +
          " .mz-section-02 .mz-container .carousel-content .carousel-cell"
      ).removeClass("is-selected");
      $(
        thisSectionClass +
          " .mz-section-02 .mz-container .carousel-content .carousel-cell"
      )
        .eq(index)
        .addClass("is-selected");
      $(
        thisSectionClass +
          " .mz-section-03 .mz-container .carousel-content .carousel-cell"
      ).removeClass("is-selected");
      $(
        thisSectionClass +
          " .mz-section-03 .mz-container .carousel-content .carousel-cell"
      )
        .eq(index)
        .addClass("is-selected");
    }

    function initalizedFlickity() {
      // console.log("screen.width         = "+screen.width);
      if (screen.width > 1140) {
        if (carouselTotalSlides < 4) {
          carouselInitialize.destroy();
          selectedCarouselContentCell(carouselSetCurrentSlide);
          $(
            thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
          )
            .eq(carouselSetCurrentSlide)
            .addClass("is-selected");
          $(thisSectionClass + " " + carouselMainClass).addClass(
            "flickity-disabled"
          );
          $(
            thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
          ).click(function () {
            $(
              thisSectionClass +
                " " +
                carouselMainClass +
                " " +
                carouselCellClass
            ).removeClass("is-selected");
            $(this).addClass("is-selected");
            carouselSetCurrentSlide = $(this).index();
            console.log("carouselSetCurrentSlide = " + $(this).index());
            selectedCarouselContentCell(carouselSetCurrentSlide);
          });
        }
      } else {
        $(thisSectionClass + " " + carouselMainClass).removeClass(
          "flickity-disabled"
        );
        // re-initialize Flickity
        carouselInitialize = new Flickity(
          thisSectionClass + " " + carouselMainClass,
          {
            contain: true,
            cellAlign: "center",
            wrapAround: false,
            prevNextButtons: false,
            pageDots: false,
          }
        );
      }
    }

    initalizedFlickity();

    onresize = (event) => {
      initalizedFlickity();
    };
  }
})();

/* mz-section--programs-content | function */
(function () {
  var thisSectionClass = ".mz-section--programs-content",
    carouselMainClass = ".carousel-main",
    carouselCellClass = ".carousel-cell",
    carouselInitialize01,
    carouselTotalSlides,
    carouselSetCurrentSlide,
    carouselGetCurrentSlide,
    carouselPrevOutSlide,
    carouselNextOutSlide,
    carouselAutoPlay,
    carouselAutoPlayInterval;

  if (document.querySelectorAll(thisSectionClass).length >= 1) {
    // get total slides
    carouselTotalSlides = $(
      thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
    ).length;

    if (carouselTotalSlides < 5) {
      // $(thisSectionClass+' '+carouselMainClass).addClass("flickity-disabled");
      document
        .querySelector(thisSectionClass + " " + carouselMainClass)
        .classList.add("flickity-disabled");
    } else {
      // initialize Flickity
      carouselInitialize01 = new Flickity(
        thisSectionClass + " " + carouselMainClass,
        {
          wrapAround: true,
          prevNextButtons: false,
          contain: false,
          pageDots: false,
        }
      );

      var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
          sURLVariables = sPageURL.split("&"),
          sParameterName,
          i;

        for (i = 0; i < sURLVariables.length; i++) {
          sParameterName = sURLVariables[i].split("=");

          if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined
              ? true
              : decodeURIComponent(sParameterName[1]);
          }
        }
        return false;
      };

      var URLparamSlide = getUrlParameter("slide");

      // get data-current-slide from shortcode attribute then set as current slide
      // carouselSetCurrentSlide = $(thisSectionClass+' '+carouselMainClass).attr('data-current-slide');
      if (URLparamSlide) {
        carouselSetCurrentSlide = URLparamSlide;
      } else {
        carouselSetCurrentSlide = document.querySelector(
          thisSectionClass + " " + carouselMainClass
        ).dataset.currentSlide;
      }

      // get data-carousel-autoplay from shortcode attribute
      // carouselAutoPlay = $(thisSectionClass+' '+carouselMainClass).attr('data-carousel-autoplay');
      carouselAutoPlay = document.querySelector(
        thisSectionClass + " " + carouselMainClass
      ).dataset.carouselAutoplay;

      // set autoPlayInterval 3000ms/3s default
      carouselAutoPlayInterval = 3000;

      // index starts at 0
      // convert index to slide
      carouselInitialize01.select(carouselSetCurrentSlide - 1);
      // $(thisSectionClass+' .carousel-content .carousel-cell:nth-child('+(carouselSetCurrentSlide)+')').addClass('is-selected');

      function carouselUpdate() {
        carouselGetCurrentSlide = parseInt(carouselSetCurrentSlide);

        carouselGetCurrentSlide = carouselInitialize01.selectedIndex + 1;

        if (carouselGetCurrentSlide == 1) {
          carouselPrevOutSlide = carouselTotalSlides - carouselGetCurrentSlide;
          carouselNextOutSlide = carouselGetCurrentSlide + 2;
        } else if (carouselGetCurrentSlide == 2) {
          carouselPrevOutSlide = carouselTotalSlides;
          carouselNextOutSlide = carouselGetCurrentSlide + 2;
        } else if (carouselGetCurrentSlide == carouselTotalSlides - 1) {
          carouselPrevOutSlide = carouselGetCurrentSlide - 2;
          carouselNextOutSlide = 1;
        } else if (carouselGetCurrentSlide == carouselTotalSlides) {
          carouselPrevOutSlide = carouselGetCurrentSlide - 2;
          carouselNextOutSlide = 2;
        } else {
          carouselPrevOutSlide = carouselGetCurrentSlide - 2;
          carouselNextOutSlide = carouselGetCurrentSlide + 2;
        }

        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ".is-prevOut"
        ).removeClass("is-prevOut");
        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ".is-nextOut"
        ).removeClass("is-nextOut");
        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ":nth-child(" +
            carouselPrevOutSlide +
            ")"
        ).addClass("is-prevOut");
        $(
          thisSectionClass +
            " " +
            carouselMainClass +
            " " +
            carouselCellClass +
            ":nth-child(" +
            carouselNextOutSlide +
            ")"
        ).addClass("is-nextOut");
        $(thisSectionClass + " .carousel-content .carousel-cell").removeClass(
          "is-selected"
        );
        $(
          thisSectionClass +
            " .carousel-content .carousel-cell:nth-child(" +
            carouselGetCurrentSlide +
            ")"
        ).addClass("is-selected");

        console.log("\nthisSectionClass        = " + thisSectionClass);
        console.log("carouselTotalSlides     = " + carouselTotalSlides);
        console.log("carouselAutoPlay        = " + carouselAutoPlay);
        console.log("carouselSetCurrentSlide = " + carouselSetCurrentSlide);
        console.log("carouselPrevOutSlide    = " + carouselPrevOutSlide);
        console.log("carouselGetCurrentSlide = " + carouselGetCurrentSlide);
        console.log("carouselNextOutSlide    = " + carouselNextOutSlide);
        console.log("URLparamSlideIndex      = " + URLparamSlide);
      }

      carouselUpdate();

      carouselInitialize01.on("dragEnd", function (event, pointer) {
        // console.log('dragEnd');
        carouselUpdate();
      });

      $(
        thisSectionClass + " " + carouselMainClass + " " + carouselCellClass
      ).click(function () {
        carouselInitialize01.select($(this).index());
        carouselUpdate();
      });
    }
  }
})();

/* mz-back-to-top-btn | function */
// (function (){

//   var
//     mzBackToTopBtnClass = '.mz-back-to-top-btn',
//     mzBackToTopBtn,
//     scrollTopValue
//   ;

//   mzBackToTopBtn = document.querySelector(mzBackToTopBtnClass);

//   window.onscroll = function(){
//     scrollTopValue = window.pageYOffset;
//     // console.log('scrollTopValue = '+scrollTopValue);

//     if( scrollTopValue >= 600 ){
//       mzBackToTopBtn.classList.add('--show-btn');
//     }
//     else {
//       mzBackToTopBtn.classList.remove('--show-btn');
//     }

//     mzBackToTopBtn.addEventListener("click", function(){
//       window.scrollTo({
//         top: 0,
//         left: 0,
//         behavior: 'smooth'
//       });
//     });
//   }

// })();

/* custom-animate-on-scroll */
function customAnimateOnScroll() {
  var dataAOS = document.querySelectorAll("[data-mz-aos]");

  if (dataAOS.length >= 1) {
    for (var m = 0; m < dataAOS.length; m++) {
      dataAOS[m].classList.add("aos-init");

      var animateProperty = dataAOS[m].getAttribute("data-mz-aos");
      var animateDelay = dataAOS[m].getAttribute("data-mz-aos-delay");
      var animateDuration = dataAOS[m].getAttribute("data-mz-aos-duration");
      var windowHeight = window.innerHeight;
      var elementTop = dataAOS[m].getBoundingClientRect().top;
      var elementVisible = 150;

      dataAOS[m].style.transitionDuration = animateDuration + "ms";
      dataAOS[m].style.transitionDelay = animateDelay + "ms";

      if (elementTop < windowHeight - elementVisible) {
        dataAOS[m].classList.add("aos-animate");

        console.log(" ");
        console.log("dataAOSLength               = " + dataAOS.length);
        console.log("windowHeight                = " + windowHeight);
        console.log("elementTop                  = " + elementTop);
        console.log("elementVisible              = " + elementVisible);
        console.log("[" + m + "]data-mz-aos              = " + animateProperty);
        console.log("[" + m + "]data-mz-aos-delay        = " + animateDelay);
        console.log("[" + m + "]data-mz-aos-duration     = " + animateDuration);
      } else {
        dataAOS[m].classList.remove("aos-animate");
      }
    }
  }
}

window.addEventListener("scroll", customAnimateOnScroll);
