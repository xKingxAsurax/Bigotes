document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("login-form");

    loginForm.addEventListener("submit", function(e) {
        e.preventDefault(); // Prevenir el envío del formulario por defecto

        const email = document.getElementById("email").value;
        const password = document.getElementById("password1").value;

        // Aquí podrías realizar una verificación en el frontend si lo deseas
        // Por ejemplo, validación de email (si se necesita)
        if (email === "" || password === "") {
            alert("Por favor, complete todos los campos.");
            return;
        }

        // Enviar el formulario al servidor (Laravel Jetstream se encargará de la autenticación)
        fetch('/login', {
            method: 'POST',
            body: new URLSearchParams(new FormData(loginForm)),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            }
        })
        .then(response => {
            if (response.ok) {
                // Redirigir al dashboard o página principal si el login es exitoso
                window.location.href = "/dashboard"; // O donde necesites redirigir
            } else {
                // Mostrar error si las credenciales son incorrectas
                alert("Credenciales incorrectas. Intenta nuevamente.");
            }
        })
        .catch(error => {
            console.error("Error al realizar el login:", error);
            alert("Hubo un problema al procesar tu solicitud.");
        });
    });
});
