
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
    $('.l-header-hamburger-logo').addClass('-open');
    $('.l-header-hamburger-nav').addClass('-open');
    $('.l-header-hamburger-copyright').addClass('-open');
  }, 500);
}

function globalMenuClose() {
  $('.l-header-hamburger-bg02').removeClass('-open');
  $('.l-header-hamburger-bg03').removeClass('-open');
  $('.l-header-hamburger-bg04').removeClass('-open');
  $('.l-header-hamburger-bg05').removeClass('-open');
  $('.l-header-hamburger-bg06').removeClass('-open');
  $('.l-header-hamburger-bg07').removeClass('-open');
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
  } else {
    $('.l-header-hamburger').removeClass('-open');
    $('.l-header-hamburger-bg').removeClass('-open');
    $('.l-header-hamburger-bg01').removeClass('-open');
    $('.l-header-hamburger-bg02').removeClass('-open');
    $('.l-header-hamburger-bg03').removeClass('-open');
    $('.l-header-hamburger-bg04').removeClass('-open');
    $('.l-header-hamburger-bg05').removeClass('-open');
    $('.l-header-hamburger-bg06').removeClass('-open');
    $('.l-header-hamburger-bg07').removeClass('-open');
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
    if ($(window).scrollTop() > 50) {
      $('.pageTop').fadeIn(800).css({'display':'flex'});
    } else {
      $('.pageTop').fadeOut(800);
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
$(function() {
  const arrowLinks3 = document.querySelectorAll('.p-column-card');
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
    slidesPerView: 1.1,
    centeredSlides: true,
    spaceBetween: 12,
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





/*------------------------------------------------------------------
ハンバーガーメニュー展開時に背景をスクロールさせない
/*------------------------------------------------------------------*/
$(function () {
  // ハンバーガーメニューボタンがクリックされたときのイベントハンドラを設定
  $(".l-header-hamburger").click(function () {
    // 現在のbodyタグのoverflowスタイルを確認
    if ($("body").css("overflow") === "hidden") {
      // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
      $("body").css({ height: "", overflow: "" });
    } else {
      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({ height: "100%", overflow: "hidden" });
    }
  });
});




$(document).ready(function() {
  // ページ読み込み完了から1秒後に実行
  setTimeout(function() {
    // .ani_partsクラスを持つ要素を全て取得
    var elements = $('.ani_parts').toArray();
    
    // 要素をシャッフル
    for (var i = elements.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      [elements[i], elements[j]] = [elements[j], elements[i]];
    }
    
    // 最初は全ての要素を非表示にする
    $('.ani_parts').hide();
    
    // シャッフルされた順番で要素を表示
    $.each(elements.slice(0, 12), function(index, element) {
      setTimeout(function() {
        $(element).fadeIn(800);
      }, index * 200); // 200ミリ秒ごとに表示
    });
  }, 1500); // 1000ミリ秒（1秒）後に実行
});





var $win = $(window);
$win.on('load resize', function() {
  if (window.matchMedia('(max-width:768px)').matches) {
    // SPの処理
    $(document).ready(function() {
      $(window).scroll(function() {
        $('.p-home--block01').each(function() {
          var bottom_of_element = $(this).offset().top + $(this).outerHeight() - ($(window).height() * 1.4);
          var bottom_of_window = $(window).scrollTop() + $(window).height();
          if (bottom_of_window > bottom_of_element) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg01').each(function() {
          var bottom_of_element01 = $(this).offset().top + $(this).outerHeight() - ($(window).height() * 1.4);
          var bottom_of_window01 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window01 > bottom_of_element01) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg02').each(function() {
          var bottom_of_element02 = $(this).offset().top + $(this).outerHeight() + ($(window).height() / 2);
          var bottom_of_window02 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window02 > bottom_of_element02) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg03').each(function() {
          var bottom_of_element03 = $(this).offset().top + $(this).outerHeight() - ($(window).height() * .6);
          var bottom_of_window03 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window03 > bottom_of_element03) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg04').each(function() {
          var bottom_of_element04 = $(this).offset().top + $(this).outerHeight() - ($(window).height() * 1.4);
          var bottom_of_window04 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window04 > bottom_of_element04) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg05').each(function() {
          var bottom_of_element05 = $(this).offset().top + $(this).outerHeight() - ($(window).height() * .6);
          var bottom_of_window05 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window05 > bottom_of_element05) {
            $(this).addClass('-fade');
          }
        });
      });
    });
  } else {
    // PCの処理
    $(document).ready(function() {
      $(window).scroll(function() {
        $('.p-home--block01').each(function() {
          var bottom_of_element = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 5);
          var bottom_of_window = $(window).scrollTop() + $(window).height();
          if (bottom_of_window > bottom_of_element) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg01').each(function() {
          var bottom_of_element01 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 2);
          var bottom_of_window01 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window01 > bottom_of_element01) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg02').each(function() {
          var bottom_of_element02 = $(this).offset().top + $(this).outerHeight() + ($(window).height() / 4);
          var bottom_of_window02 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window02 > bottom_of_element02) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg03').each(function() {
          var bottom_of_element03 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 3);
          var bottom_of_window03 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window03 > bottom_of_element03) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg04').each(function() {
          var bottom_of_element04 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 3);
          var bottom_of_window04 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window04 > bottom_of_element04) {
            $(this).addClass('-fade');
          }
        });
        $('.p-column--bg05').each(function() {
          var bottom_of_element05 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 4);
          var bottom_of_window05 = $(window).scrollTop() + $(window).height();
          if (bottom_of_window05 > bottom_of_element05) {
            $(this).addClass('-fade');
          }
        });
      });
    });
  }
});


// $(document).ready(function() {
//   $(window).scroll(function() {

//     $('.p-home--block01').each(function() {
//       var bottom_of_element = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 5);
//       var bottom_of_window = $(window).scrollTop() + $(window).height();
//       if (bottom_of_window > bottom_of_element) {
//         $(this).addClass('-fade');
//       }
//     });

//     $('.p-column--bg01').each(function() {
//       var bottom_of_element01 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 2);
//       var bottom_of_window01 = $(window).scrollTop() + $(window).height();
//       if (bottom_of_window01 > bottom_of_element01) {
//         $(this).addClass('-fade');
//       }
//     });

//     $('.p-column--bg02').each(function() {
//       var bottom_of_element02 = $(this).offset().top + $(this).outerHeight() + ($(window).height() / 4);
//       var bottom_of_window02 = $(window).scrollTop() + $(window).height();
//       if (bottom_of_window02 > bottom_of_element02) {
//         $(this).addClass('-fade');
//       }
//     });

//     $('.p-column--bg03').each(function() {
//       var bottom_of_element03 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 3);
//       var bottom_of_window03 = $(window).scrollTop() + $(window).height();
//       if (bottom_of_window03 > bottom_of_element03) {
//         $(this).addClass('-fade');
//       }
//     });

//     $('.p-column--bg04').each(function() {
//       var bottom_of_element04 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 3);
//       var bottom_of_window04 = $(window).scrollTop() + $(window).height();
//       if (bottom_of_window04 > bottom_of_element04) {
//         $(this).addClass('-fade');
//       }
//     });

//     $('.p-column--bg05').each(function() {
//       var bottom_of_element05 = $(this).offset().top + $(this).outerHeight() - ($(window).height() / 4);
//       var bottom_of_window05 = $(window).scrollTop() + $(window).height();
//       if (bottom_of_window05 > bottom_of_element05) {
//         $(this).addClass('-fade');
//       }
//     });

//   });
// });





