import 'jarallax/dist/jarallax.min.js';

export default {
  init() {
    // JavaScript to be fired on all pages
    $( '.navbar a' ).click(function(e) {
        e.preventDefault();
        var newLocation = this.href;
        $('.pagefade').fadeOut(400);
        $('.main').fadeOut(400, function(){
          window.location = newLocation;
        });
      }
    );
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
