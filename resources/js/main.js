// SWIPER

var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });

    // EVENTO SCROLL NAV

let nav1 = document.querySelector('#nav1');
let containerNav = document.querySelector('#containerNav');


    window.addEventListener('scroll', ()=>{

      if(window.scrollY > 0){
  
          nav1.style.backgroundColor = '#1c2124';
  
        //   containerNav.style.backgroundColor = '#1c2124';
  
        //   nav1.style.height = '80px';
  
          // logoPink.classList.add('d-none');
  
          // logoSky.classList.remove('d-none');
  
      } else {
  
  
          nav1.style.backgroundColor = 'rgba(238, 238, 216, 0.937)';
        //   nav1.style.height = '55px';
          
        //   containerNav.style.backgroundColor = 'rgba(238, 238, 216, 0.937)';
      }
    });

    console.log("ciao");