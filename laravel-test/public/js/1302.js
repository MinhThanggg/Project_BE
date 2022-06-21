const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  effect: 'creative',
  creativeEffect: {
    prev: {
      // will set `translateZ(-400px)` on previous slides
      // translate: [0, 0, -400],
      opacity: 0.1,
    },
    next: {
      // will set `translateX(100%)` on next slides
      // translate: ['100%', 0, 0],
      opacity: 0.1,
    },
  },
});