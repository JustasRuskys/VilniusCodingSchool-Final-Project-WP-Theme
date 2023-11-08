/*========== SHOW MENU ==========*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*========== REMOVE MENU MOBILE =========*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction));


/*========== ADD BLUR TO HEADER ==========*/
const blurHeader = () =>{
    const header = document.getElementById('header')
    this.scrollY >= 50 ? header.classList.add('blur-header')
                        : header.classList.remove('blur-header')
}
window.addEventListener('scroll', blurHeader);


/*========== HOME CARDS ==========*/
const gallery = document.querySelectorAll(".home__cards .home__card"),
previewBox = document.querySelector(".popup-img"),
previewImg = previewBox.querySelector(".popup-img #home__popup-img");

window.onload = ()=>{
    for (let i = 0; i < gallery.length; i++) {
        gallery[i].onclick = ()=>{
            function preview(){
                let selectedImgUrl = gallery[i].querySelector(".home__card-img").src;
                previewImg.src = selectedImgUrl;
            }
            preview()
            previewBox.style.display = 'block';
        }
    }
}

document.querySelector('.popup-img i').onclick = () =>{
    document.querySelector('.popup-img').style.display = 'none';
};

/*========== SHOW SCROLL UP ==========*/
const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up')
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
    : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp);

/*========== SCROLL SECTIONS LIVE LINK ==========*/
const sections = document.querySelectorAll('section[id]')

const scrollActive = () =>{
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop - 58,
        sectionId = current.getAttribute('id'),
        sectionClass = document.querySelector('.nav__menu a[href*=' + sectionId)

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            sectionClass.classList.add('active-link')
        }else{
            sectionClass.classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive);

/*========== OWL-CAROUSEL-SLIDE ==========*/
 $(".popular__container").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    responsive: {
        0:{
            items: 1,
            nav: false
        },
        700:{
            items: 2,
            nav: false
        },
        1000:{
            items: 3,
            nav: false
        }
    }
});

/*========== SCROLL REVEAL ANIMATION ==========*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 3000,
    delay: 400,
    //reset: true // Animations repeat
})

sr.reveal(`.home__data, .explore__data, .explore__user, .footer__container`);
sr.reveal(`.home__card`, {delay: 600, distance: '100px', interval: 100});
sr.reveal(`.about__data, .join__image`, {origin: 'right'});
sr.reveal(`.about__image, .join__data`, {origin: 'left'});
sr.reveal(`.Popular__button`, {origin: 'left'});