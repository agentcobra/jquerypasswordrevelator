(function($) {
  jQuery.fn.passwordrevelator = function(options) {
    var defaults = {
      color: 'white',
      background: 'red'
    }
    var options = $.extend(defaults, options);

    return this.each(function() {
      var $$ = $(this);
      $(':password').each(function(){
        $(this).append('<button class="btn" type="button">show</button>').wrap('<div class="passwordrevelator"/>');
        console.log('Created.');
      });
      $$.mousedown(function(){
        console.log('Mouse down.');
        $("bouton > i").removeClass("icon-eye-open").addClass("icon-eye-close");

      });
      $$.mouseup(function(){
        console.log('Mouse up.');
        $("bouton > i").removeClass("icon-eye-close").addClass("icon-eye-open");
      });
    });
  };

})(jQuery)