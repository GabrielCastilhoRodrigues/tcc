/*FUNÇÕES DA TELA CADASTRO E ALTERAÇÃO DE USUÁRIO*/

function validaSenhaUsuario(){
    var senha = document.getElementById("senha"),
        confirmaSenha = document.getElementById("confirmaSenha");

    if (senha.value != confirmaSenha.value){
        confirmaSenha.setCustomValidity("Senhas diferentes!");
    }
    else{
        confirmaSenha.setCustomValidity("");
    }
}

document.getElementById("salvar").onclick() = validaSenhaUsuario();

/*FUNÇÕES DA TELA DE CONTROLE ADMIN*/
function funcao1()
{
    alert("Eu sou um alert!");
}