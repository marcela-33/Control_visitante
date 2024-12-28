function loguear() {

    let user = document.getElementById("email").value
    let pass = document.getElementById("password").value

    if (user == "superaudio.com" && pass == "Sup3r4udio*") {

        window.location = "inicio.html";
    }

    else {
        swal.fire('Datos incorrectos', '', 'error');
    }
}
