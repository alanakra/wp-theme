let mouseCursor = document.querySelector('.cursor');
let navLinks = document.querySelectorAll('a');
let placeX = Math.ceil(window.innerWidth*0.5);
let placeY = Math.ceil(window.innerHeight*0.5);

window.addEventListener('load', originCursor);
window.addEventListener('mousemove', cursor);
image.addEventListener('mousemove', changeZIndex);

function originCursor(){
  mouseCursor.style.top = placeY + 'px';
  mouseCursor.style.left = placeX + 'px';
}

function cursor(e) {
 mouseCursor.style.top = e.pageY + 'px';
 mouseCursor.style.left = e.pageX + 'px';
}

navLinks.forEach(link => {
 link.addEventListener('mouseleave', () => {
   mouseCursor.classList.remove('link-grow');
   link.classList.remove('hovered-link');
  });
  
  link.addEventListener('mouseover', () => {
   mouseCursor.classList.add('link-grow');
   link.classList.add('hovered-link');
 });
});
