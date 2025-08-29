document.addEventListener('DOMContentLoaded', function () {

  // conference-block-04
  $(".conference-block-04 .conference-items .conference-item").each((idx, el) => {
    if (idx >= 4) {
      $(el).hide()
    }
  })

  $(".conference-block-04").on("click", ".conference-btn", function () {
    $(this).hide()
    $(".conference-block-04 .conference-items .conference-item").each((_, el) => {
      $(el).show()
    })
  })


  // conference-block-08
  $('.conference-slider').each(function () {
    const slider = $(this);
    slider.slick({
      autoplay: true,
      autoplaySpeed: 700000,
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      prevArrow: false,
      nextArrow: $('.conference-block-08 .conference-slider__next'),
      rows: 0,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            // centerMode: true,
          }
        }
      ]
    });
  })


  // conference-block-09
  $(".conference-block-09 .conference-gallery img").each((idx, el) => {
    if (idx >= 6) {
      $(el).hide()
    }
  })

  $(".conference-block-09").on("click", ".conference-btn", function () {
    $(this).hide()
    $(".conference-block-09 .conference-gallery img").each((_, el) => {
      $(el).show()
    })
  })

});