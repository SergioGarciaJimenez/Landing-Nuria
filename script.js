let currentIndex = 0;
const testimonials = document.querySelectorAll('.testimonial-slide');
const totalTestimonials = testimonials.length;

function showTestimonial(index) {
  testimonials.forEach((testimonial, i) => {
    testimonial.classList.remove('active');
    if (i === index) {
      testimonial.classList.add('active');
    }
  });
}

document.querySelector('.arrow.left').addEventListener('click', () => {
  currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalTestimonials - 1;
  showTestimonial(currentIndex);
});

document.querySelector('.arrow.right').addEventListener('click', () => {
  currentIndex = (currentIndex < totalTestimonials - 1) ? currentIndex + 1 : 0;
  showTestimonial(currentIndex);
});

// Mostrar la primera tarjeta al cargar
showTestimonial(currentIndex);