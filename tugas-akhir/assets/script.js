// hide/unhode transparanment navbar
window.addEventListener('scroll', function() {
  var navbar = document.getElementById('navbar');
  var windowPosition = window.scrollY > 0;

  navbar.classList.toggle('scrolling-active', windowPosition);
});
