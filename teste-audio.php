 <?php include("header.php"); ?>


    <audio src="drop-it-124014.mp3" controls autoplay class="player" ></audio>
    <button type="button" class="pause">Pause</button>

<script>
    var pause = document.querySelector(".pause");

    pause.addEventListener("click", function(){
        console.log('pausado')
        let audio = document.querySelector('.a')
        audio.pause();
    });


    
</script>

 <?php include("footer.php"); ?>