jQuery(document).ready(function(){
  function svgasimg() {
    return document.implementation.hasFeature(
      "http://www.w3.org/TR/SVG11/feature#Image", "1.1");
  }

  if (!svgasimg()){
    var e = document.getElementsByTagName("img");
    if (!e.length){
      e = document.getElementsByTagName("IMG");
    }
    for (var i=0, n=e.length; i<n; i++){
      var img = e[i],
          src = img.getAttribute("src");
      if (src.match(/svgz?$/)) {
        /* URL ends in svg or svgz */
        img.setAttribute("src",
               img.getAttribute("data-fallback"));
      }
    }
  }

  
  jQuery('.slider-partners').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    infinite: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      }
    ]
  });

  jQuery('.slimmenu').slimmenu(
  {
      resizeWidth: '1024',
      collapserTitle: '',
      animSpeed:'medium',
      indentChildren: true,
      childrenIndenter: '&raquo;',
      expandIcon: '<i class="fa fa-angle-down"></i>',
      collapseIcon: '<i class="fa fa-angle-up"></i>'
  });

  jQuery(function() {
   jQuery('a[href*="#-sc-"]:not([href="#"])').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
       var target = jQuery(this.hash);
       target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
       if (target.length) {
         jQuery('html, body').animate({
           scrollTop: target.offset().top - 150
         }, 1000);
         return false;
       }
     }
   });
  });

  jQuery("#watch").click(function() {
      var video = jQuery("#video").get(0);
      video.play();

      jQuery("#overlay").css("visibility", "hidden");
      return false;
  });

  jQuery("#watchtext").click(function() {
      var video = jQuery("#video").get(0);
      video.play();

      jQuery("#overlay").css("visibility", "hidden");
      return false;
  });

  // jQuery(window).load(function() {
  //       // Animate loader off screen
  //       jQuery(".se-pre-con").fadeOut("slow");;
  //   });

  jQuery(".searchicon").click(function() {
    jQuery(".searchfield").show();
    jQuery(".searchicon").hide();
    jQuery(".search-submit").css('display', 'block');
  });
});

jQuery(function() {
    //caches a jQuery object containing the header element
    var header = jQuery(".navigation");
    jQuery(window).scroll(function() {
      var scroll = jQuery(window).scrollTop();

      if (scroll >= 10) {
          header.addClass('fixed');
      } else {
          header.removeClass('fixed');
      }
    });
    // jQuery(window).onLoad(function(){
    //   var scroll = jQuery(window).scrollTop();
    //
    //   if (scroll >= 10) {
    //       header.addClass('fixed');
    //   } else {
    //       header.removeClass('fixed');
    //   }
    // });





    // Modal
    jQuery(function(){

    var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

      jQuery('a[data-modal-id]').click(function(e) {
        e.preventDefault();
        jQuery("body").append(appendthis);
        jQuery(".modal-overlay").fadeTo(500, 0.7);
        //jQuery(".js-modalbox").fadeIn(500);
        var modalBox = jQuery(this).attr('data-modal-id');
        jQuery('#'+modalBox).fadeIn(jQuery(this).data());
      });  
      
      
    jQuery(".js-modal-close, .modal-overlay").click(function() {
        jQuery(".modal-box, .modal-overlay").fadeOut(500, function() {
            jQuery(".modal-overlay").remove();
        });
     
    });
     
    jQuery(window).resize(function() {
        jQuery(".modal-box").css({
            // top: (jQuery(window).height() - jQuery(".modal-box").outerHeight()) / 2,
            top: '300px',
            left: (jQuery(window).width() - jQuery(".modal-box").outerWidth()) / 2
        });
    });
     
    jQuery(window).resize();
     
    });
});
