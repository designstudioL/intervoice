
/*------------------------------------------------------------------
ローディング
/*------------------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', (e)=> {
  $('.js-loading').delay(800).fadeOut(1200);
});


/*------------------------------------------------------------------
メニュー開閉
/*------------------------------------------------------------------*/

//ハンバーガーメニュー
$('.l-header-hamburger').on('click', function() {
  $(this).toggleClass('-open');
  if($(this).hasClass('-open')) {
    globalMenuOpen();
  }
  else {
    globalMenuClose();
  }
});

function globalMenuOpen() {
  $('.l-header-hamburger-bg').addClass('-open');
  $('.l-header-hamburger-bg01').addClass('-open');
  setTimeout(function(){
    $('.l-header-hamburger-bg02').addClass('-open');
    $('.l-header-hamburger-bg03').addClass('-open');
    $('.l-header-hamburger-bg04').addClass('-open');
    $('.l-header-hamburger-bg05').addClass('-open');
    $('.l-header-hamburger-bg06').addClass('-open');
    $('.l-header-hamburger-bg07').addClass('-open');
  }, 500);
  $('.l-header-hamburger-logo').css({'z-index':'4'});
  $('.l-header-hamburger-nav').css({'z-index':'5'});
  $('.l-header-hamburger-copyright').css({'z-index':'6'});
  setTimeout(function(){
    $('.l-header-hamburger-logo').addClass('-open');
    $('.l-header-hamburger-nav').addClass('-open');
    $('.l-header-hamburger-copyright').addClass('-open');
  }, 1000);
}

function globalMenuClose() {
  $('.l-header-hamburger-bg02').removeClass('-open');
  $('.l-header-hamburger-bg03').removeClass('-open');
  $('.l-header-hamburger-bg04').removeClass('-open');
  $('.l-header-hamburger-bg05').removeClass('-open');
  $('.l-header-hamburger-bg06').removeClass('-open');
  $('.l-header-hamburger-bg07').removeClass('-open');
  $('.l-header-hamburger-logo').css({'z-index':'-999'});
  $('.l-header-hamburger-nav').css({'z-index':'-999'});
  $('.l-header-hamburger-logo').removeClass('-open');
  $('.l-header-hamburger-nav').removeClass('-open');
  $('.l-header-hamburger-copyright').removeClass('-open');
  setTimeout(function(){
    $('.l-header-hamburger-bg01').removeClass('-open');
  }, 300);
  setTimeout(function(){
    $('.l-header-hamburger-bg').removeClass('-open');
  }, 500);
}


$(window).on('load resize', function(){
  var winW = $(window).width();
  var devW = 960;
  if (winW <= devW) {
    //960px以下の時の処理
  } else {
    //960pxより大きい時の処理
    $('.l-header-hamburger').removeClass('-open');
    $('.l-header-hamburger-bg').removeClass('-open');
    $('.l-header-hamburger-bg01').removeClass('-open');
    $('.l-header-hamburger-bg02').removeClass('-open');
    $('.l-header-hamburger-bg03').removeClass('-open');
    $('.l-header-hamburger-bg04').removeClass('-open');
    $('.l-header-hamburger-bg05').removeClass('-open');
    $('.l-header-hamburger-bg06').removeClass('-open');
    $('.l-header-hamburger-bg07').removeClass('-open');
    $('.l-header-hamburger-logo').css({'z-index':'-999'});
    $('.l-header-hamburger-nav').css({'z-index':'-999'});
    $('.l-header-hamburger-copyright').css({'z-index':'-999'});
    $('.l-header-hamburger-logo').removeClass('-open');
    $('.l-header-hamburger-nav').removeClass('-open');
    $('.l-header-hamburger-copyright').removeClass('-open');
  }
});



/*------------------------------------------------------------------
ページトップへ戻るボタン
/*------------------------------------------------------------------*/

$(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 1) {
      $('.pageTop').fadeIn(300).css('display', 'flex')
    } else {
      $('.pageTop').fadeOut(300)
    }
  });
});

$(function() {
  $('a[href^="#"]:not(a.noscroll)').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});



