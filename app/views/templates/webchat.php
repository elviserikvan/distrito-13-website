<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Distro 13 - WebChat</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/webchat_styles.css">
</head>
    <body>
        
        <header>
            <!-- Include nav structure -->
            <?php include INC_DIR . 'nav.php' ?>
        </header>

        <main>
            <iframe src="https://kiwiirc.com/client/irc.freenode.net/##D.13" style="border:0; width:100%; height:100%;"></iframe>
        </main>

        <!-- btn modal -->
        <?php include INC_DIR . 'footer.php' ?>


        <div id="btn_modal" class="btn_modal">
            <p>¿No sabes que hacer?</p>
        </div>

        <div id="modal_wrap" class="modal_wrap hide_modal">
            <span id="wrap_close_btn" class="close_icon"></span>

            <div class="instructions-wrap">
                <h2>Como conectarse</h2>

                <p>El cliente de IRC en la web, KiwiIRC, nos permite ofrecer a usuarios y usuarias de IRC la posibilidad de entrar a nuestra sala desde este apartado de la web. Para ello, sigue las instrucciones que te damos a continuación:</p>

                <div class="instructions">
                    <p>1- Introduce tu apodo en el apartado "Nick". Con esto no debes introducir tu nombre real, sino el nick que vas a querer usar para tu estancia en nuestra sala.</p>
                    
                    <p>2- Si tu nick está; registrado en NickServ, pulsa en el check que aparece en "Tengo una contraseña" e introdúcela.</p>
                    
                    <p>3- Pulsa en el botón "Conectando...". ¡Listo. El cliente te ingresará en nuestro canal de Freenode!</p>
                    
                    <p>4- Si quieres entar a otros canales distintos, escribe "/join #nombrecanal" (sin las comillas), en donde #nombrecanal irá el nombre del canal a donde quieres entrar. ¡Ojo! El canal al que quieres entrar puede tener dos numerales (##).</p>
                    
                    <p>5- Para abandonar cualquier canal, haz click en el icono con una flecha a la derecha, encima de la lista de usuarios, situado en el medio de otros dos iconos (icono de info a la izqueirda y >> a la derecha).</p>
                </div>
            </div>
        </div>
       <script>
           // Modal wrap logic
           let wrap_close_btn = document.getElementById('wrap_close_btn');
           let modal_wrap = document.getElementById('modal_wrap');
           let btn_modal = document.getElementById('btn_modal');


           // Hide the modal
           wrap_close_btn.addEventListener('click', e => {
                // Hide the modal
                modal_wrap.classList.remove('show_modal');
                modal_wrap.classList.add('hide_modal');
           });

           // Show the modal
           btn_modal.addEventListener('click', e => {
                modal_wrap.classList.remove('hide_modal');
                modal_wrap.classList.add('show_modal');
           });
       </script> 
    </body>
</html>