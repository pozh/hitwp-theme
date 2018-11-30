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
  const $hero = $('.hero-home');
  const $main = $('.elementor-inner', '.home');
  const $heroContent = $('#hero-content');
  const $heroGreeting = $('#js-greeting');
  const $heroIntro = $('#hero-intro');
  const heroHeight = $hero.height();

  $('body').addClass('loaded');
  $hero.css( 'height', window.innerHeight );
  $('.hero__bg').css( 'height', window.innerHeight );
  $main.css('paddingTop', window.innerHeight - 140);

  // Hero dimensions
  $(window).resize(() => {
    $main.css('paddingTop', window.innerHeight - 140);
  });

  // WHILE SCROLLING....
  let oldScrollPos = 0;
  let scrollDelta = 0;

  const scene = document.getElementById('scene');
  let parallaxInstance = null;
  if (null !== scene) {
    parallaxInstance = new Parallax( scene );
  }

  $(window).scroll(() => {

    let scrollPos = $(window).scrollTop();
    scrollDelta = scrollPos - oldScrollPos;
    oldScrollPos = scrollPos;

    // navigation bar
    console.log(scrollPos);
    if (200 < scrollPos) {
      $nav.addClass('nav_alt');
    } else {
      $nav.removeClass('nav_alt');
    }
    if (-30 > scrollDelta && scrollPos > heroHeight + 100) {
      $('#nav').addClass('nav_delta');
    } else if (3 < scrollDelta) {
      $('#nav').removeClass('nav_delta');
    }

    if (400 < scrollPos) {
      $footer.addClass('visible');
      return;
    } else {
      $footer.removeClass('visible');
    }

    // hero effects
    let offset = ( heroHeight - window.scrollY ) / heroHeight;
    $heroContent.css('transform', 'scale(' + ( 1 - ( 1 - offset ) / 3 ) + ')' + ' translate(' + ( offset - 1 ) * 20 + 'px, -' + ( 1 - offset ) * 100 + 'px)');
    $heroGreeting.css('filter', 'blur(' + ( ( 1 - offset ) * 10 ) + 'px)');
    $heroContent.css('opacity', offset * offset);
    $heroIntro.css('filter', 'blur(' + ( ( 1 - offset ) * 3 ) + 'px)');
    $heroIntro.css('transform', 'translate(0, -' + ( 1 - (offset) ) * 20 + 'px)');
  });

  // Navigation animation
  $('.js_nav_link').click((e) => {
    e.preventDefault();
    scrollTo($(e.target).attr('href'));
  });
});
