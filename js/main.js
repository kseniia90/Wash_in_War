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
// document.querySelectorAll('.col1 .tablinks').forEach((el) => {
//     el.addEventListener('click', (event) => {
//         event.preventDefault();
//         event.target.closest('.tabs').querySelectorAll('.tab-content').forEach((el) => {
//             el.classList.remove('active');
//         });
//         document.querySelectorAll('.col1 .tablinks').forEach((el) => {
//             el.classList.remove('active');
//         });
//         event.target.classList.add('active');
//         const activeTabContent = document.getElementById(event.target.getAttribute('href').substring(1));
//         activeTabContent.classList.add('active');
//         fadeIn(activeTabContent);
//     });
// });

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
let swiperGallery = new Swiper('.slider-gallery', {
    effect: "coverflow",
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 0,
        stretch: -5,
        // depth: 100,
        modifier: 8,
        slideShadows: true,
    },
    navigation: {
        nextEl: ".slider-gallery .swiper-button-next",
        prevEl: ".slider-gallery .swiper-button-prev",
    },
    // on: {
    //     realIndexChange: function () {
    //         swiperGalleryL.slideTo(this.realIndex, swiperGalleryL.speed, false);
    //     }
    // }
});

let swiperGalleryL = new Swiper('.slider-gallery-l', {
    autoHeight: true,
    slidesPerView: "auto",
    keyboard: {
        enabled: true,
    },
    navigation: {
        nextEl: "#gallery-popup .swiper-button-next",
        prevEl: "#gallery-popup .swiper-button-prev",
    },
    // on: {
    //     activeIndexChange: function () {
    //         swiperGallery.slideToLoop(this.activeIndex, swiperGallery.speed, false);
    //     }
    // }
});

document.querySelectorAll('.slider-gallery .swiper-slide').forEach((el) => {
    el.addEventListener('click', (event) => {
        if (event.target.closest('.swiper-slide').classList.contains('swiper-slide-active')) {
            //show gallery l
            let popup = document.getElementById('gallery-popup');

            if (popup !== null) {
                document.body.style.overflow = "hidden";
                popup.classList.add("active");
            }

            swiperGalleryL.slideTo(swiperGallery.realIndex, 0);
        }
    })
});



// new Swiper(".slider-story", {
//     slidesPerView: 1,
//     spaceBetween: 15,
//     navigation: {
//         nextEl: ".slider-story .swiper-button-next",
//         prevEl: ".slider-story .swiper-button-prev",
//     },
// });


// const overlay = document.getElementById('overlay');
// const popup = document.getElementById('popup');
// document.querySelectorAll('#popup .close-btn, #overlay').forEach((el) => el.addEventListener('click', (event) => {
//     event.preventDefault();
//     fadeOut(overlay);
//     fadeOut(popup);
//     document.body.classList.remove('popup-open');
// }));

// WOW animation
new WOW({offset: 80}).init();

//  story popup
document.querySelectorAll('.open-story').forEach(function (openBtn) {
    openBtn.addEventListener('click', openPopup)
})

function openPopup(event) {
    let popupId = event.currentTarget.getAttribute("data-popup");
    let popup = document.getElementById(popupId);

    if (popup !== null) {
        document.body.style.overflow = "hidden";
        popup.classList.add("active");
    }
}

function closePopup(event) {
    document.querySelectorAll('.popup.active').forEach(function (popup) {
        document.body.style.overflow = null;
        popup.classList.remove("active");
    });

    document.querySelectorAll('.tooltip.active').forEach(function (tooltip) {
        tooltip.classList.remove("active");
    });
}

//  map popup
document.querySelectorAll('.tooltip[data-popup]').forEach(function (openBtn) {
    openBtn.addEventListener('click', openPopup);
    openBtn.addEventListener('click', (e) => {
        e.target.classList.add('active');
    })
})

document.querySelectorAll('.close_popup').forEach((el) => el.addEventListener('click', closePopup));

window.addEventListener("click", (e) => {
    // console.log(e.target)
    if (e.target.closest('.popup') && !e.target.closest('.popup-content')) {
        closePopup();
    }
});

document.onkeydown = (e) => {
    if (e.keyCode === 27) {
        closePopup();
    }
}
