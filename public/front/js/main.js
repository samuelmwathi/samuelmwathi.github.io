(function ($) {
  "use strict"

/* 1. Proloder */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });

/* 2. sticky And Scroll UP */
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 400) {
        $(".header-sticky").removeClass("sticky-bar");
        $('#back-top').fadeOut(500);
      } else {
        $(".header-sticky").addClass("sticky-bar");
        $('#back-top').fadeIn(500);
      }
    });

  // Scroll Up
    $('#back-top a').on("click", function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });


/* 3. slick Nav */
// mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
      menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '+',
        openedSymbol:'-'
      });
    };

/* 4. MainSlider-1 */
    // h1-hero-active
    function mainSlider() {
      var BasicSlider = $('.slider-active');
      BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
      });
      BasicSlider.slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        fade: true,
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
            }
          }
        ]
      });

      function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
        });
      }
    }
    mainSlider();



  /* 4. Testimonial Active*/
  var testimonial = $('.h1-testimonial-active');
  if(testimonial.length){
  testimonial.slick({
      dots: true,
      infinite: true,
      speed: 1000,
      autoplay:true,
      loop:true,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-arrow-top-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-arrow-top-right"></i></button>',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            arrows:true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots:false
          }
        }
      ]
    });
  }

/* 5. Our Clients Slider*/
var testimonial = $('.our-clients');
  if(testimonial.length){
  testimonial.slick({
    dots: false,
    infinite: true,
    speed: 1000,
    autoplay:true,
    loop:true,
    arrows: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows:true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows:true
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots:false
        }
      }
    ]
  });
}

/* 6. Nice Selectorp  */
  var nice_Select = $('select');
    if(nice_Select.length){
      nice_Select.niceSelect();
    }

/* 7. data-background */
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });


/* 10. WOW active */
    new WOW().init();


// 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }
// 12 Pop Up Video
    var popUp = $('.popup-video');
    if(popUp.length){
      popUp.magnificPopup({
        type: 'iframe'
      });
    }

/* 13. counterUp*/
    $('.counter').counterUp({
      delay: 10,
      time: 3000
    });

