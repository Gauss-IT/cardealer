
<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- mega-menu -->
<script type="text/javascript" src="{{asset('js/mega-menu/mega_menu.js')}}"></script>

<!-- appear -->
<script type="text/javascript" src="{{asset('js/jquery.appear.js')}}"></script>

<script type="text/javascript" src="{{asset('js/isotope/isotope.pkgd.min.js')}}"></script>


<!-- counter -->
<script type="text/javascript" src="{{asset('js/counter/jquery.countTo.js')}}"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- select -->
<script type="text/javascript" src="{{asset('js/select/jquery-select.js')}}"></script>

<!-- magnific popup -->
<script type="text/javascript" src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- revolution -->
<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- custom -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<script>
  $(document).ready(function() {
    var filterCol = $("#filter-col");
    var carCols = $('.car-thumb-col').toArray();
    console.log(carCols)
    // console.log(filterCol);
    $(".filter-arrow").click(function() {
      $(".f-body").slideToggle();
      if($(this).css("transform") == "none"){
        filterCol.detach();
        filterCol.appendTo("#closed-filter-row");
        // [].forEach(carCols, function(elem){
        //   elem.classList.remove('col-lg-3');
        //   elem.classList.append('col-lg-4')
        // });
        for(var i = 0; i<carCols.length; i++){
          $(carCols[i]).removeClass('col-lg-3');
          $(carCols[i]).addClass('col-lg-4');
        }
        $(this).css("transform", "rotate(180deg)");
      }
      else{
        $(this).css("transform", "");
        filterCol.detach();
        filterCol.prependTo("#car-row");
        // [].forEach(carCols, function(elem){
        //   elem.classList.remove('col-lg-4');
        //   elem.classList.append('col-lg-3');
        // });
        for(var i = 0; i<carCols.length; i++){
          $(carCols[i]).removeClass('col-lg-4');
          $(carCols[i]).addClass('col-lg-3');
        }
      }
    });
  });
</script>

<script type="text/javascript">
   (function($){
  "use strict";

    var tpj=jQuery;
      var revapi2;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_2_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_2_1");
        }else{
          revapi2 = tpj("#rev_slider_2_1").show().revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              bullets: {
                enable:true,
                hide_onmobile:false,
                style:"hermes",
                hide_onleave:false,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:50,
                                space:10,
                tmp:''
              }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1570,
            gridheight:1000,
            lazyType:"none",
            shadow:0,
            spinner:"spinner3",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      });
  })(jQuery);

  /* .navbar-collapse {
      position: absolute;
      top: 54px;
      left: 0;
      padding-left: 15px;
      padding-right: 15px;
      padding-bottom: 15px;
      width: 30%;
  }
  .navbar-collapse.collapsing {
      height: auto;
      -webkit-transition: left 0.3s ease;
      -o-transition: left 0.3s ease;
      -moz-transition: left 0.3s ease;
      transition: left 0.3s ease;
      left: -1%;
  }
  .navbar-collapse.show {
      left: 0;
      -webkit-transition: left 0.3s ease-in;
      -o-transition: left 0.3s ease-in;
      -moz-transition: left 0.3s ease-in;
      transition: left 0.3s ease-in;
  } */

</script>

<script>
jQuery(document).ready(function(){
  jQuery("#carouselExampleIndicators").carousel({interval: 2500});
})
</script>

<script>
  $('#carouselExampleIndicators img').each(function(){
    var img = $(this);
    var imgParent = $(this).parent();
    function parallaxImg () {
      var speed = img.data('speed');
      var imgY = imgParent.offset().top;
      var winY = $(this).scrollTop();
      var winH = $(this).height();
      var parentH = imgParent.innerHeight();


      // The next pixel to show on screen
      var winBottom = winY + winH;

      // If block is shown on screen
      if (winBottom > imgY && winY < imgY + parentH) {
        // Number of pixels shown after block appear
        var imgBottom = ((winBottom - imgY) * speed);
        // Max number of pixels until block disappear
        var imgTop = winH + parentH;
        // Porcentage between start showing until disappearing
        var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
      }
      img.css({
        top: imgPercent + '%',
        transform: 'translate(-50%, -' + imgPercent + '%)'
      });
    }
    $(document).on({
      scroll: function () {
        parallaxImg();
      }, ready: function () {
        parallaxImg();
      }
    });
  });
</script>
</body>
</html>
