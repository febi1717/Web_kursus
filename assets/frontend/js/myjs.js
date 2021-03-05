/* animasi navbar */
  $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
        $('.navbar').addClass('active');
      } else {
        $('.navbar').removeClass('active');
      }
    });

/* animasi content */
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 350) {
          $(this).addClass("slide");
        }
    });
  });
/*  */
/*  */
  //ketika di scroll muncul icon scroll ke atas
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });
/*  */
/*  */
// owl carousel testimoni
  $('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:20,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  })
  /*  */
  /*  */
  // smooth scrolling
 $('.page-scroll').on('click', function(e) {

    var tujuan = $(this).attr('href');

    var elemenTujuan = $(tujuan);

 $('html , body').animate({
    scrollTop: elemenTujuan.offset().top - 50
 },1500,'easeInOutExpo');

 e.preventDefault();
});



