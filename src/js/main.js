/* eslint-disable space-in-parens */
'use strict';
const $ = require('jquery');
const Parallax = window.Parallax;

// HELPER FUNCTIONS
function scrollTo(elem) {
  $('html, body').animate({
    scrollTop: $(elem).offset().top
  }, 500);
}

$(document).ready(function() {

  const $nav = $('#nav');
  const $footer = $('.footer');
  const $hero = $('.js-hero-home');
  const $main = $('.elementor-inner', '.home');
  const $heroContent = $('.js-hero-content');
  const $heroTitle = $('.js-hero-title');
  const $heroCaption = $('.js-hero-caption');

  $('body').addClass('loaded');
  $hero.css( 'height', window.innerHeight );
  $('.hero__bg').css( 'height', window.innerHeight );
  $main.css('paddingTop', window.innerHeight - 140);

  // Hero dimensions
  $(window).resize(() => {
    $hero.css( 'height', window.innerHeight );
    $('.hero__bg').css( 'height', window.innerHeight );
    $main.css('paddingTop', window.innerHeight - 140);
  });

  // WHILE SCROLLING....

  const scene = document.getElementById('scene');
  let parallaxInstance = null;
  if (null !== scene) {
    parallaxInstance = new Parallax( scene );
  }

  $(window).scroll(() => {

    let scrollPos = $(window).scrollTop();

    // navigation bar
    if (200 < scrollPos) {
      $nav.addClass('nav_alt');
    } else {
      $nav.removeClass('nav_alt');
    }

    if (400 < scrollPos) {
      $footer.addClass('visible');
      return;
    } else {
      $footer.removeClass('visible');
    }

    // hero effects
    if (250 < scrollPos) {
      $heroContent.addClass('alt');
      $heroTitle.addClass('alt');
      $heroCaption.addClass('alt');
    } else {
      $heroContent.removeClass('alt');
      $heroTitle.removeClass('alt');
      $heroCaption.removeClass('alt');
    }
  });
});
