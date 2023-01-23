<?php $url = "https://ottodeathcare.co";?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0NK4WGENE8"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-0NK4WGENE8');
        </script>
        <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Otto</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link rel="preconnect" href="https://fonts.googleapis.com/"><link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet"><link rel="icon" href="<?php echo $url ?>/media/images/icone-otto.png">
    </head>
<style>
body {margin: 0;padding: 0;font-family: 'Lato', sans-serif;color: #fff;}
/*-----------------------------------pagina contato---------------------------*/
.box-contato {height: fit-content;width: fit-content; padding: 20px 30px;background-color: rgba(0,0,0,0.3);border-radius: 15px; margin: 300px auto 0}
#gilda {width: 20em;margin-top: -220px;}
/*------------------------------------vídeo home------------------------------*/
.video-container{width: 100vw;height: 100vh;}
svg{position:absolute;left:0;height:850px;width:100%;}
iframe {width: 100%;height: calc(100vw/1.77);}
/*-----------------------------------imagens header---------------------------*/
.bg-header, #contato.bg-header {min-height: 100vh;background-size: cover;background-position: center;}
#header-servicos {background-image: url('/media/images/servicos.jpg');}
#header-testamentoVistal {background-image: url('/media/images/testamento-vital.jpg');}
#header-prePago {background-image: url('/media/images/planos-prePago.jpg');}
#header-mediacaoConflitos {background-image: url('/media/images/mediacao-de-conflito.jpg');}
#header-sobreNos {background-image: url('/media/images/quem-somos.jpg');}
#header-afterOrganizer {background-image: url('/media/images/after-organizer.jpg');}
#header-apoioJuridico {background-image: url('/media/images/apoio-juridico.jpg');}
#header-apoioPsicologico {background-image: url('/media/images/apoio-psicologico-2.jpg')}
#header-concierge {background-image: url('/media/images/concierge.jpg')}
#contato {background-image: url('/media/images/contato.png');}
/*-----------------------------------------menu-------------------------------*/
.navbar-collapse {flex-grow: 0;}
.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {color: #fff;}
.header .bg-azul {width: 100vw;background-color:rgba(0, 85, 155, 0.5);max-width: 100%;}
header li{list-style: none;}
.header {position: absolute;z-index: 99999;max-width: 100%;}
.navbar-light .navbar-toggler {color: rgb(255 255 255 / 55%);border-color: rgb(255 255 255 / 62%);}

.logo-otto {max-width:110px;}
/*-----------------------------------------footer-----------------------------*/
#linha-footer {background-color: #fff;height:10px;max-width: 100vw}
footer #redes-sociais {min-height: 70px;}
footer {max-height: 110px;}
.container-footer {width: fit-content;}
.gradiente-footer {background: rgb(0,85,155);background: linear-gradient(90deg, rgba(0,85,155,1) 0%, rgba(61,151,233,1) 100%);}

/*estilos*/
/*--------------------------------------shadow--------------------------------*/
.box, footer #redes-sociais, .button {-webkit-box-shadow: 2px 2px 15px 2px rgba(0,0,0,0.36); box-shadow: 2px 2px 15px 2px rgba(0,0,0,0.36);}
/*---------------------------------------botoes-------------------------------*/
button {min-width: 70px;width: fit-content;height: fit-content;min-height: 42px;border: 0;border-radius: 2rem;margin-top: -15px;color: #fff;}
#servicos button {background-color: #6296e6;}
.button {background-color: #ff9e1b;}

/*-------------------------------------cards e boxes--------------------------*/

#servicos .card-text {color: #000;font-size: 20px;line-height: 22px;}
#servicos .card-title {font-size: 30px; line-height: 35px;}
#servicos .card , #concierge .card {height:250px;padding: 30px 20px;}
.card-title {font-weight: bold;}
.box {transition: 0.5s;background: rgb(0,85,155);background: linear-gradient(180deg, rgba(0,85,155,1) 0%, rgba(61,151,233,1) 100%);}
.box1{margin: -25px 0;}
.box2{margin: 25px 0;}
.box:hover {transform: translateY(-50px);}
.card {position: relative;min-width: 25%;border-radius: 15px;border: 0;transition: 0.5s;padding: 80px 12px;}
#sobre-nos .card {height: 410px;}

/*--------------------------------------cor de fundo--------------------------*/
.bg-azul {background-color: #00559b;}
.bg-branco {background-color: #fff;}
.bg-bege {background-color: #F4EBE2;}

.container {width: 1200px;max-width: 100%;margin: 0 auto;}

li {padding: 0 10px;}

a {text-decoration: none;color:#fff;}

.icone-redeSocial {height: 1.5rem;margin-right: 12px;}

.my-auto {margin: auto 0;}

#controle {background-color: #000;}

/*--------------------------------------cor do texto--------------------------*/
.text-azul, #after-organizer li {color: #2C5697;}
.text-amarelo {color: #FF9E1E;}
.text-bege {color: #F4EBE2;}
.text-link-amarelo {color: #FFF;}
.text-link-amarelo:hover {color: #FF9E1E;}

@media (max-width: 770px) {
    .header {
        position: static;
    }
    
    .header .bg-azul {
        background-color: #00559b;
    }
    .bg-header {
        min-height: 30vh;
    }

    .logo-otto {
        max-width: 70px;
    }
    #sobre-nos .card, #concierge .card {height: fit-content;}
    .box1, .box2{margin: 25px 0;}
}

</style>

<body>
    <!------------------------------------------------------------- HEADER ----------------------------------------- -->
    <div class="header">
        <header class="bg-azul">
            <nav class="container navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo $url ?>"><img class="logo-otto"src="<?php echo $url ?>/media/images/logo-otto.png" alt="Logo Otto"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white">&#9776;</span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="<?php echo $url ?>/sobre-nos.php">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="<?php echo $url ?>/servicos.php">Nossos Serviços</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="<?php echo $url ?>/contato.php">Contato</a>
                            </li>
                            <li>    
                                <audio src="<?php echo $url ?>/media/syd_matters_to_all_of_you.mp3" id="audio" autoplay>
                                    Your browser does not support the audio tag.
                                </audio>
                                    <button class="botao-audio button rounded-pill my-auto">Play</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>        
        </header>
    </div>
    
 <script>
    var audioPlayer = document.querySelector('#audio'),
        buttonAudioPlayer = document.querySelector('.botao-audio'),
        foiPausado = sessionStorage.musica;
        
        
        if(sessionStorage.musica == 'true'){
            audioPlayer.pause()
            buttonAudioPlayer.innerHTML = 'Play';
            sessionStorage.musica = audioPlayer.paused;
        }
    
    buttonAudioPlayer.addEventListener('click', function () {
        if(audioPlayer.paused){
            audioPlayer.play();
            buttonAudioPlayer.innerHTML = 'Pause'
            sessionStorage.musica = audioPlayer.paused;
            return;
        }
        audioPlayer.pause();
        buttonAudioPlayer.innerHTML = 'Play';
        sessionStorage.musica = audioPlayer.paused;
    });
    
    
    
 </script>