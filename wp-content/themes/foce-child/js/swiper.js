//console.log('bonjour')
let swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 20,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  loop:true,
  loop_slide: 0,
  on: {
    init: function () {
    
      const swiperImages = document.querySelectorAll(".swiper-slide img");

      // style CSS à chaque image
      swiperImages.forEach((img) => {
        img.style.display = "block";
        img.style.maxWidth = "250px";
      });
    },
  },
});
