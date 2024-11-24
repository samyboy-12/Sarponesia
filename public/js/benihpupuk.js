let slideIndex = 1;  // Start from the first slide
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("flex_col");
  let dots = document.getElementsByClassName("dot");

  // Loop around if the index is out of bounds
  if (n > slides.length) { slideIndex = 1; }
  if (n < 1) { slideIndex = slides.length; }

  // Hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove('active');  // Remove 'active' class from all slides
  }

  // Remove "active" class from all dots
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Show the current slide and add "active" to the corresponding dot
  slides[slideIndex - 1].classList.add('active');  // Add 'active' class to the current slide
  dots[slideIndex - 1].className += " active";  // Add 'active' class to the current dot
}