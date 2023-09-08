const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".manav");
const links = document.querySelectorAll(".manav li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});