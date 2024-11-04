let currentSlide = 0;
const slides = document.querySelectorAll(".testimonial-slide");

function changeSlide(direction) {
  slides[currentSlide].classList.remove("active");
  currentSlide = (currentSlide + direction + slides.length) % slides.length;
  slides[currentSlide].classList.add("active");
}

// Inicializa mostrando la primera tarjeta
changeSlide(0);