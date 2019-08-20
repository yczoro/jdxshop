window.Jdx = {};
(function($){
    var func = {};
    func.ojj = {
    	init: function(){
            var _self = this;
    		_self.categoryToggle();
            _self.topBnrClose();
    		_self.quickToggle();
    		_self.goTop();
    		_self.topBtnPos();
    		_self.winScroll();
    		_self.mainPopClose();
            _self.tabClassToggle();
            _self.sortingToggle();
            _self.popupView();
            _self.loginTabToggle();//190719 추가
            _self.searchInputChange();//190719 추가
    	},
        categoryToggle: function(){//메뉴 토글링
            var $menu_wr = $('.h_nav .dth1'),
                $menu = $('.h_nav .dth1_menu');
            $menu.on('mouseenter', function(){
                var $this = $(this);
                $menu_wr.removeClass('is-active');
                $this.parent().addClass('is-active');
            });
            $('.h_nav').on('mouseleave', function(){
                $menu_wr.removeClass('is-active');
            });
        },
    	topBnrClose: function(){//상단 띠배너 close
    		var $banner = $('.h_topBanners');
    		$banner.find('.bt-tp-cls').on('click', function(e){
    			e.preventDefault();
    			$banner.addClass('is-close');
    		});
    	},
    	quickToggle: function(){//우측 퀵메뉴 토글링
    		var $quick = $('.h_quickMenus');
    		$quick.find('.viewer').on('click', function(e){
    			e.preventDefault();
    			$quick.toggleClass('is-active');
    		});
    	},
    	goTop: function(){//탑버튼 
    		var $btn = $('.h_gotoBtns .gotoTop');
    		$btn.on('click', function(e){
    			e.preventDefault();
    			$('html, body').stop().animate({ scrollTop: 0 }, 400);
    		});
    	},
    	topBtnPos: function(){//탑버튼 위치 잡기
    		var $footer = $('footer'),
    			$btn = $('.h_gotoBtns');
    		var $st = $(window).scrollTop(),
    			$footer_ot = $footer.offset().top - $(window).height();
            // if ($st > 0) {
            //     $btn.addClass('is-active');
            // } else {
            //     $btn.removeClass('is-active');
            //     if ($(window).height() > $(document).height()) {
            //         $btn.addClass('is-active');
            //     }
            // }
    		if ($st >= $footer_ot) {
    			$btn.css({ position: 'absolute', bottom: 'auto', top: $footer.offset().top - $btn.outerHeight() - 20 });
                // $btn.addClass('is-active');
    		} else {
    			$btn.css({ position: 'fixed', top: 'auto', bottom: 20 });
    		}
    	},
    	winScroll: function(){
    		var _self = this,
    		    $window = $(window);
    		$window.on('scroll', function(){
    		    _self.topBtnPos();
    		});
    	},
    	mainPopClose: function (){//메인페이지 팝업 닫기
    		var $btn = $('.h_winPop .pops .cls');
    		$btn.on('click', function(e){
    			e.preventDefault();
    			$(this).parent().parent().hide();
    		});
    	},
        tabClassToggle: function(){//리스트 타이틀 영역 카테고리 탭 토글링 190621 수정
            var $tab = $('.cm-tab li a');
            $tab.on('click', function(e){
                e.preventDefault();
                $(this).closest('.cm-tab').find('a').removeClass('on');
                $(this).addClass('on');
            });
        },
        sortingToggle: function(){//소팅 셀렉트
            $('.comm-dropdown > button, .comm-dropdown > a').on('click', function(){
                if ($(this).parent().hasClass('active')) {
                    $('.comm-dropdown').removeClass('active');
                    $(this).parent().removeClass('active');
                    $(this).children().remove();
                } else {
                    $(this).parent().addClass('active');
                    $(this).append('<span></span>');
                }
                return false;
            });
            $('.comm-dropdown ul button, .comm-dropdown ul a').on('click', function(){
                $(this).parents('.comm-dropdown').find('button, a').removeClass();
                var text = $(this).text();
                $(this).addClass('active');
                $(this).parent().parent().prev().text(text);
                $('.comm-dropdown').removeClass('active');
                return false;
            });
        },
        popupView: function(){//190705 팝업 수정
            var $wrap = $('body'),
                // $onPregress = false,
                $btn_viewer = $('.func-popup-viewer'),
                $btn_close = $('.jdxPopupWrapper .func-cls');
            $btn_close.on('click', function(e){
                e.preventDefault();
                // if ($onPregress) {
                //     return false;
                // }
                $(this).closest('.jdxPopupWrapper').removeClass('is-active');
                $wrap.removeClass('is-hidden');
            });
            $btn_viewer.on('click', function(e){
                e.preventDefault();
                // $onPregress = true;
                var $class = $('.' + $(this).attr('data-popup'));
                $class.addClass('is-active');
                $wrap.addClass('is-hidden');
                // $wrap.delay(500).queue(function(){
                //     $wrap.addClass('is-hidden').dequeue();
                //     // $onPregress = false;
                // });
            });
            
        },
        loginTabToggle: function(){//190719 로그인 탭 토글링
            var $popup = $('.popup-login-input'),
                $tab = $popup.find('.reg-tab a'),
                $layer = $popup.find('.reg-tabconnnnt .conteents');
            $tab.on('click', function(e){
              e.preventDefault();
              var $this = $(this),
                    $num = $this.parent().index(),
                    $class = 'is-active';
              $tab.removeClass('on');
              $this.addClass('on');
              $layer.removeClass($class);
              $layer.eq($num).addClass($class);
            });
        },
        searchInputChange: function(){//190719 검색
            var $input = $('header .h_searchFrm input'),
                $class = 'is-active';
            $input.on('keyup', function(){//change keyup paste
                var $this = $(this);
                $this.closest('.h_search').addClass($class);
            });
            
            $('.h_search .func_close').on('click', function(e){
                e.preventDefault();
                var $this = $(this);
                $this.closest('.h_search').removeClass($class);
            });
        },
        
    };
    Jdx = func.ojj;
    Jdx.init();
})(jQuery);

function login_popup_tab_check ($num){//190719 로그인, 비회원 주문조회 링크 체크
    var $popup = $('.popup-login-input'),
        $tab = $popup.find('.reg-tab'),
        $layer = $popup.find('.reg-tabconnnnt .conteents');
    if ($num == null || $num == '') {
        $num = 0;
    }
    $tab.find('a').removeClass('on');
    $tab.find('li').eq($num).find('a').addClass('on');
    $layer.removeClass('is-active');
    $layer.eq($num).addClass('is-active');
}