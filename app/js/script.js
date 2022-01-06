const hamburger = document.querySelector('.menu__hamburger');
const navLinks = document.querySelector('.menu__nav_links');
const links = document.querySelector('.menu__nav_links li');
const body = document.querySelector('body');

hamburger.addEventListener("click",()=>{ 
    navLinks.classList.toggle("open");
    body.classList.toggle('noscroll');
});

let timer = 0;
    window.addEventListener('load', (event) => {
      let intersectionObserver = new IntersectionObserver(entries =>{
          entries.forEach(entry =>{
            if(entry.isIntersecting){
              setTimeout(function() {entry.target.classList.add('up');},timer);
              timer +=50;
              intersectionObserver.unobserve(entry.target);
              setTimeout(function(){timer =0;}, 1000)
            }
          });
      });

    
      document.querySelectorAll('.animate').forEach(obj => {
        intersectionObserver.observe(obj);
      });
    });
