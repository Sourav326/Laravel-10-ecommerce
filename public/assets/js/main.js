var swiper = new Swiper(".beautySlider", {
  slidesPerView: 3,
  spaceBetween: 20,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".onlyAtWinningSlider", {
  slidesPerView: 12,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".bestsellerSlider", {
  slidesPerView: 6,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".brandfeatInSlider", {
  slidesPerView: 5,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".moreCatemainSlider", {
  slidesPerView: 7,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".influenceSlider", {
  slidesPerView: 4,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".discovermoreSlider", {
  slidesPerView: 3,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".categorySlider", {
  slidesPerView: 1,
  // spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".catListSlider", {
  slidesPerView: 1,
  // spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".hairconSlider", {
  slidesPerView: 4,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".brandSmallSlider", {
  slidesPerView: 7,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".testimonialeSlider", {
  slidesPerView: 2,
  spaceBetween: 10,
  // loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



$(".nav-link").hover(function () {
  $(this).click();
});

$('.fixedCart').hide();
$(document).ready(function(){
  $('.cartBtn').click(function(){
    $('.fixedCart').show();
  })
})
// $('.fixedCart').hide();
$(document).ready(function(){
  $('.fxCloseCart').click(function(){
    $('.fixedCart').hide();
  })
})


$('.applyCoupanMain').hide();
$(document).ready(function(){
  $('.ApplycoupanBtn').click(function(){
    $('.applyCoupanMain').show();
  })
})
// $('.fixedCart').hide();
$(document).ready(function(){
  $('.fxCloseapplycoupan').click(function(){
    $('.applyCoupanMain').hide();
  })
})


$('.addaddress').hide();
$(document).ready(function(){
  $('.addaddressBtn').click(function(){
    $('.addaddress').show();
  })
})
// $('.fixedCartss').hide();
$(document).ready(function(){
  $('.addaddress').click(function(){
    $('.addaddress').hide();
  })
})

$('.addreview').hide();
$(document).ready(function(){
  $('.addreviewBtn').click(function(){
    $('.addreview').show();
  })
})
// $('.fixedCartss').hide();
$(document).ready(function(){
  $('.fxCloseCart').click(function(){
    $('.addreview').hide();
  })
})

// $(".xzoom").xzoom();
$(document).ready(function() {
  $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});
  // $('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});
  // $('.xzoom3, .xzoom-gallery3').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
  // $('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});
  // $('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});

  //Integration with hammer.js
  var isTouchSupported = 'ontouchstart' in window;

  if (isTouchSupported) {
      //If touch device
      $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function(){
          var xzoom = $(this).data('xzoom');
          xzoom.eventunbind();
      });
      
      $('.xzoom, .xzoom2, .xzoom3').each(function() {
          var xzoom = $(this).data('xzoom');
          $(this).hammer().on("tap", function(event) {
              event.pageX = event.gesture.center.pageX;
              event.pageY = event.gesture.center.pageY;
              var s = 1, ls;

              xzoom.eventmove = function(element) {
                  element.hammer().on('drag', function(event) {
                      event.pageX = event.gesture.center.pageX;
                      event.pageY = event.gesture.center.pageY;
                      xzoom.movezoom(event);
                      event.gesture.preventDefault();
                  });
              }

              xzoom.eventleave = function(element) {
                  element.hammer().on('tap', function(event) {
                      xzoom.closezoom();
                  });
              }
              xzoom.openzoom(event);
          });
      });


  } else {
      //If not touch device

      //Integration with fancybox plugin
      $('#xzoom-fancy').bind('click', function(event) {
          var xzoom = $(this).data('xzoom');
          xzoom.closezoom();
          $.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
          event.preventDefault();
      });
     
      //Integration with magnific popup plugin
      $('#xzoom-magnific').bind('click', function(event) {
          var xzoom = $(this).data('xzoom');
          xzoom.closezoom();
          var gallery = xzoom.gallery().cgallery;
          var i, images = new Array();
          for (i in gallery) {
              images[i] = {src: gallery[i]};
          }
          $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
          event.preventDefault();
      });
  }
});
