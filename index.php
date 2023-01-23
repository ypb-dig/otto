<?php include("header.php"); ?>
 
 <style>
     body{overflow:hidden;}
 </style>
 
 <section class="video-content d-none d-sm-block">
    <video class="video-home" width="100%" height="100%" allow="autoplay" autoplay="autoplay" poster="https://homolog.ypb.com.br/tamb.png" muted loop><source src="https://homolog.ypb.com.br/v%c3%addeo-tela-inicial.mp4" type="video/mp4">Your browser does not support the video tag.</video>
    <!--<svg class="banner"><mask><rect fill="white" width="100%" height="100%"></rect></mask></svg>-->
 </section>
 
 <div id="carouselExampleFade" class="carousel slide carousel-fade d-block d-sm-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2500">
      <img src="media/images/slide6.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2500">
      <img src="media/images/slide2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2500">
      <img src="media/images/slide3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2500">
      <img src="media/images/slide4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2500">
      <img src="media/images/slide5.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">-->
  <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
  <!--  <span class="visually-hidden">Previous</span>-->
  <!--</button>-->
  <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">-->
  <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
  <!--  <span class="visually-hidden">Next</span>-->
  <!--</button>-->
</div>
 
 <style>
    @media (max-width:768px) {
        .video-content{
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .video-content video{
            width: 160%;
        }
    }
 </style>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script>
        var videoHome = document.querySelector('.video-home');
        videoHome.play();
 </script>
 

<?php include("footer.php"); ?>
