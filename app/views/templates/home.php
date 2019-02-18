<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Distro 13 - Un canal IRC</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/home_styles.css">
</head>
<body>
    <header>    
        <?php include INC_DIR . 'nav.php'; ?>

        <div class="header_content">        
            <div class="content">            
                <h1>Distrito 13</h1>
                <p>Canal donde suele haber buen ambiente. Es un canal en donde mayoritariamente prima el humor. Además, hay personas de diferentes países.</p>
            </div>
        </div>
    </header>
    <main>
        <div class="whos_behind">
            <div class="content">            
                <h2>¿Que es D.13?</h2>
                <p>El canal ##D.13 en la red Freenode de IRC pretende ser un instrumento de comunicación. Por ello la mayoría de usuarios que hay en este canal ya se habían conocido con anterioridad.</p>
            </div>

            <div class="people">
                <h2>¿Quienes son los operadores?</h2>
                <p>Para controlar un canal la Dirección ofrece un alto personal con experiencia cuyo objetivo es controlar nuestra sala en todo momento.</p>

                <ul>
                  <li><strong>_-leo-_</strong>    - Fundador</li>
                    <li><strong>Jose11</strong>     - Co-Fundador</li>
                    <li><strong>Katy1</strong>      - Co-Fundadora</li>
                    <li><strong>Gamertod</strong>    - Operador/Desarrollador</li>
                    <li><strong>jessiel</strong>    - Operador</li>
                    <li><strong>Leandro3</strong>   - Operador</li>
                    <li><strong>Linel</strong>      - Operador</li>
                    <li><strong>Lisbelk</strong>    - Operadora</li>
                    <li><strong>Marinette-Cheng</strong> - Super Op</li>
                    <li><strong>YotaD</strong>      - Bot</li>
                    <li><strong>MrCrowley</strong>  - Bot</li>
                </ul>
            </div>
        </div>

        <div class="connect">
            <div class="content">
                <h2>¿Como puedo conectarme?</h2>
                <p>Para conectarse en nuestro canal solo debes darle al boton copiar y pegar en nuestro cliente irc, o atravez de nuestro <a href="?view=webchat">Webchat</a>!</p>

                <span class="connect_command">
                    <p class="code">/join ##D.13</p>
                    <p id="copy_btn" title="Copiar al clipboard" class="copy_icon"></p>
                </span>
            </div>
        </div>
    </main>

    <?php include INC_DIR . 'footer.php' ?>
    <script>
        let btn = document.getElementById('copy_btn');

        btn.addEventListener('click', e => {
            // Code to make a copy to clipboard
            let textarea = document.createElement('textarea');
            textarea.setAttribute('readonly', '');
            textarea.style.position = 'absolute';
            textarea.style.left = '-9999px';
            textarea.value = '/join ##D.13';
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        });
    </script>
    </body>
</html>
