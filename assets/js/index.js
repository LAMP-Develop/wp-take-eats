// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import videojs from "video.js";
import slick from "slick-carousel";

$(window).on('load', function() {
  // padding調整
  $("main").css("padding-top", $(".header").outerHeight() + "px");
});

$(window).on('load resize', function() {
  let w = $(window).width();
  let md = 991.98;
  if (w <= md) {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
    });
  }
});

$(function ($) {
  // slick
  $(".home__system__slide").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  // 動画処理
  if ($("#pv").length) {
    videojs("pv", {
      controls: true,
      autoplay: false,
      preload: "auto",
    });
  }

  // デモ画面
  $(".features__demos__btns-btn").on("click", function () {
    $(".features__demos__btns-btn").removeClass("active");
    $(this).addClass("active");
    $("#demo-img").attr("src", $(this).attr("data-src"));
    $("#demo-txt").html($(this).attr("data-txt"));
  });

  // スムーススクロール
  $('a[href^="#"]').on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - 100;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  // スクロールイベント
  $(window).on("scroll", function () {
    let s = $(window).scrollTop();
    if (s > 300) {
      $(".header .navbar").addClass("scroll");
    } else {
      $(".header .navbar").removeClass("scroll");
    }
  });
});