/*------------------------------------------------------------------
矢印アニメーション
/*------------------------------------------------------------------*/
//ボタン
$(function() {
  const arrowLinks = document.querySelectorAll('.-arw');
  if(arrowLinks.length > 0) {
      arrowLinks.forEach((arrowLink) => {
          arrowLink.addEventListener('mouseenter', function() {
              arrowLink.classList.add('is-hover');
          },{
              once: true
          });
      });
  }
});


//ボタン2
$(function() {
  const arrowLinks = document.querySelectorAll('.-arw2');
  if(arrowLinks.length > 0) {
      arrowLinks.forEach((arrowLink) => {
          arrowLink.addEventListener('mouseenter', function() {
              arrowLink.classList.add('is-hover');
          },{
              once: true
          });
      });
  }
});


//ページトップボタン
$(function() {
  const arrowLinks2 = document.querySelectorAll('.pageTop');
  if(arrowLinks2.length > 0) {
      arrowLinks2.forEach((arrowLink2) => {
          arrowLink2.addEventListener('mouseenter', function() {
              arrowLink2.classList.add('is-hover');
          },{
              once: true
          });
      });
  }
});

//実績カード
$(function() {
  const arrowLinks3 = document.querySelectorAll('.p-carousel-card');
  if(arrowLinks3.length > 0) {
      arrowLinks3.forEach((arrowLink3) => {
          arrowLink3.addEventListener('mouseenter', function() {
              arrowLink3.classList.add('is-hover');
          },{
              once: true
          });
      });
  }
});

//スライド前後ボタン
$(function() {
  const arrowLinks4 = document.querySelectorAll('.swipe-arr');
  if(arrowLinks4.length > 0) {
      arrowLinks4.forEach((arrowLink4) => {
          arrowLink4.addEventListener('mouseenter', function() {
              arrowLink4.classList.add('is-hover');
          },{
              once: true
          });
      });
  }
});

//私たちについて ページ内リンク
$(function() {
  const arrowLinks5 = document.querySelectorAll('.p-about--nav ul li a');
  if(arrowLinks5.length > 0) {
      arrowLinks5.forEach((arrowLink5) => {
          arrowLink5.addEventListener('mouseenter', function() {
              arrowLink5.classList.add('is-hover');
          },{
              once: true
          });
      });
  }
});




/*------------------------------------------------------------------
事例スライダー
/*------------------------------------------------------------------*/

//$(window).on("load",function(){
  const swiper = new Swiper(".swiper", {
    loop: true,
		speed: 1000, //切り替えのアニメーションスピード
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    // ページネーションが必要なら追加
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      //520px以上の場合
      520: {
        slidesPerView: 1.6,
        centeredSlides: false,
        spaceBetween: 24,
      },
      //768px以上の場合
      768: {
        slidesPerView: 2.5,
        centeredSlides: false,
        spaceBetween: 32,
      },
      //1160px以上の場合
      1160: {
        slidesPerView: 3.4,
        centeredSlides: false,
        spaceBetween: 40,
      },
    },
    // ナビボタンが必要なら追加
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });



/*------------------------------------------------------------------
サービス　スクロール固定
/*------------------------------------------------------------------*/

$(function(){
  $(window).scroll(function () {
    $('.--scrollfix .contents div').each(function () {
      boxNum = $(this).attr("class"),
      scrollTop = $(window).scrollTop();
      areaTop = $(this).offset().top;
      if (scrollTop > areaTop) {
        $('.--scrollfix .images .' + boxNum).addClass('active');
      } else{
        $('.--scrollfix .images .' + boxNum).removeClass('active');
      }
    });
  });
});





	// var swiper1 = new Swiper('.c-swiper-container', {
	// 		loop: true,
	// 		slidesPerView: 1,
	// 		centeredSlides: true,
	// 		spaceBetween:vw(3),
	// 	initialSlide: 1,
	// 	breakpoints: {
	// 	// 768px以上の場合
	// 	768: {
	// 		slidesPerView: 1,
	// 		spaceBetween:vw(3),
	// 	},
	// 	// 980px以上の場合
	// 	980: {
	// 		slidesPerView: 3,
	// 		initialSlide: 0,
	// 	},
	// 	// 1200px以上の場合
	// 	1200: {
	// 	centeredSlides: false,
	// 		spaceBetween:vw(5),
	// 		slidesPerView: 2,
	// 		initialSlide: 0,
	// 	}
	// 	},
	// 	navigation: {
	// 	nextEl: '.swipe-arr.-right',
	// 	prevEl: '.swipe-arr.-left',
	// 	}

	// });


