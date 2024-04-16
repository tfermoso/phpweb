$(".password").keyup((e) => {
    if (($("#password").val() == $("#repassword").val()) && $("#password").val().length>4) {
        $("#btnRegister").prop("disabled", false);
    }else{
        $("#btnRegister").prop("disabled", true);
    }
})

$("#email").change(()=>{
    let email=$("#email").val();
    fetch('pruebajson.php?email='+email)
    .then(response => {       
        return response.json(); // Convertir la respuesta a JSON
    })
    .then(data => {
        // Manejar los datos JSON aquí
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
})
