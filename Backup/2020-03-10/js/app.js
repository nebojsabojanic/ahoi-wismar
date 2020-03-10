

(function() {
    function trackScroll() {
            var scrolled = window.pageYOffset;
            var coords = document.documentElement.clientHeight;

            if (scrolled > coords) {
            goTopBtn.classList.add('is-active');
            }
            if (scrolled < coords) {
            goTopBtn.classList.remove('is-active');
            }
    }

    function backToTop() {
            if (window.pageYOffset > 0) {
            window.scrollBy(0, -80);
            setTimeout(backToTop, 10);
            }
    }

    var goTopBtn = document.querySelector('.go-top');

    window.addEventListener('scroll', trackScroll);
    goTopBtn.addEventListener('click', backToTop);
    })();


//     function init() {
// 	var vidDefer = document.getElementsByTagName('iframe');
// 	for (var i=0; i<vidDefer.length; i++) {
// 	if(vidDefer[i].getAttribute('data-src')) {
// 	vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
// 	} } }
//         window.onload = init;
        

