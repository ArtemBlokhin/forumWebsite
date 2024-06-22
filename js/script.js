const swiper = new Swiper(".swiper-container", {
  direction: "horizontal",
  loop: false,
  autoplay: {
    delay: 5000,
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1450: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".s-button-next",
    prevEl: ".s-button-prev",
  },

});
const swiper2 = new Swiper(".swiper2-container", {
  direction: "horizontal",
  loop: true,
  autoplay: {
    delay: 3000,
  },
  slidesPerView: 1,
  allowTouchMove: true,
  spaceBetween: 20,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
  }, 
});

// Функция для обновления состояния кнопок навигации
function updateNavButtons() {
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  if (swiper.isBeginning) {
    prevBtn.disabled = true; 
  } else {
    prevBtn.disabled = false; 
  }

  if (swiper.isEnd) {
    nextBtn.disabled = true; 
  } else {
    nextBtn.disabled = false; 
  }
}
// Добавляем обработчики событий для обновления кнопок при изменении состояния слайдера
swiper.on("init", updateNavButtons);
swiper.on("slideChange", updateNavButtons);
// Вызовите обновление кнопок при загрузке страницы
document.addEventListener("DOMContentLoaded", function () {
  updateNavButtons();
});
// Если слайдер уже инициализирован до того, как добавлены обработчики, вызовем updateNavButtons сразу
updateNavButtons();
/*----------Анимация появления блока с тематикой форума------------*/
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".block-content-item");
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("visible");
        }, index * 500); // 500ms delay for each item
      }
    });
  }, observerOptions);

  items.forEach((item) => observer.observe(item));
});
document.addEventListener('DOMContentLoaded', function() {
  const items = document.querySelectorAll('.block-content-item');
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const callback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // чтобы элементы не анимировались повторно
      }
    });
  };

  const observer = new IntersectionObserver(callback, options);

  items.forEach((item, index) => {
    observer.observe(item);
    item.style.transitionDelay = `${index * 0.3}s`; // задержка анимации для каждого элемента
  });
});
