// validarRegistro.js
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.querySelector('form');
    const nombreInput = document.querySelector('input[name="nombre"]');
    const emailInput = document.querySelector('input[name="email"]');
    const passwordInput = document.querySelector('input[name="password"]');
    const passwordConfirmInput = document.querySelector('input[name="password_confirmation"]');

    registerForm.addEventListener('submit', function(event) {
        let valid = true;
        let errorMessage = "";

        // Validación del nombre (no puede estar vacío)
        const nombre = nombreInput.value.trim();
        if (!nombre) {
            valid = false;
            errorMessage += "El nombre es obligatorio.\n";
        }

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

        // Validación de la confirmación de la contraseña
        const passwordConfirm = passwordConfirmInput.value.trim();
        if (password !== passwordConfirm) {
            valid = false;
            errorMessage += "Las contraseñas no coinciden.\n";
        }

        if (!valid) {
            event.preventDefault(); // Detiene el envío del formulario
            alert(errorMessage); // Muestra el mensaje de error
        }
    });
});
