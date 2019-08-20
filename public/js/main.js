window.Jdx_Main = {};
(function($){
    var func = {};
    func.ojj = {
    	init: function(){
            var _self = this;
    		_self.mainJquery();
    	},
        mainJquery: function(){
            var main_swiper = new Swiper('.main_topSlide', {//메인 슬라이드
              pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              loop: true,
              autoplay: {
                delay: 2500,
                autoplayDisableOnInteraction: true,
                disableOnInteraction: false,
              },
              speed: 400,
            });

            var main_hot = new Swiper('.main_banSlide.hot .swiper-container', {//TODAY'S HOT 슬라이드
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              slidesPerView: 'auto',
              spaceBetween: 20,
              speed: 400,
            });

            var main_special = new Swiper('.main_banSlide.special .swiper-container', {//SPECIAL 슬라이드
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              slidesPerView: 'auto',
              spaceBetween: 20,
              speed: 400,
            });

            //룩북 슬라이드, 팝업
            var main_lookbook = new Swiper('.main_lbSlide .swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 150,
                centeredSlides: true,
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                  loop: true,
                  speed: 400,
            });
            main_lookbook.on('slideChange', function () {
              main_lookbook_popup.slideTo(this.activeIndex);
            });
            var main_lookbook_popup = new Swiper('.popup-lookbook-view .swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                centeredSlides: true,
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                  loop: true,
                  speed: 400,
            });
            // main_lookbook_popup.on('slideChange', function () {
            //   main_lookbook.slideTo(this.activeIndex);
            // });
            var $bl_btn = $('.main_lbSlide .swiper-container .swiper-slide a');
            $bl_btn.on('click', function(e){
                e.preventDefault();
                var $wrap = $('body'),
                    $class = $('.' + $(this).attr('data-popup'));
                $class.addClass('is-active');
                $wrap.addClass('is-hidden');
                main_lookbook_popup.update();
                lb_resize();
            });

            function lb_resize(){
                var $slides = $('.popup-lookbook-view .swiper-slide');
                $slides.each(function() {
                  var $this = $(this).find('img');
                  $this.removeAttr('style');
                });
                $slides.each(function() {
                    var maxWidth = $(window).width(), // Max width for the image
                        maxHeight = $(window).height(),    // Max height for the image
                        ratio = 0,  // Used for aspect ratio
                        $this = $(this).find('img'),
                        width = $this.width(),    // Current image width
                        height = $this.height();  // Current image height

                    // Check if the current width is larger than the max
                    if(width > maxWidth){
                        ratio = maxWidth / width;   // get ratio for scaling image
                        $this.css("width", maxWidth); // Set new width
                        $this.css("height", height * ratio);  // Scale height based on ratio
                        height = height * ratio;    // Reset height to match scaled image
                        width = width * ratio;    // Reset width to match scaled image
                    }

                    // Check if current height is larger than max
                    if(height > maxHeight){
                        ratio = maxHeight / height; // get ratio for scaling image
                        $this.css("height", maxHeight);   // Set new height
                        $this.css("width", width * ratio);    // Scale width based on ratio
                        width = width * ratio;    // Reset width to match scaled image
                        height = height * ratio;    // Reset height to match scaled image
                    }
                });
            }//룩북 슬라이드, 팝업 end

            var main_instagram = new Swiper('.main_instaSlide .swiper-container', {//인스타그램 슬라이드
                slidesPerView: 'auto',
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                  speed: 400,
            });

            var $clock = $('.main_banSlide .cm-timer').FlipClock(3600, {//오늘의 특가 타이머
                countdown: true
            });
        }
    };
    Jdx_Main = func.ojj;
    Jdx_Main.init();
})(jQuery);