//});




// document.addEventListener('DOMContentLoaded', (e)=> {
//    $('.js-loading').delay(1000).fadeOut();
// });

// $(window).on("load",function(){
//   $('.c-lang .select_box').css('opacity', '1');
// });

// $(function() {
//   let headerTop = $('#js-fixed-header-sp').innerHeight();
//   let headerTop_Menu = $('#js-fixed-header-pc').innerHeight() +  + $('#js-fixed-header-sp').innerHeight();

//   setMainContsTop();
  
  
//   //ハンバーガーメニュー
//   $('.l-header-hamburger').on('click', function() {
//     $(this).toggleClass('-open');
    
//     if($(this).hasClass('-open')) {
//       globalMenuOpen();
//     }
    
//     else {
//       globalMenuClose();
//     }
//   });
  
//   document.addEventListener('click', (e) => {
//   if(!e.target.closest('.l-header')) {
//       globalMenuClose();
//     $('.l-header-hamburger').removeClass('-open');
//   }
// })
  
//   function globalMenuOpen() {
//       $('#js-header').addClass('-open');
//       $('#js-body').addClass('-gmenu-open');
//       $('#js-drawer').slideDown();
      
//       if(isTab()) {
//         $('#js-fixed-header-sp').slideDown();
//       } 
      
//       if(!isLap()) {
//         $('#js-header-menu-primary').slideDown();
//       }
//   }
  
  
  
//   function globalMenuClose() {
//       $('#js-body').removeClass('-gmenu-open');
//       $('#js-drawer').slideUp();
      
//       if(isTab()) {
//         if($('#js-fixed-header-pc').hasClass('-fixed')) {
//           $('#js-fixed-header-sp').slideUp();
//         }
//       } 
//       if(!isLap()) {
//         $('#js-header-menu-primary').slideUp();
//       }
      
//       setTimeout(function(){
//         $('#js-header').removeClass('-open');
//       }, 500);
//   }
  
  
//   //(SP) Language Menu
//   $('.js-lang-button.-head-drawer').on('click', function() {
//     $(this).toggleClass('-open');
//     if($(this).hasClass('-open')) {
//       $(this).next('.js-lang-select').slideDown();
//     } else {
//       $(this).next('.js-lang-select').slideUp();
//     }
//   });
  
//   var lastInnerWidth = window.innerWidth ;
//   $(window).resize(function() {
//     if(lastInnerWidth != window.innerWidth) {
//     // 960px以上
//       if(isLap()) {
//         $('#js-header-menu-primary').css('display', 'flex');
//       }
//     // 960px未満
//       else {
//         $('#js-header-menu-primary').css('display', 'none');
//         headerTop = $('.l-header__top').innerHeight();
//       }
//       setMainContsTop()
    
//       lastInnerWidth = window.innerWidth ;
//     }
//   });
  
  
//   $(window).scroll(function() {
//     var scrollTop = $(window).scrollTop();
    
//     // 右下エリアマップ
//     if(scrollTop > 0) {
//       $('#js-areamap').fadeOut();
//     } else {
//       $('#js-areamap').fadeIn();
//     }
    
    
//     //ヘッダー周りの処理
//     // 768px以上
//     if(isTab()) {
//       if(scrollTop > headerTop) {
//         $('#js-fixed-header-pc').addClass('-fixed');
//       } else {
//         $('#js-fixed-header-pc').removeClass('-fixed');
//         $('#js-fixed-header-sp').show();
//       }
//       setMainContsTop();
//     }
//     // 768px未満
//     else {
//     }
//   });
  
//   function setMainContsTop() {
//     $('#js-main').css('padding-top', headerTop_Menu);
//   }
  
// 	function isLap() {
// 		var ret;
// 		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
// 		if(width >= 960) { ret = true;}
// 		else { ret= false;}
// 		return ret;
// 	}
// 	function isTab() {
// 		var ret;
// 		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
// 		if(width >= 768) { ret = true;}
// 		else { ret= false;}
// 		return ret;
// 	}
  
//   // tab
//   $('.js-tab-button').on('click', function() {
//     parent = $(this).parents('.js-tab-parent');
    
