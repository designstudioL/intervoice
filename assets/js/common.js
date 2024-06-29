
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
  setTimeout(function(){
    $('.l-header-hamburger-bg01').addClass('-open');
  }, 200);
  setTimeout(function(){
    $('.l-header-hamburger-bg02').addClass('-open');
    $('.l-header-hamburger-bg03').addClass('-open');
    $('.l-header-hamburger-bg04').addClass('-open');
    $('.l-header-hamburger-bg05').addClass('-open');
    $('.l-header-hamburger-bg06').addClass('-open');
    $('.l-header-hamburger-bg07').addClass('-open');
    // $('.l-header-hamburger-logo').css({'z-index':'4'});
    // $('.l-header-hamburger-nav').css({'z-index':'5'});
    // $('.l-header-hamburger-copyright').css({'z-index':'6'});
    $('.l-header-hamburger-logo').addClass('-open');
    $('.l-header-hamburger-nav').addClass('-open');
    $('.l-header-hamburger-copyright').addClass('-open');
  }, 500);

  // setTimeout(function(){
  //   $('.l-header-hamburger-logo').addClass('-open');
  //   $('.l-header-hamburger-nav').addClass('-open');
  //   $('.l-header-hamburger-copyright').addClass('-open');
  // }, 1000);
}

function globalMenuClose() {
  $('.l-header-hamburger-bg02').removeClass('-open');
  $('.l-header-hamburger-bg03').removeClass('-open');
  $('.l-header-hamburger-bg04').removeClass('-open');
  $('.l-header-hamburger-bg05').removeClass('-open');
  $('.l-header-hamburger-bg06').removeClass('-open');
  $('.l-header-hamburger-bg07').removeClass('-open');
  // $('.l-header-hamburger-logo').css({'z-index':'-999'});
  // $('.l-header-hamburger-nav').css({'z-index':'-999'});
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
    // $('.l-header-hamburger-logo').css({'z-index':'-999'});
    // $('.l-header-hamburger-nav').css({'z-index':'-999'});
    // $('.l-header-hamburger-copyright').css({'z-index':'-999'});
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
    autoHeight: true,
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
