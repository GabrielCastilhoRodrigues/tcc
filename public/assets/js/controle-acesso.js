var btCad = document.querySelector('.bt-cad');
var btLog = document.querySelector('.bt-log');
var body = document.querySelector('body');
var cadastros = document.querySelector('.cadastros');
var logins = document.querySelector('.logins');

btCad.addEventListener('click', function(){
    if (cadastros.style.display == 'block'){
        cadastros.style.display = 'none';
    }
    else{
        cadastros.style.display = 'block'

        if (logins.style.display == 'block'){
            logins.style.display = 'none';
        }
    }
});

btLog.addEventListener('click', function(){
    if (logins.style.display == 'block'){
        logins.style.display = 'none';
    }
    else{
        logins.style.display = 'block';

        if (cadastros.style.display == 'block'){
            cadastros.style.display = 'none';
        }
    }
});