//     parent.find('.js-tab-button').removeClass('-active');
//     $(this).addClass('-active');
    
//     parent.find('.c-tab-contents').removeClass('-active');
//     $('#'+$(this).data('target')).addClass('-active');
//   });
  


// $(window).on("load resize",function(){
//     if(window.matchMedia("(max-width:768px)").matches){
//     }else{
//       $('.facility-tab .c-tab-control__button.-white').addClass('-active');
//       $('.facility-tab .c-tab-control__button.-green').removeClass('-active');
//       $('#tab-list').addClass('-active');
//       $('#tab-map').removeClass('-active');
//     }
// });//end load resize



//   //タブを指定してページを開いた場合
//   $(function() {
//     var urlHash = location.hash;
//     // URLにアンカーが存在し、タブの場合
//     if(urlHash){
//       if($(urlHash).hasClass('c-tab-contents')) {
//         parent = $(urlHash).parents('.js-tab-parent');
        
//         parent.find('.js-tab-button').removeClass('-active');
//         parent.find('.js-tab-button[data-target="'+urlHash.substr(1)+'"]').addClass('-active');

//         parent.find('.c-tab-contents').removeClass('-active');
//         $(urlHash).addClass('-active');
        
//         setTimeout(function() {
//         console.log(parent.offset().top - $('#js-header').innerHeight());
//         $(window).scrollTop(parent.offset().top - $('#js-header').innerHeight());
//         }, 500);
//       }
//     }
//   });

// //アコーディオン設定
//     // facility-tab
//     $('.js-tab-button').on('click', function() {
//       parent = $(this).parents('.js-tab-parent');
      
//       parent.find('.js-tab-button').removeClass('-active');
//       $(this).addClass('-active');
      
//       parent.find('.c-tab-contents').removeClass('-active');
//       $('#'+$(this).data('target')).addClass('-active');
//     });
  
  
//   // FAQ
//   $('.p-faq-list__item').on('click', function() {
//     $(this).toggleClass('-open');
    
//     if($(this).hasClass('-open')) {
//       $(this).find('.p-faq-list__answer').slideDown();
//     } else {
//       $(this).find('.p-faq-list__answer').slideUp();
//     }
//   });


//   // facility
//   $('.facility-acd').on('click', function() {
//     $(this).toggleClass('-open');
    
//     if($(this).hasClass('-open')) {
//       $(this).next('.p-facility-list__dd').slideDown();
//     } else {
//       $(this).next('.p-facility-list__dd').slideUp();
//     }
//   });

//   // RECRUIT
//   $('.p-recruit-list__item').on('click', function() {
//     $(this).toggleClass('-open');

//     if($(this).hasClass('-open')) {
//       $(this).find('.p-recruit-list__txt').slideDown();
//     } else {
//       $(this).find('.p-recruit-list__txt').slideUp();
//     }
//   });

//   // HOME
//   $('.p-home-sp_accordion__item').on('click', function() {
//     $(this).toggleClass('-open');
//     if($(this).hasClass('-open')) {
//       $(this).find('.p-home-sp_accordion__txt').slideDown();
//     } else {
//       $(this).find('.p-home-sp_accordion__txt').slideUp();
//     }
//   });

//   $(window).on("load",function(){
//     $('.p-home-sp_accordion__item.-open .p-home-sp_accordion__txt').slideDown();
//   });



//スライダー


//   if($('.js-gallery-slider').length > 0) {
//     gallerySlider = new Swiper('.js-gallery-slider', {
//       loop: true,
//       speed: 12000,
//       spaceBetween: 12,
//       slidesPerView:1.6,
//       autoplay: {
//         delay: 0,
//         disableOnInteraction: false,
//       },
//       breakpoints: {
//         768 : {
//           spaceBetween: 32,
//           slidesPerView: 2.4,
//         }
//       }
//     });
//   }

// });




