function validar(){
    let nome = form_register.nome.value;
    let email = form_register.email.value;
    let senha = form_register.senha.value;

    if (nome.value == " "){
        alert("Campo nome não está preenchido!");
        form_register.nome.focus();
        return false;
    }
    if(email == " " || email.indexOf('@') == -1 ){
        alert("Campo email não está preenchido!");
        form_register.email.focus();
        return false;
    }
    if(senha == " " || senha.length <= 5){
        alert("Preencha o campo senha com minimo 6 caracteres");
        form_register.senha.focus();
        return false;
    }
}