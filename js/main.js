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

// document.querySelectorAll('.main-menu .menu-item-has-children > a').forEach((el) => {
//   el.addEventListener('click', (event) => {
//     event.preventDefault();

//     if (window.innerWidth >= mobileBreakpoint) {
//       if (event.target.matches('.main-menu-wrapper>ul>li>a')) {
//         document.querySelectorAll('.main-menu .active').forEach((el) => {
//           if (!event.target.isSameNode(el.querySelector(':scope>a'))) {
//             el.classList.remove('active');
//             el.querySelectorAll('.main-menu-wrapper>ul>li.active>.sub-menu').forEach((el) => {
//               fadeOut(el, 'flex');
//             });
//           }
//         });
//       } else {
//         event.target.closest('.sub-menu').querySelectorAll('.active').forEach((el) => {
//           if (!event.target.isSameNode(el.querySelector(':scope>a'))) {
//             el.classList.remove('active');
//           }
//         });
//       }

//       if (el.parentElement.classList.contains('active')) {
//         fadeOut(el.nextElementSibling, 'flex');
//       } else {
//         fadeIn(el.nextElementSibling, 'flex');
//       }
//     } else {
//       const subMenu = el.nextElementSibling;
//       if (el.parentElement.classList.contains('active')) {
//         slideUp(subMenu);
//       } else {
//         slideDown(subMenu);
//       }
//     }

//     el.parentElement.classList.toggle('active');
//   });
// });

// window.addEventListener('click', (event) => {
//   if (window.innerWidth >= mobileBreakpoint) {
//     if (!document.querySelector('.main-menu').contains(event.target)) {
//       document.querySelectorAll('.main-menu .active').forEach((el) => {
//         el.querySelectorAll('.main-menu-wrapper>ul>li.active>.sub-menu').forEach((el) => {
//           fadeOut(el, 'flex');
//         });
//         el.classList.remove('active');
//       });
//     }
//   }
// });

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
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      // pagination: {
      //   el: ".swiper-pagination",
      // },
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

//show more

document.querySelectorAll('.show-more').forEach((el) => {
  el.addEventListener('click', (event) => {
    event.preventDefault();
    event.target.closest('.col').classList.toggle('desc-show');
  });
});

// WOW animation

new WOW().init();