// //トップページアコーディオン
// $(window).on("load",function(){
//   if(window.matchMedia("(max-width:768px)").matches){
//     $('.accordion_area .-block .-body').css({display:'none'});
//     $('.accordion_area .-block .-header.-open + .-body').css({display:'block'});
//     $('.accordion_area .-block .-header').on('click', function() {
//       if($(this).next().css('display') == 'none') {
//         $(this).next().slideDown();
//         $(this).toggleClass("-open");
//         $('.accordion_area .-block .-header').not($(this)).removeClass("-open");
//         $('.accordion_area .-block .-header').not($(this)).next().slideUp();
//       } else {
//         $(this).removeClass("-open");
//       }
//     });
//   }else{
//     $(function(){
//       $('.accordion_area .-block .-body').css({display:'block'});
//       $('.accordion_area .-block .-body').slideDown();
//       $('.accordion_area .-block1 .-header').click(function(){
//         $('.accordion_area .-block1 .-header').addClass('-open');
//         $('.accordion_area .-block2 .-header').removeClass('-open');
//         $('.accordion_area .-block3 .-header').removeClass('-open');
//         $('.accordion_area .-block2').css({left:'calc(100% - 252px)'});
//         $('.accordion_area .-block3').css({left:'calc(100% - 126px)'});
//       });
//       $('.accordion_area .-block2 .-header').click(function(){
//         $('.accordion_area .-block1 .-header').removeClass('-open');
//         $('.accordion_area .-block2 .-header').addClass('-open');
//         $('.accordion_area .-block3 .-header').removeClass('-open');
//         $('.accordion_area .-block2').css({left:'126px'});
//         $('.accordion_area .-block3').css({left:'calc(100% - 126px)'});
//       });
//       $('.accordion_area .-block3 .-header').click(function(){
//         $('.accordion_area .-block1 .-header').removeClass('-open');
//         $('.accordion_area .-block2 .-header').removeClass('-open');
//         $('.accordion_area .-block3 .-header').addClass('-open');
//         $('.accordion_area .-block2').css({left:'126px'});
//         $('.accordion_area .-block3').css({left:'252px'});
//       });
//     });
//   }
// });


// $(window).on("resize",function(){
//   if(window.matchMedia("(max-width:768px)").matches){
//     $('.accordion_area .-block .-body').css({display:'none'});
//     $('.accordion_area .-block .-header.-open + .-body').css({display:'block'});
//   }else{
//     $(function(){
//       $('.accordion_area .-block .-body').css({display:'block'});
//       $('.accordion_area .-block .-body').slideDown();
//     });
//   }
// });


// //ショップ＆レストラン　絞り込み
// document.addEventListener("DOMContentLoaded", function() {
//   const filterItems = document.querySelectorAll('.c-list-std__item');

//   filterItems.forEach(function(filterItem) {
//       filterItem.addEventListener('click', function() {
//           // クリックされたフィルター項目にis-activeクラスを追加し、それ以外の項目からis-activeクラスを削除する
//           filterItems.forEach(function(item) {
//               if (item === filterItem) {
//                   item.classList.add('active');
//               } else {
//                   item.classList.remove('active');
//               }
//           });
//           const filterValue = filterItem.getAttribute('data-filter');
//           const items = document.querySelectorAll('.p-restaurant-list > li');
//           items.forEach(function(item) {
//               if (filterValue === 'all' || item.getAttribute('data-item').includes(filterValue)) {
//                   fadeOut(item, function() {
//                       fadeIn(item);
//                   });
//               } else {
//                   fadeOut(item);
//               }
//           });
//       });
//   });

//   function fadeIn(element) {
//       element.style.display = 'block';
//       setTimeout(function() {
//           element.classList.add('fade-in');
//       }, 50);
//   }

//   function fadeOut(element, callback) {
//       element.classList.remove('fade-in');
//       setTimeout(function() {
//           element.style.display = 'none';
//           if (typeof callback === 'function') {
//               callback();
//           }
//       }, 500); // タイマーを使用してフェードアウト完了後に非表示にする
//   }
// });


// //動画表示
// $(function(){
//   const videoPc = document.querySelector("#js-video-pc"); //pc版のビデオタグ
//   const videPcSrc = videoPc.getAttribute("data-src"); //pc版のビデオタグのdata-src

//   const videoSp = document.querySelector("#js-video-sp"); //sp版のビデオタグ
//   const videoSpSrc = videoSp.getAttribute("data-src"); //sp版のビデオタグのdata-src

//   let pcVideoBool = false;
//   let spVideoBool = false;

