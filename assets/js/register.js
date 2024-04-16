$(".password").keyup((e) => {
    if (($("#password").val() == $("#repassword").val()) && $("#password").val().length>4) {
        $("#btnRegister").prop("disabled", false);
    }else{
        $("#btnRegister").prop("disabled", true);
    }
})

$("#email").change(()=>{
    let email=$("#email").val();
    fetch('procesar.php', {
        method: 'POST', // Método HTTP para la petición
        headers: {
            'Content-Type': 'application/json' // Tipo de contenido
        },
        body: JSON.stringify({ dato: 'Hola desde AJAX' }) // Datos a enviar al servidor
    })
    .then(response => {
        // Verificar si la respuesta es exitosa
        if (!response.ok) {
            throw new Error('Error en la petición');
        }
        // Devolver el cuerpo de la respuesta como JSON
        return response.json();
    })
    .then(data => {
        // Manejar la respuesta del servidor
        console.log(data);
    })
    .catch(error => {
        // Manejar errores
        console.error(error);
    });
})
