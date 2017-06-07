jQuery.noConflict();

jQuery(document).ready(function($) {

    function onScrollInit( items, trigger ) {
      items.each( function() {
        var osElement = $(this),
            osAnimationClass = osElement.attr('data-animation'),
            osAnimationDelay = osElement.attr('data-animation-delay');

            osElement.css({
              '-webkit-animation-delay':  osAnimationDelay,
              '-moz-animation-delay':     osAnimationDelay,
              'animation-delay':          osAnimationDelay
            });

            var osTrigger = ( trigger ) ? trigger : osElement;

            osTrigger.waypoint(function() {
              osElement.addClass('animated').addClass(osAnimationClass);
              this.destroy();
              },{
                  offset: '90%'
            });
      });
    }

    onScrollInit( $('.animate-me') );

    $('#content > .row.divided').after('<div class="row collapse"><div class="column medium-3"></div><div class="column medium-9"><hr class="divider" /></div></div>');

});
