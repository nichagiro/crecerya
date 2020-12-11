var formy = document.getElementById('contact-form');

formy.addEventListener('submit', function(e){

    e.preventDefault();
    let datos = new FormData(formy);

    fetch('php/form.php', {

        method:'POST',
        body:datos

    })

    .then(res => res.json())
    .then(data => {

        if(data == 'ok') { 

            formy.style.display = 'none';
            document.getElementById('form-ok').style.display = 'block';

        } else {

            alert ('a ocurrido un error, no se envia el correo');

        }

    })

})