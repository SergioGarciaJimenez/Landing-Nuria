let currentIndex = 0;
const testimonials = document.querySelectorAll('.testimonial-slide');
const totalTestimonials = testimonials.length;

document.getElementById("emailForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const responseMessage = document.getElementById("responseMessage");

    fetch("send_mail.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        responseMessage.textContent = data; 
        responseMessage.style.color = "#d86982"; 
        responseMessage.style.fontSize = "1.25rem";
        responseMessage.style.paddingTop = "0.3rem";
    })
    .catch(error => {
        responseMessage.textContent = "Error al enviar el correo. Inténtalo más tarde.";
        responseMessage.style.color = "red";
        responseMessage.style.fontSize = "1.25rem";
        responseMessage.style.paddingTop = "0.3rem";
    });
});

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

showTestimonial(currentIndex);