//16. Overlay
  $(".snake").snakeify({
    speed: 200
  });

  var shorten = function(str, maxLen, separator = ' ') {
    if (str.length <= maxLen) return str;
    return str.substr(0, str.lastIndexOf(separator, maxLen));
  }

  var maxLength = 300;
  $(".team-descr").each(function(){
    var myStr = $(this).text();
    if($.trim(myStr).length > maxLength){
        var newStr = shorten(myStr, maxLength);
        var removedStr = myStr.substring(newStr.length, $.trim(myStr).length);
        $(this).empty().html(newStr);
        $(this).append('<span id="read-more">... &nbsp;<a href="javascript:void(0);" class="read-more">Read more</a></span>');
        $(this).append('<span class="more-text">' + removedStr + '</span>');
    }
    $(this).find("#read-more").click(function(){console.log('In')
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
  });

  $("._gallery section img").click(function() {
    $("._gallery .lightbox").fadeIn(300);
    $("._gallery .lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' data-title='" + $(this).data("title") + "' data-description='" + $(this).data("description") + "' />");
    $("._gallery .filter").css("background-image", "url(" + $(this).attr("src") + ")");
    $("._gallery .title").html($(this).data("title"));
    $("._gallery .description").html($(this).data("description"));
    $("html").css("overflow", "hidden");
    if ($(this).is(":last-child")) {
      $("._gallery .arrowr").css("display", "none");
      $("._gallery .arrowl").css("display", "block");
    } else if ($(this).is(":first-child")) {
      $("._gallery .arrowr").css("display", "block");
      $("._gallery .arrowl").css("display", "none");
    } else {
      $("._gallery .arrowr").css("display", "block");
      $("._gallery .arrowl").css("display", "block");
    }
  });

  $("._gallery .close").click(function() {
    $("._gallery .lightbox").fadeOut(300);
    $("._gallery h1").remove();
    $("._gallery .lightbox img").remove();
    $("html").css("overflow", "auto");
  });

  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      $("._gallery .lightbox").fadeOut(300);
      $("._gallery .lightbox img").remove();
      $("html").css("overflow", "auto");
    }
  });

  $("._gallery .arrowr").click(function() {
    var imgSrc = $("._gallery .lightbox img").attr("src");
    var search = $("._gallery section").find("img[src$='" + imgSrc + "']");
    var newImage = search.next().attr("src");
    /*$("._gallery .lightbox img").attr("src", search.next());*/
    $("._gallery .lightbox img").attr("src", newImage);
    $("._gallery .filter").css("background-image", "url(" + newImage + ")");
    $("._gallery .title").html($(search).next().data("title"));
    $("._gallery .description").html($(search).next().data("description"));

    if (!search.next().is(":last-child")) {
      $("._gallery .arrowl").css("display", "block");
    } else {
      $("._gallery .arrowr").css("display", "none");
    }
  });

  $("._gallery .arrowl").click(function() {
    var imgSrc = $("._gallery .lightbox img").attr("src");
    var search = $("._gallery section").find("img[src$='" + imgSrc + "']");
    var newImage = search.prev().attr("src");
    /*$("._gallery .lightbox img").attr("src", search.next());*/
    $("._gallery .lightbox img").attr("src", newImage);
    $("._gallery .filter").css("background-image", "url(" + newImage + ")");
    $("._gallery .title").html($(search).prev().data("title"));
    $("._gallery .description").html($(search).prev().data("description"));

    if (!search.prev().is(":first-child")) {
      $("._gallery .arrowr").css("display", "block");
    } else {
      $("._gallery .arrowl").css("display", "none");
    }
  });

  var markers = [];
  var _coordinates = [];
  var markerVectorLayer;

  var getResourcesData = function(_map, coordinates, view){
    _map.removeLayer(markerVectorLayer);
    markers = [];
    coordinates.forEach((_r,i)=>{
        var marker = new ol.Feature({
            geometry: new ol.geom.Point(ol.proj.fromLonLat([parseFloat(_r.longitude), parseFloat(_r.latitude)])),
        });
        marker.setStyle(new ol.style.Style({
            image: new ol.style.Icon(({
                crossOrigin: 'anonymous',
                src: "/assets/img/marker.png",
                scale: 0.5,
            }))
        }));
        marker.id = _r.id;
        _map.on('pointermove', function(e) {
            var pixel = _map.getEventPixel(e.originalEvent);
            var hit = _map.hasFeatureAtPixel(pixel);
            _map.getViewport().style.cursor = hit ? 'pointer' : '';
        });
        markers.push(marker);
    }
    );
    var vectorSource = new ol.source.Vector({
        features: markers
    });
    markerVectorLayer = new ol.layer.Vector({
        source: vectorSource,
    });
    _map.addLayer(markerVectorLayer);
    _map.getView().fit(vectorSource.getExtent(), _map.getSize(), {
        duration: 2000
    });
    view.animate({
        zoom: _map.getView().getZoom() - 2,
        duration: 2000 / 2
    }, {
        zoom: _map.getView().getZoom() - 0.5,
        duration: 2000 / 2
    }, function() {});
  }

  $("<link/>", {rel: "stylesheet", type: "text/css", href: "https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/css/ol.css"}).appendTo("head");

  $.getScript('https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/build/ol.js', function() {
      var view;

      view = new ol.View({ zoom: 8 });
      var africa_map = new ol.Map({ target: 'africa_map', layers: [new ol.layer.Tile({ source: new ol.source.OSM() })], view: view, });
      _coordinates = [
        {latitude: 0.0236, longitude: 37.9062 }, // Kenya
        {latitude: 1.3733, longitude: 32.2903 }, // Uganda
        {latitude: 6.3690, longitude: 34.8888 }, // Tanzania
        {latitude: 1.9403, longitude: 29.8739 }, // Rwanda
        {latitude: 9.1450, longitude: 40.4897 }, // Ethiopia
        {latitude: 7.9465, longitude: 1.0232 }, // Ghana
      ];
      getResourcesData(africa_map, _coordinates, view);

      view = new ol.View({ zoom: 8 });
      var kenya_map = new ol.Map({ target: 'kenya_map', layers: [new ol.layer.Tile({ source: new ol.source.OSM() })], view: view, });
      _coordinates = [
        {latitude: -1.286389, longitude: 36.817223 },
        {latitude: 0.569525, longitude: 34.558376 },
        {latitude: -0.680482, longitude: 34.777061 },
        {latitude: 0.514277, longitude: 35.269779 },
        {latitude: -0.717178, longitude: 36.431026 },
        {latitude: -3.219186, longitude: 40.116890 },
        {latitude: -1.375081, longitude: 37.995213 },
        {latitude: -4.043740, longitude: 39.658871 },
        {latitude: -0.091702, longitude: 34.767956 },
      ];
      getResourcesData(kenya_map, _coordinates, view);
  });

})(jQuery);
