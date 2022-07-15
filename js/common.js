//gnb
$(document).ready(function () {
  $(window).resize(function () {
    var w = $(window).innerWidth();

    if (w >= 1024) {
      $('.panelbtn a').removeClass('on');
      $('.panelbtn').removeClass('on');
      $('.gnb').removeClass('on');
      $('.blackbg').removeClass('on');

      pcGnb();
    } else {
      $('.gnb > a').off('mouseleave');

      mtGnb();
    }
  });

  $('.panelbtn a ,.blackbg').click(function () {
    $('.panelbtn a').toggleClass('on');
    $('.blackbg').toggleClass('on');
    $('.panelbtn').toggleClass('on');
    $('.gnb').toggleClass('on');
  });

  function mtGnb() {
    $('.gnb .topnav').off('click');
    $('.gnb .topnav').click(function () {
      var is = $(this).next().is(':hidden');

      if (is) {
        $(this).addClass('on');
        $(this).next().slideDown('fast');
      }

    });
  }
  
  window.addEventListener('scroll',e=>{
    $('.gnb').removeClass('on');
    $('.panelbtn a').removeClass('on');
    $('.panelbtn').removeClass('on');
    $('.blackbg').removeClass('on');
  });
});

// header
$(document).ready(function() {
  var shrinkHeader = 200;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('#lnb').addClass('small');
    } else {
      $('#lnb').removeClass('small');
    }
  });

  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  var lnb = $("#lnb").offset().top;
  $(window).scroll(function () {
    var window = $(this).scrollTop();

    if (lnb <= window) {
      $("#lnb").addClass("fixed");
      $("#container").addClass("c_fixed");

    } else {
      $("#lnb").removeClass("fixed");
      $("#container").removeClass("c_fixed");
    }
  })


});

// top_button
$(document).ready(function () {
  $(".top_arrow").hide(); // 탑 버튼 숨김 
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) { // 스크롤 내릴 표시 
        $('.top_arrow').fadeIn();
      } else {
        $('.top_arrow').fadeOut();
      }
    });
    $('#top_button').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800); // 탑 이동 스크롤 속도 
      return false;
    });
  });
});



