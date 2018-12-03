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

  const scene = document.getElementById('scene');
  let parallaxInstance = null;
  if (null !== scene) {
    parallaxInstance = new Parallax( scene );
  }

  // WHILE SCROLLING....
  let scrollPos = 0;

  $(window).scroll(() => {
    scrollPos = $(window).scrollTop();

    // navigation bar
    if (300 < scrollPos) {
      $nav.addClass('nav_alt');
    } else {
      $nav.removeClass('nav_alt');
    }

    if (500 < scrollPos) {
      $footer.addClass('visible');
      return;
    } else {
      $footer.removeClass('visible');
    }

    // hero effects
    if (250 < scrollPos) {
      $heroContent.addClass('alt');
    } else {
      $heroContent.removeClass('alt');
    }
  });
});
