document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper('.main-swiper', {
    direction: 'horizontal',
    loop: true,
    speed: 800,
    slidesPerView: 'auto',
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
});

document.addEventListener("DOMContentLoaded", function () {

  document.querySelectorAll('.swiper').forEach(function (slider) {

    new Swiper(slider, {
      direction: 'horizontal',
      loop: true,
      speed: 500,

      slidesPerView: 5,
      spaceBetween: 10,
      autoplay: {
        delay: 2500,              // 2.5 sec পর পর slide হবে
        disableOnInteraction: false, // arrow / swipe করলেও autoplay চলবে
        pauseOnMouseEnter: true,  // hover করলে pause হবে
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 10,
          centeredSlides: true,
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        600: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 10,
        },
      },

      pagination: {
        el: slider.querySelector('.swiper-pagination'),
        clickable: true,
      },

      navigation: {
        nextEl: slider.querySelector('.swiper-button-next'),
        prevEl: slider.querySelector('.swiper-button-prev'),
      },

      scrollbar: {
        el: slider.querySelector('.swiper-scrollbar'),
      },
    });

  });

});

document.addEventListener("DOMContentLoaded", function () {

  document.querySelectorAll('.customer-slider').forEach(function (el) {

    new Swiper(el, {
      direction: 'horizontal',
      loop: true,
      speed: 500,

      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },

      slidesPerView: 4,
      spaceBetween: 10,

      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        }
      }
    });

  });

});





  const variants = document.querySelectorAll('.variant-img');
  const mainImage = document.getElementById('mainImage');
  let currentIndex = 0;

  // Click on variant
  variants.forEach((img, index) => {
    img.addEventListener('click', () => {
      mainImage.src = img.dataset.image;
      currentIndex = index;
      variants.forEach(v => v.classList.remove('active'));
      img.classList.add('active');
    });
  });



  // Zoom effect with cursor tracking
  const zoomContainer = document.querySelector('.zoom-container');
  zoomContainer.addEventListener('mousemove', (e) => {
    const rect = zoomContainer.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100;
    const y = ((e.clientY - rect.top) / rect.height) * 100;
    mainImage.style.transformOrigin = `${x}% ${y}%`;
    mainImage.style.transform = 'scale(1.8)';
  });

  zoomContainer.addEventListener('mouseleave', () => {
    mainImage.style.transform = 'scale(1)';
    mainImage.style.transformOrigin = 'center center';
  });





window.addEventListener("scroll", function () {
  const header = document.getElementById("top_fixe");

  if (window.scrollY > 50) {
    header.classList.add("fixed");
  } else {
    header.classList.remove("fixed");
  }
});
