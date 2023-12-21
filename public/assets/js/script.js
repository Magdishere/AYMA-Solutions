new Vue({
  el: '#carousel-home-resources',
  data: {
    slides: 3
  },
  components: {
    'carousel-3d': window['carousel-3d'].Carousel3d,
    'slide': window['carousel-3d'].Slide
  }
})
