<?php

$name="home";

$class="style.css";

require "header.php" ;

require "article.php";

require "but_favorie.php";

require "liste-article-favorie.php";

$c_turn_1=0;
$c_turn_2=1;
$c_turn_3=2;
$c_turn_4=3;
?>



<style>
    <?php foreach($articles as $key => $article): 
                echo(favorie_buttun((".label-".($key+1)),("#input-".($key+1)),("svg-".($key+1))));
    endforeach ?>


</style>


<div id="particles-js">
    <div class="bio">
        <h6 style="color:#8E9DAE">Bonjour, je m'appelle</h6>
        <h1 class="name"><span style="color:#3c71cc42;">Jawad Nawabi.</span><br><span style="color:#3c71cc42;">Algorithme de recomendation.</span></h1>
        <a href="#main" style="text-decoration: none;color:#FFF"><button class="continue">Continuer</button></a>

    </div>

</div> 
<div class="div-en-diagonale"></div>


<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 

<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

<script>
    particlesJS("particles-js", {"particles":{"number":{"value":70,"density":{"enable":false,"value_area":700}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":5,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":true,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":150,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
<style>


#particles-js{
    margin-top: -60px;
    position:relative; 
    width: 100%; 
    height: 100%; 
    background-repeat: no-repeat; 
    background-size: cover; 
    background-position: 50% 50%; 
    display: flex;
    font-family: calibre_semi_bold;
    font-size: 40px;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    
} 
.div-en-diagonale {
  position: absolute;
  top: 0px;
  z-index: -1;
  width: 100%;
  height: 111%;
  transform: skewY(-3deg);
  transform-origin: bottom left;
  background: radial-gradient(ellipse at bottom, #000000 0%, #395c8b 100%);
}


.particles-js-canvas-el{
    position: absolute;
}
</style>




<div class="main_1">

<form action="/favorie.php" method="get"> 

<div class="main" id="main">

       
        <div class="column">
        <?php foreach($articles as $key=>$article ): ?>
            <?php if($c_turn_1==$key):?>
                <?php echo(article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".($key+1)),("input-".($key+1)),("label-".($key+1)),("svg-".($key+1)),("open-full-".($key+1)))) ?>
                <?php $c_turn_1+=4 ?>
            <?php endif ?>
        <?php endforeach;?>
        </div>   
        
        
        <div class="column">
        <?php foreach($articles as $key=>$article ): ?>
            <?php if($c_turn_2==$key):?>
                <?php echo(article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".($key+1)),("input-".($key+1)),("label-".($key+1)),("svg-".($key+1)),("open-full-".($key+1)))) ?>
                <?php $c_turn_2+=4 ?>
                <?php endif ?>
        <?php endforeach;?>
        </div>    
        
        
        <div class="column">
        <?php foreach($articles as $key=>$article ): ?>
            <?php if($c_turn_3==$key):?>
                <?php echo(article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".($key+1)),("input-".($key+1)),("label-".($key+1)),("svg-".($key+1)),("open-full-".($key+1)))) ?>
                <?php $c_turn_3+=4 ?>
                <?php endif ?>
        <?php endforeach;?>
        </div>    
        
        
        <div class="column">
        <?php foreach($articles as $key=>$article ): ?>
            <?php if($c_turn_4==$key):?>
                <?php echo(article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".($key+1)),("input-".($key+1)),("label-".($key+1)),("svg-".($key+1)),("open-full-".($key+1)))) ?>
                <?php $c_turn_4+=4 ?>
                <?php endif ?>
        <?php endforeach;?>
        </div>


</div>
<input type="submit" value="Favorie" class="<?=$class_1?>">
</form>
</div>

<div class="top" id="top_1">

<span class="material-symbols-outlined">
arrow_upward
</span>

</div>

<script >
<?php foreach($articles as $key => $article): ?>
open_full("<?=("open-full-".$key+1)?>","<?=("item-".$key+1)?>")
<?php endforeach ?>
</script>
<div class="blur"></div>



<?php require "footer.php" ?>