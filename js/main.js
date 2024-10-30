//scroll and show up the image if picture shows us
window.addEventListener('scroll',()=>{
  let image = document.querySelector('.fade-in-image');
  const rect = image.getBoundingClientRect();

  if(rect.top<window.innerHeight && rect.bottom>=0){
    image.classList.add('fade-in');
  }
});