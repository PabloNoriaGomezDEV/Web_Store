document.getElementById("registroForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let nombre = document.getElementById("nombre").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    if (nombre === "" || email === "" || password === "") {
        alert("Todos los campos son obligatorios");
        return;
    }

    if (password.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres");
        return;
    }

    fetch("php/register.blade.php", {
        method: "POST",
        body: new FormData(document.getElementById("registroForm"))
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById("registroForm").reset();
    })
    .catch(error => console.error("Error:", error));
});
