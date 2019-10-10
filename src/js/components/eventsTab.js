const $tabs = $(".gc-tabbed-content-tab");
const $tabContent = $(".gc-tabbed-content-card");
const $detailToggle = $(".gc-event-schedule-detail-toggle");
const $detailBody = $(".gc-event-schedule-detail-body");

(function() {
  if ($tabs.length) {
    $tabs.on('click', function(e) {
      e.preventDefault();
      $tabs.removeClass('-active');
      $tabContent.removeClass('-active');
      $(this).addClass("-active");
      $($(this).find('a').attr('href')).addClass('-active');
    });
  }

  if ($detailToggle.length) {
    $detailToggle.on('click', function() {
      $(this).toggleClass('-is-open');
      $(this)
        .parents(".gc-event-schedule-content")
        .find(".gc-event-schedule-detail-body")
        .toggleClass('-collapsed');
    });
  }
})();
