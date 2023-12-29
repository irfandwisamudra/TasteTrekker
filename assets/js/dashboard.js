(function ($) {
  /* "use strict" */

  var dzChartlist = (function () {
    var screenWidth = $(window).width();

    var counterBar = function () {
      $(".counter").counterUp({
        delay: 30,
        time: 3000,
      });
    };

    /* Function ============ */
    return {
      init: function () {},

      load: function () {
        counterBar();
      },

      resize: function () {},
    };
  })();

  jQuery(document).ready(function () {});

  jQuery(window).on("load", function () {
    setTimeout(function () {
      dzChartlist.load();
    }, 1000);
  });

  jQuery(window).on("resize", function () {});
})(jQuery);
