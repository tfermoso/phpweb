$(".password").keyup((e) => {
    if (($("#password").val() == $("#repassword").val()) && $("#password").val().length>4) {
        $("#btnRegister").prop("disabled", false);
    }else{
        $("#btnRegister").prop("disabled", true);
    }
})

