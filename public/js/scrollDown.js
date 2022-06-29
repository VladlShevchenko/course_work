/* begin Scroll Down Button */
(function() {
    'use strict';

    var btnScrollDown = document.querySelector('#scroll_down');

    function scrollDown() {
        var windowCoords = document.documentElement.clientHeight;
        console.log(windowCoords);
        (function scroll() {
            if (window.pageYOffset < windowCoords) {
                window.scrollBy(0, 300);
                setTimeout(scroll, 0);
            }
            if (window.pageYOffset > windowCoords) {
                window.scrollTo(0, 700);
            }
        })();
    }

    btnScrollDown.addEventListener('click', scrollDown);
})();
/* end Scroll Down Button */
