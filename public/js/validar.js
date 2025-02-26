// validar.js
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    loginForm.addEventListener('submit', function(event) {
        let valid = true;
        let errorMessage = "";

        // Validación del correo electrónico
        const email = emailInput.value.trim();
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!email || !emailRegex.test(email)) {
            valid = false;
            errorMessage += "Por favor, ingresa un correo electrónico válido.\n";
        }

        // Validación de la contraseña
        const password = passwordInput.value.trim();
        if (!password || password.length < 6) {
            valid = false;
            errorMessage += "La contraseña debe tener al menos 6 caracteres.\n";
        }

        if (!valid) {
            event.preventDefault(); // Detiene el envío del formulario
            alert(errorMessage); // Muestra el mensaje de error
        }
    });
});
