<?php 
$name="Favorie";
$class="style.css";
require "header.php";

require "liste-article-favorie.php";

require "article.php";

require "but_favorie.php";




?>

<style>
    <?php foreach($articles as $key => $article): 
                echo(favorie_buttun((".label-".$key+1),("#input-".$key+1),("svg-".$key+1)));
    endforeach ?>


</style>

<div class="title_1" > 
    <h1>
        Retrouver vos article favorie !!

    </h1>
<br>
<hr>
<br>
</div>

<div class="main">


<div class="column">


<?php if(isset($_GET["favorite-checkbox"])): ?>

    <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
        
        <?php foreach($articles as $key_1 => $article): ?>
            <?php if($value == $article["title"] && ($key+1)%4==1): ?>
                
                <?=article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1),true) ?>
                
            <?php endif ?>
        <?php endforeach ?>
    <?php endforeach ?>



<?php endif ?>

</div>

<div class="column">


<?php if(isset($_GET["favorite-checkbox"])): ?>

    <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
        
        <?php foreach($articles as $key_1 => $article): ?>
            <?php if($value == $article["title"] && ($key+1)%4==2): ?>

                <?=article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1),true) ?>

            <?php endif ?>
        <?php endforeach ?>
    <?php endforeach ?>

<?php endif ?>

</div>

<div class="column">


<?php if(isset($_GET["favorite-checkbox"])): ?>

    <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
        
        <?php foreach($articles as $key_1 => $article): ?>
            <?php if($value == $article["title"] && ($key+1)%4==3): ?>

                <?=article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1),true) ?>

            <?php endif ?>
        <?php endforeach ?>
    <?php endforeach ?>

<?php endif ?>

</div>

<div class="column">

<?php if(isset($_GET["favorite-checkbox"])): ?>

    <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
        
        <?php foreach($articles as $key_1 => $article): ?>
            <?php if($value == $article["title"] && ($key+1)%4==0): ?>
                
                <?=article($article["genre"],$article["title"],$article["content"],$article["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1),true) ?>

            <?php endif ?>
        <?php endforeach ?>
    <?php endforeach ?>

<?php endif ?>

</div>

<input type="submit" value="Favorie" class="<?=$class_1?>">

<script >
<?php foreach($articles as $key => $article): ?>
open_full("<?=("open-full-".$key+1)?>","<?=("item-".$key+1)?>")
<?php endforeach ?>
</script>
<div class="blur"></div>

</div>

<br><hr><br>



<div class="title_1" > 
    <h1>
        Découvrez plus d'article de se genre !!
    </h1>
</div>

<div class="recomendation">

        <div class="column">


        <?php if(isset($_GET["favorite-checkbox"])): ?>

            
                
            <?php foreach($articles as $key_1 => $article): ?>

                <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>

                    <?php if($value == $article["title"] && ($key+1)%4==1): ?>
                        
                        <?php foreach($articles as $key_2 => $article_2): ?>
                            <?php if($article["genre"]==$article_2["genre"] && $article["title"] !== $article_2["title"]): ?>
                                <?php $in=true?>
                                <?php foreach($_GET["favorite-checkbox"] as $key_3 => $value_2):?>    
                                    <?php if($value_2 == $article_2["title"]): ?>
                                        <?php $in = false?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                    <?php if( $in):?>

                                    <?=article($article["genre"],$article_2["title"],$article_2["content"],$article_2["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1)) ?>

                                    <?php endif ?>
                            <?php endif?>
                        <?php endforeach ?>

                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>



        <?php endif ?>

        </div>

        <div class="column">


        <?php if(isset($_GET["favorite-checkbox"])): ?>

            <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
                
                <?php foreach($articles as $key_1 => $article): ?>
                    <?php if($value == $article["title"] && ($key+1)%4==2): ?>

                        <?php foreach($articles as $key_2 => $article_2): ?>
                            <?php if($article["genre"]==$article_2["genre"] && $article["title"] !== $article_2["title"]): ?>
                                <?php $in=true?>
                                <?php foreach($_GET["favorite-checkbox"] as $key_3 => $value_2):?>    
                                    <?php if($value_2 == $article_2["title"]): ?>
                                        <?php $in = false?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                    <?php if( $in):?>
                                    <?=article($article["genre"],$article_2["title"],$article_2["content"],$article_2["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1)) ?>
                                    <?php endif ?>
                            <?php endif?>
                        <?php endforeach ?>

                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>

        <?php endif ?>

        </div>

        <div class="column">


        <?php if(isset($_GET["favorite-checkbox"])): ?>

            <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
                
                <?php foreach($articles as $key_1 => $article): ?>
                    <?php if($value == $article["title"] && ($key+1)%4==3): ?>

                        <?php foreach($articles as $key_2 => $article_2): ?>
                            <?php if($article["genre"]==$article_2["genre"] && $article["title"] !== $article_2["title"]): ?>
                                <?php $in=true?>
                                <?php foreach($_GET["favorite-checkbox"] as $key_3 => $value_2):?>    
                                    <?php if($value_2 == $article_2["title"]): ?>
                                        <?php $in = false?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                    <?php if( $in):?>
                                    <?=article($article["genre"],$article_2["title"],$article_2["content"],$article_2["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1)) ?>
                                    <?php endif ?>
                            <?php endif?>
                        <?php endforeach ?>

                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>

        <?php endif ?>

        </div>

        <div class="column">

        <?php if(isset($_GET["favorite-checkbox"])): ?>

            <?php foreach($_GET["favorite-checkbox"] as $key => $value): ?>
                
                <?php foreach($articles as $key_1 => $article): ?>
                    <?php if($value == $article["title"] && ($key+1)%4==0): ?>
                        
                        <?php foreach($articles as $key_2 => $article_2): ?>
                            <?php if($article["genre"]==$article_2["genre"] && $article["title"] !== $article_2["title"]): ?>
                                <?php $in=true?>
                                <?php foreach($_GET["favorite-checkbox"] as $key_3 => $value_2):?>    
                                    <?php if($value_2 == $article_2["title"]): ?>
                                        <?php $in = false?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                    <?php if( $in):?>
                                    <?=article($article["genre"],$article_2["title"],$article_2["content"],$article_2["img"],("item-".$key+1),("input-".$key+1),("label-".$key+1),("svg-".$key+1),("open-full-".$key+1)) ?>
                                    <?php endif ?>
                            <?php endif?>
                        <?php endforeach ?>

                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>

        <?php endif ?>

        </div>
</div>

<pre  >
    <?php  var_dump($_GET["favorite-checkbox"]) ?>
</pre>