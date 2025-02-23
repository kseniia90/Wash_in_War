const mobileBreakpoint = 768;

const langDropdown = document.querySelector('.lang-dropdown');
document.querySelector('.lang-switcher .current').addEventListener('click', () => {
  if (langDropdown.classList.contains('show')) {
    langDropdown.classList.remove('show');
    fadeOut(langDropdown, 'flex');
  } else {
    langDropdown.classList.add('show');
    fadeIn(langDropdown, 'flex');
  }
});
window.addEventListener('click', (event) => {
  if (!document.querySelector('.lang-switcher').contains(event.target) && langDropdown.classList.contains('show')) {
    langDropdown.classList.remove('show');
    fadeOut(langDropdown, 'flex');
  }
});

document.querySelector('.mobile-menu-toggle').addEventListener('click', () => {
  const mainMenu = document.querySelector('.main-menu');
  const mainHeader = document.querySelector('.main-header');
  if (document.body.classList.contains('menu-open')) {
    document.body.classList.remove('menu-open');
    document.querySelectorAll('.main-menu .active').forEach((el) => {
      el.classList.remove('active');
    });
  } else {
    document.body.classList.add('menu-open');
  }
});

function slideDown(el) {
  el.style.overflow = 'hidden';
  el.style.height = '0';
  el.style.display = 'block';
  el.style.transition = 'height 0.3s';
  el.style.height = el.scrollHeight + 'px';
  setTimeout(() => {
    el.style.overflow = null;
    el.style.height = null;
    el.style.transition = null;
    el.style.display = null;
  }, 300);
}

function slideUp(el) {
  el.style.overflow = 'hidden';
  el.style.display = 'block';
  el.style.height = el.scrollHeight + 'px';
  el.style.transition = 'height 0.3s';
  setTimeout(() => {
    el.style.height = '0';
  }, 10);
  setTimeout(() => {
    el.style.overflow = null;
    el.style.display = null;
    el.style.height = null;
    el.style.transition = null;
  }, 300);
}

function fadeIn(el, display = 'block') {
  el.style.opacity = 0;
  el.style.display = display;
  el.style.transition = 'opacity 0.3s';
  setTimeout(() => {
    el.style.opacity = 1;
  }, 10);
  setTimeout(() => {
    el.style.transition = null;
    el.style.display = null;
    el.style.opacity = null;
  }, 300);
}

function fadeOut(el, display = 'block') {
  el.style.display = display;
  el.style.opacity = 1;
  el.style.transition = 'opacity 0.3s';
  setTimeout(() => {
    el.style.opacity = 0;
  }, 10);
  setTimeout(() => {
    el.style.display = null;
    el.style.opacity = null;
    el.style.transition = null;
  }, 300);
}

// tab on home-page START
document.querySelectorAll('.col1 .tablinks').forEach((el) => {
  el.addEventListener('click', (event) => {
    event.preventDefault();
    event.target.closest('.tabs').querySelectorAll('.tab-content').forEach((el) => {
      el.classList.remove('active');
    });
    document.querySelectorAll('.col1 .tablinks').forEach((el) => {
      el.classList.remove('active');
    });
    event.target.classList.add('active');
    const activeTabContent = document.getElementById(event.target.getAttribute('href').substring(1));
    activeTabContent.classList.add('active');
    fadeIn(activeTabContent);
  });
});

// tab2 on home-page START
document.querySelectorAll('.col2 .tablinks').forEach((el) => {
  el.addEventListener('click', (event) => {
    event.preventDefault();
    event.target.closest('.tabs').querySelectorAll('.tab-content').forEach((el) => {
      el.classList.remove('active');
    });
    document.querySelectorAll('.col2 .tablinks').forEach((el) => {
      el.classList.remove('active');
    });
    event.target.classList.add('active');
    const activeTabContent = document.getElementById(event.target.getAttribute('href').substring(1));
    activeTabContent.classList.add('active');
    fadeIn(activeTabContent);
  });
});
// tab on home-page END

// sliders 
new Swiper('.slider-gallery', {
  effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

new Swiper(".slider-story", {
  freeMode: true,
  loop: true,
  slidesPerView: "auto",
  centeredSlides: true,
  spaceBetween: 15,
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
});


const overlay = document.getElementById('overlay');
const popup = document.getElementById('popup');
document.querySelectorAll('.contact-us').forEach((el) => {
  el.addEventListener('click', (event) => {
    event.preventDefault();
    fadeIn(overlay);
    fadeIn(popup);
    document.body.classList.add('popup-open');

  });
});

document.querySelectorAll('#popup .close-btn, #overlay').forEach((el) => el.addEventListener('click', (event) => {
  event.preventDefault();
  fadeOut(overlay);
  fadeOut(popup);
  document.body.classList.remove('popup-open');
}));

// WOW animation
new WOW().init();

//  story popup
document.querySelectorAll('.open-story').forEach(function(openBtn) {
  openBtn.addEventListener('click', openStoryPopup)
})

function openStoryPopup(event){
  
  let popupId = event.currentTarget.getAttribute("data-popup");   
  let popup = document.getElementById(popupId);

  if (popup !== null) {
    
    document.body.style.overflow = "hidden";
    popup.classList.add("active");

    window.addEventListener("click", function (e) {
    
      if (e.target.closest(".close_popup")) {
        e.preventDefault();
        popup.classList.remove("active");
        document.body.style.overflow = "auto";
      } 
    });
  }
}

//  map popup
document.querySelectorAll('.open-map-popup').forEach(function(openBtn) {
  openBtn.addEventListener('click', openStoryPopup)
})
