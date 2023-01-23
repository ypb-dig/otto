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
body {margin: 0;padding: 0;color: #fff;}
/*-----------------------------------------menu-------------------------------*/
.header {width: 100vw;background-color:rgba(0, 85, 155, 1);max-width: 100%;}
.logo-otto {max-width:110px;}
/*-----------------------------------------footer-----------------------------*/
#linha-footer {background-color: #fff;height:10px;max-width: 100vw}
footer #redes-sociais {min-height: 70px;}
footer {max-height: 110px;}
.container-footer {width: fit-content;}
.gradiente-footer {background: rgb(0,85,155);background: linear-gradient(90deg, rgba(0,85,155,1) 0%, rgba(61,151,233,1) 100%);}
/*estilos*/
/*--------------------------------------cor de fundo--------------------------*/
.bg-azul {background-color: #00559b;}
.bg-branco {background-color: #fff;}
.container {width: 1200px;max-width: 100%;margin: 0 auto;}
li {padding: 0 10px;}
a {text-decoration: none; color:#fff;}
.icone-redeSocial {height: 1.5rem;margin-right: 12px;}
.mx-auto {margin: 0 auto;}
/*--------------------------------------cor do texto--------------------------*/
.text-azul {color: #2C5697;}
.text-link-amarelo {color: #FFF;}
.text-link-amarelo:hover {color: #FF9E1E;}
@media (max-width: 770px) {
    .header .bg-azul {background-color: #00559b;}
    .logo-otto {max-width: 70px;}
}
</style>

<body>
    <!------------------------------------------------------------- HEADER ----------------------------------------- -->
    <div class="header">
        <header class="bg-azul">
            <nav class="container navbar navbar-expand-lg navbar-light">
                <div class="mx-auto">
                    <a class="navbar-brand" href="<?php echo $url ?>"><img class="logo-otto"src="<?php echo $url ?>/media/images/logo-otto.png" alt="Logo Otto"></a>
                </div>
            </nav>        
        </header>
    </div>
