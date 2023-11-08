const section = document.querySelector('.section');
const toggle = document.querySelector('.toggle');
const list = document.querySelectorAll('.img-list');

toggle.addEventListener('click', () => {
    section.classList.toggle('active');
});

toggle.addEventListener('mouseover', () => {
    list.forEach((item) =>
    item.classList.remove('active'));
    thumbBox.classList.remove('active-img1');
    thumbBox.classList.remove('active-img2');
    thumbBox.classList.remove('active-img3');
    thumbBox.classList.remove('active-img4');
})

function activeLink() {
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}

list.forEach((item) =>
item.addEventListener('click', activeLink));

const thumbBox = document.querySelector('.thumb-box');
const img1 = document.querySelector('.img1');
const img2 = document.querySelector('.img2');
const img3 = document.querySelector('.img3');
const img4 = document.querySelector('.img4');

img1.addEventListener('click', () => {
    if (thumbBox.classList.contains('.active-img1-front')) {
        img1.style.transition = 'none';
    }
    else {
        thumbBox.classList.add('active-img1');
        thumbBox.classList.remove('active-img2');
        thumbBox.classList.remove('active-img3');
        thumbBox.classList.remove('active-img4');
        thumbBox.classList.add('active-img1-front');
        thumbBox.classList.remove('active-img2-front');
        thumbBox.classList.remove('active-img3-front');
        thumbBox.classList.remove('active-img4-front');
        section.classList.remove('active');
    }
});

img2.addEventListener('click', () => {
    if (thumbBox.classList.contains('.active-img2-front')) {
        img2.style.transition = 'none';
    }
    else {
        thumbBox.classList.add('active-img2');
        thumbBox.classList.remove('active-img1');
        thumbBox.classList.remove('active-img3');
        thumbBox.classList.remove('active-img4');
        thumbBox.classList.add('active-img2-front');
        thumbBox.classList.remove('active-img1-front');
        thumbBox.classList.remove('active-img3-front');
        thumbBox.classList.remove('active-img4-front');
        section.classList.remove('active');
    }
});

img3.addEventListener('click', () => {
    if (thumbBox.classList.contains('.active-img3-front')) {
        img3.style.transition = 'none';
    }
    else {
        thumbBox.classList.add('active-img3');
        thumbBox.classList.remove('active-img1');
        thumbBox.classList.remove('active-img2');
        thumbBox.classList.remove('active-img4');
        thumbBox.classList.add('active-img3-front');
        thumbBox.classList.remove('active-img1-front');
        thumbBox.classList.remove('active-img2-front');
        thumbBox.classList.remove('active-img4-front');
        section.classList.remove('active');
    }
});

img4.addEventListener('click', () => {
    if (thumbBox.classList.contains('.active-img4-front')) {
        img4.style.transition = 'none';
    }
    else {
        thumbBox.classList.add('active-img4');
        thumbBox.classList.remove('active-img1');
        thumbBox.classList.remove('active-img2');
        thumbBox.classList.remove('active-img3');
        thumbBox.classList.add('active-img4-front');
        thumbBox.classList.remove('active-img1-front');
        thumbBox.classList.remove('active-img2-front');
        thumbBox.classList.remove('active-img3-front');
        section.classList.remove('active');
    }
});