if (window.innerWidth > 575.98) {
    let sr = ScrollReveal({
        duration: 1700,
        distance: "80px",
    });

    sr.reveal(".copywriting", {
        delay: 200
    });
    sr.reveal(".foto-profil", {
        origin: "top",
        delay: 100
    });
    sr.reveal(".hero-section", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".top-right-image", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".bottom-left-image", {
        origin: "bottom",
        delay: 200
    });

    sr.reveal(".about-text_2", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".testimonial-container_2", {
        origin: "bottom",
        delay: 200
    });
    sr.reveal(".header_3", {
        delay: 200
    });
    sr.reveal(".journey-info", {
        delay: 200
    });
    sr.reveal(".journey-grid", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".services-info", {
        delay: 200
    });
    sr.reveal(".services-content", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".skill-heading", {
        delay: 200
    });
    sr.reveal(".box-container", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".my-project-info", {
        delay: 200
    });
    sr.reveal(".btn-project", {
        delay: 200
    });
    sr.reveal(".my-project-content", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".contact-info", {
        delay: 200
    });
    sr.reveal(".contact-form", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".text-content-talk", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".btn-below", {
        delay: 200
    });
    sr.reveal(".foot-contact", {
        delay: 200
    });
    sr.reveal(".foot-about", {
        delay: 200
    });
    sr.reveal(".foot-social", {
        delay: 200
    });
    // PROJECT
    sr.reveal(".about-info", {
        delay: 200
    });
    sr.reveal(".about-img", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".fitur-info", {
        delay: 200
    });
    sr.reveal(".fitur-img", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".project-image", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".btn-step", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".section-project-description", {
        delay: 200
    });
    sr.reveal(".section-project-db", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".article-content", {
        origin: "top",
        delay: 200
    });
    sr.reveal(".patern-figure", {
        origin: "bottom",
        delay: 600
    });
    sr.reveal(".highlights", {
        origin: "bottom",
        delay: 600
    });
}

const menu_open = gsap.timeline({
    paused: "true",
    reversed: "true"
});

menu_open.to(".menu-container", {
    display: "flex",
});

menu_open.to("#menuBtnDiv", {
    duration: 0.2,
    y: 50,
});

menu_open.fromTo("#menuBtnDiv2", {
        duration: 0.2,
        y: -100,
    }, {
        y: -25,
    },
    "-=.15"
);
menu_open.from(".menu-container-1 .menu-container-header li span, .menu-container-1 .menu-container-footer li span", {
        stagger: {
            amount: .15,
        },
        y: 100,
        duration: 0.5,
    },
    "-=.1"
);

menu_open.from(".menu-container-1", {
        duration: 0.5,
        y: "100%",
    },
    "-=.5"
)

menu_open.from(".menu-container-2", {
    duration: .5,
    y: "-100%",
}, "-=1");

menu_open.from(".menu-container-2 .menu-container-footer li span", {
    stagger: {
        amount: 0.15,
    },
    y: 100,
    duration: 0.5
}, "-=.5");

function menuOpen() {
    menu_open.reversed() ? menu_open.play() : menu_open.reverse();
}




/*==================== MENU SHOW Y HIDDEN ====================*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')


/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


/*==================== ACCORDION SKILLS ====================*/
const skillsContent = document.getElementsByClassName('skills__content'),
    skillsHeader = document.querySelectorAll('.skills__header')

function toggleSkills() {
    let itemClass = this.parentNode.className

    for (i = 0; i < skillsContent.length; i++) {
        skillsContent[i].className = 'skills__content skills__close'
    }

    if (itemClass === 'skills__content skills__close') {
        this.parentNode.className = 'skills__content skills__open'
    }
}

skillsHeader.forEach((el) => {
    el.addEventListener('click', toggleSkills)
})

/*==================== QUALIFICATION TABS ====================*/
const tabs = document.querySelectorAll('[data-target]'),
    tabContents = document.querySelectorAll('[data-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.target)

        tabContents.forEach(tabContents => {
            tabContents.classList.remove('qualification__active')
        })
        target.classList.add('qualification__active')

        tabs.forEach(tab => {
            tab.classList.remove('qualification__active')
        })
        tab.classList.add('qualification__active')
    })
})

/*==================== SERVICES MODAL ====================*/
const modalViews = document.querySelectorAll('.journey_modal'),
    modalBtns = document.querySelectorAll('.journey_button'),
    modalCloses = document.querySelectorAll('.journey_modal-close')

let modal = function (modalClick) {
    modalViews[modalClick].classList.add('active-modal')
}

modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener('click', () => {
        modal(i)
    })
})

modalCloses.forEach((modalCloses) => {
    modalCloses.addEventListener('click', () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove('active-modal')
        })
    })
})

/*==================== PORTFOLIO SWIPER  ====================*/
let swiper = new Swiper('.portofolio__container', {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
