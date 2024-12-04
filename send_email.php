<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {
        $to = $email;
        $subject = "🚀 ¡Estás a un paso de transformar tu 2025! ¡Felicidades por tomar la mejor decisión para asegurar un 2025 próspero! ";
        $message = "🎉 Te doy la bienvenida a mi programa de mentoría online de 3 meses. Este será un viaje transformador, y estoy emocionada de acompañarte en cada paso. 

📅 Detalles Importantes del Programa: 

• Inicio: Jueves, 9 de enero 
• Finalización: Jueves, 3 de abril 
• Duración: 3 meses de sesiones semanales llenas de aprendizaje profundo. 
• Sesiones: jueves de 20 a 22 h. 

🎁 ¡Acceso Exclusivo y Beneficios Adicionales! 
Como regalo especial: Tendrás acceso gratuito a mi curso online de 1 mes: “Del Universo a tu Mundo Interior en 30 días” 🌌. 

Este curso complementará lo aprendido en la mentoría, integrando conocimiento y ejercicios basados en las leyes universales. 

📲 ¿Cómo funcionará? 

• Enlace de acceso: Un día antes de cada sesión, recibirás un enlace para unirte a la clase. 

• Dos Grupos de WhatsApp: 
1. Recordatorios Diarios: Grupo privado, donde recibirás recordatorios felicitistas, refuerzos y ampliaciones del contenido de cada semana. 
2. Compartires Felicitistas: Chat abierto donde responderé todas tus dudas y podrás compartir avances con tus compañeros. 
¡El camino compartido es más rápido y dulce! 💬 
📘 ¡Empieza desde ya! Para que vayas calentando motores, te enviaré mi manual “Pon tu Felicidad en Forma” 📖

. ¿Qué necesitas hacer ahora? Envía la imagen de tu Bizum de 300€ al teléfono 657181854. 

También puedes hacer el pago por transferencia al número de cuenta 
ES91 0030 3325 0003 8695 7273

Este precio promocional estará disponible hasta el 19 de Diciembre de 2024, pasando a costar 380€ a partir del día 20 de Diciembre.

• ¿Por qué 300€ y no 297€? Porque no me van las manipulaciones marquesianas para vender algo que solo ha de convencerte a ti. Esta es una inversión que recuperarás multiplicada por 1000. 
🚀 ¿Estás listo/a para manifestar un año de crecimiento constante? 
¡Por solo 3,33€ al día, recibirás un acompañamiento diario que transformará tu vida! Nos vemos pronto en la mentoría. 
¡Prepárate para una experiencia transformadora! 

🌟 Deseando ser testigo de tu transformación Nuria Sánchez Alcolea Coach y Mentora del Ser Feliz 
P.D.: No subestimes lo que puedes lograr en 3 meses. ¡Nos espera un viaje increíble! 💪😊";

        $headers = "From: info@nuriasanchezcoach.com\r\n";
        $headers .= "Reply-To: nuriasa40@gmail.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo "Correo enviado correctamente. Revisa tu bandeja de entrada.";
        } else {
            echo "Error al enviar el correo. Por favor, inténtalo más tarde.";
        }
    } else {
        echo "Por favor, introduce un correo válido.";
    }
} else {
    echo "Método no permitido.";
}
?>
