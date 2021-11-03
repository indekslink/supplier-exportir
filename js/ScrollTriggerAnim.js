// JavaScript Document
$(function() {
//   var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
   
   function DisableAnim() {
    if ($(window).width() >= $(window).height()) {
        $('.anim').addClass('revealOnScroll')
    }
   }
   
   DisableAnim();
});


$(function() {

  var $window           = $(window),
      win_height_padded = $window.height() * 1.1,
      isTouch           = Modernizr.touch;

  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

  $window.on('scroll', revealOnScroll);

  function revealOnScroll() {
    var scrolled = $window.scrollTop(),
        win_height_padded = $window.height() * 1.1;

    // Showed...
    $(".revealOnScroll:not(.animated)").each(function () {
      var $this     = $(this),
          offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function(){
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'),10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    // Hidden...
   $(".revealOnScroll.animated").each(function (index) {
      var $this     = $(this),
          offsetTop = $this.offset().top;
      if (scrolled + win_height_padded < offsetTop) {
        $(this).removeClass('animated flipInX fadeInDown fadeInUp lightSpeedIn slideInLeft fadeIn')
      }
    });
  }

  revealOnScroll();
});

//function DisableAnim() {
//  var element = document.getElementById("anim");
//  if(window.innerWidth < 600){
//       element.classList.remove("revealOnScroll");
//  }
//}
//
//	DisableAnim();
//}};