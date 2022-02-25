var form = document.getElementById('form');

form.addEventListener('submit', function(e){

    e.preventDefault();

    let datos = new FormData (form);


    fetch('../php/regalo.php',{
        method:'POST',
        body:datos
    })

    .then(res => res.json())
    .then(data => {

        let card = document.getElementById('card');

        if(data == 'ok'){

            let error = document.getElementById('error').style.display = 'none';
            const body = document.getElementById('body');

            body.innerHTML=`
            
                <div class="flex flex-wrap items-center text-center w-full" style="height:100%;">
                    <div class="w-full text-white">
                        <!-- ALERT -->
                        <div class="w-full sm:w-10/12 xl:w-7/12 mb-12 bg-opacity-25 mx-auto bg-green-900 shadow-lg p-2">
                            <b>AQUÍ ESTÁ SU OBSEQUIO Y GRACIAS POR PREFERIRLO,</b> <br>
                            <b>¡DISFRÚTELO</b>
                        </div>
                        <!-- DOWNALD -->
                        <div class="w-full" id="download">
                            <a download href="../files/TU PROYECTO DE VIDA - OGA, Orlando Giraldo Arango.pdf" class="rounded-sm border bg-green-500 text-white p-4 w-1/2"> Descargar </a>
                            <div class="pt-6">
                                <a href="https://creceresya.com" class="text-white flex justify-center"> 
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                                <b class="ml-2"> ir a la pagina principal </b>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>

            `
            

        } else {

            
            document.getElementById('error').style.display = 'block';

        }

    })

})