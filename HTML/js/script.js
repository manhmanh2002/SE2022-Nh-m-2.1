let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let view1 = document.querySelector('.view1');

document.querySelector('#viewshow1').onclick = () =>{
    view1.classList.toggle('active');
    view2.classList.remove('active');
}
let view2 = document.querySelector('.view2');

document.querySelector('#viewshow2').onclick = () =>{
    view2.classList.toggle('active');
    view1.classList.remove('active');
}
// let view3 = document.querySelector('.view3');

// document.querySelector('#viewshow2').onclick = () =>{
//     view2.classList.remove('active');
//     view1.classList.remove('active');
// }


let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}


let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    view1.classList.remove('active');
    view2.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});
