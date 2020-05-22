// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import videojs from "video.js";

$(function ($) {
  let w = $(window).width();
  let md = 991.98;

  videojs("pv", {
    controls: true,
    autoplay: false,
    preload: "auto",
  });

  if (w <= md) {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
    });
  }

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
