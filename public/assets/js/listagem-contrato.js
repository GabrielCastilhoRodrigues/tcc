var btn = document.getElementById('view');
var cadastro = document.querySelector('.form-cadastro');
var listagem = document.querySelector('.listagem');

btn.addEventListener('click', function(){
    if (cadastro.style.display == 'block'){
        cadastro.style.display = 'none';
        listagem.style.display = 'block';
    }
    else{
        cadastro.style.display = 'block';
        listagem.style.display = 'none';
    }
});