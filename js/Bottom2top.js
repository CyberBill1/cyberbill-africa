window.addEventListener('scroll', function() {
  var scrollTop = document.getElementById('scrollTop');
  if (window.pageYOffset > 100) { // Adjust this value to control when the button appears
    scrollTop.style.display = 'block';
  } else {
    scrollTop.style.display = 'none';
  }
});

document.getElementById('scrollTop').addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