//   if (768 <= window.innerWidth) {
//     //画面幅768pxより大きければpc版読み込み
//     videoPc.src = videPcSrc;
//     pcVideoBool = true;
//   } else {
//     //それ以外の場合sp版読み込み
//     videoSp.src = videoSpSrc;
//     spVideoBool = true;
//   }
//   window.addEventListener("resize", () => {
//     //画面をresize時
//     if (768 <= window.innerWidth && !pcVideoBool) {
//       //画面幅768pxより大きいかつ、pc版の動画をまだ読み込んでいない場合
//       videoPc.src = videPcSrc;
//       pcVideoBool = true;
//     }

//     if (768 > window.innerWidth && !spVideoBool) {
//       //画面幅768px未満かつ、sp版の動画をまだ読み込んでいない場合
//       videoSp.src = videoSpSrc;
//       spVideoBool = true;
//     }
//   });
// });



// //営業時間タブ切り替え
// $(window).on("load resize",function(){
//   if(window.matchMedia("(max-width:768px)").matches){
//     $(function(){
//       $('.tab-1').css({display:'table-cell'});
//       $('.tab-2').css({display:'none',border:'none'});
//       $('.tab-3').css({display:'none',border:'none'});
//       $('#tab-1').click(function(){
//         $('#tab-1').addClass('-active');
//         $('#tab-2').removeClass('-active');
//         $('#tab-3').removeClass('-active');
//         $('.tab-1').css({display:'table-cell'});
//         $('.tab-2').css({display:'none',border:'none'});
//         $('.tab-3').css({display:'none',border:'none'});
//       });
//       $('#tab-2').click(function(){
//         $('#tab-1').removeClass('-active');
//         $('#tab-2').addClass('-active');
//         $('#tab-3').removeClass('-active');
//         $('.tab-1').css({display:'none'});
//         $('.tab-2').css({display:'table-cell',border:'none'});
//         $('.tab-3').css({display:'none',border:'none'});
//       });
//       $('#tab-3').click(function(){
//         $('#tab-1').removeClass('-active');
//         $('#tab-2').removeClass('-active');
//         $('#tab-3').addClass('-active');
//         $('.tab-1').css({display:'none'});
//         $('.tab-2').css({display:'none',border:'none'});
//         $('.tab-3').css({display:'table-cell',border:'none'});
//       });
//     });
//   }else{
//     $(function(){
//       $('#tab-1').addClass('-active');
//       $('#tab-2').removeClass('-active');
//       $('#tab-3').removeClass('-active');
//       $('.tab-1').css({display:'table-cell'});
//       $('.tab-2').css({display:'table-cell'});
//       $('.tab-3').css({display:'table-cell'});
//     });
//   }
// });

// $(window).on("load resize",function(){
//   var tab = $('.business-hours-tab ul li').length;
//   if (tab == '1') {
//     $('.business-hours-tab ul').addClass('tab-cnt01');
//   }
//   if (tab == '2') {
//     $('.business-hours-tab ul').addClass('tab-cnt02');
//   }
//   if (tab == '3') {
//     $('.business-hours-tab ul').addClass('tab-cnt03');
//   }
//   if (tab == '4') {
//     $('.business-hours-tab ul').addClass('tab-cnt04');
//   }
// });



// //キービジュアル　重要なお知らせ
// // $(window).on("load resize",function(){
// //   $(window).scroll(function() {
// //     var scroll;
// //     var winH = $(window).height();
// //     var objTop = $('.lead-end').offset().top;
// //     scroll = $(window).scrollTop();
// //     if(scroll >= objTop - winH){
// //       $('.p-kv__news').fadeOut();
// //     }
// //     else {
// //       $('.p-kv__news').fadeIn();
// //     }
// //   });
// // });


// $(window).on("load resize", function() {
//   $(window).scroll(function() {
//     var scroll;
//     var winH = $(window).height();
//     var $leadEnd = $('.lead-end');
    
//     if ($leadEnd.length) { // 要素が存在するかどうかを確認
//       var objTop = $leadEnd.offset().top;
//       scroll = $(window).scrollTop();
      
//       if(scroll >= objTop - (winH * 1.03)) {
//         $('.p-kv__news').fadeOut();
//       } else {
//         $('.p-kv__news').fadeIn();
//       }
//     }
//   });
// });