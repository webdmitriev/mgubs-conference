document.addEventListener('DOMContentLoaded', function () {

  // conference-block-04
  $(".conference-block-04 .conference-items .conference-item").each((idx, el) => {
    console.log(idx);
    if (idx >= 4) {
      $(el).hide()
    }
  })

  $(".conference-block-04").on("click", ".conference-btn", function () {
    $(this).hide()
    $(".conference-block-04 .conference-items .conference-item").each((idx, el) => {
      $(el).show()
    })
  })

});