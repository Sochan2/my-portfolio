//scroll and show up the image if picture shows us
window.addEventListener('scroll',()=>{
  let image = document.querySelector('.fade-in-image');
  const rect = image.getBoundingClientRect();

  if(rect.top<window.innerHeight && rect.bottom>=0){
    image.classList.add('fade-in');
  }
});

//hamberger-menu
const hamberger = document.querySelector(".hamberger");
const navMenu = document.querySelector(".nav-menu");

function activeHumberger(){
hamberger.classList.toggle("active");
navMenu.classList.toggle("active");

}

hamberger.addEventListener("click", activeHumberger);

function deleteNav(){
hamberger.classList.remove("active");
navMenu.classList.remove("active");

}

document.querySelectorAll(".nav-link").forEach(n=>n.addEventLister("click",deleteNav));
