function validaDados() {
    var senha = document.querySelector("[name=password]").value;
    var regex = "^(?=(?:.*?[A-Z]){1})(?=(?:.*?[0-9]){1})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$";
    
    // alert(senha.length);

    if (senha.length < 8) {
        alert("A senha deve conter no m�nimo 8 d�gitos!");
        return false;
    } else if (!senha.match(regex)) {
        alert("A senha deve conter no m�nimo 1 caractere especial e 1 letra mai�scula! ");
        return false;
    }
}