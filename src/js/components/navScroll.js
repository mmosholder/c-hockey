const $window = $(window);
const $header = $(".gc-header");

(function () {
  if ($header.length) {
    $window.scroll(function () {
      var scroll = $window.scrollTop();
      if (scroll >= 40 && $(window).width() >= 992) {
        $header.addClass('-collapse');
      } else {
        $header.removeClass("-collapse");
      }
    });
  }
})();
