 var swiper = new Swiper(".review-slider", {
     spaceBetween: 20,
     grabCursor: true,
     loop:true,
     autoplay: {
         delay: 200,
         disableOnInteraction: false,
     },
     breakpoints:{
         0:{
             slidesPerView:1,
         },
         600:{
             slidesPerView:2,
         },
     },
 });

 var swiper = new Swiper(".blogs-slider", {
     spaceBetween: 20,
     grabCursor: true,
     loop:true,
     autoplay: {
         delay: 3090,
         disableOnInteraction: false,
     },
     pagination: {
         el: ".swiper-pagination",
         clickable: true,
     },
     breakpoints:{
         0:{
             slidesPerView:1,
         },
         768:{
             slidesPerView:2,
         },
         991:{
             slidesPerView:3,
         },
     },
 });


 var swiper = new Swiper(".products-slider", {
     loop: true,
     grabCursor : true,
     spaceBetween: 20,
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
     autoplay: {
      delay: 2700,
      disableOnInteraction: false,
  },
     breakpoints: {
       0: {
         slidesPerView: 1,
       },
       550: {
         slidesPerView: 2,
       },
       850: {
         slidesPerView: 3,
       },
       1200: {
         slidesPerView: 4,
       },
     },
   });
  
   var swiper = new Swiper(".arrivals-slider", {
     loop: true,
     grabCursor : true,
     spaceBetween: 20,
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
     breakpoints: {
       0: {
         slidesPerView: 1,
       },
       550: {
         slidesPerView: 2,
       },
       850: {
         slidesPerView: 3,
       },
       1200: {
         slidesPerView: 4,
       },
     },
   });
  
   var swiper = new Swiper(".reviews-slider", {
     loop: true,
     grabCursor : true,
     spaceBetween: 20,
     breakpoints: {
       0: {
         slidesPerView: 1,
       },
       768: {
         slidesPerView: 2,
       },
       991: {
         slidesPerView: 3,
       },
     },
   });
  
   var swiper = new Swiper(".blogs-slider", {
     loop: true,
     grabCursor : true,
     spaceBetween: 20,
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
     breakpoints: {
       0: {
         slidesPerView: 1,
       },
       650: {
         slidesPerView: 2,
       },
       1200: {
         slidesPerView: 3,
       },
     },
   });

let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

// var swiper = new Swiper(".review-slider", {
//     spaceBetween: 20,
//     loop:true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     breakpoints: {
//         640: {
//           slidesPerView: 1,
//         },
//         768: {
//           slidesPerView: 2,
//         },
//         1024: {
//           slidesPerView: 3,
//         },
//     },
// });

// var swiper = new Swiper(".brand-slider", {
//     spaceBetween: 20,
//     loop:true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     breakpoints: {
//         450: {
//           slidesPerView: 2,
//         },
//         768: {
//           slidesPerView: 3,
//         },
//         991: {
//           slidesPerView: 4,
//         },
//         1200: {
//           slidesPerView: 5,
//         },
//       },
// });