<?php 
function article($genre,$title,$content,$image,$id_a,$id_b_1,$id_b_2,$svg,$class_open,$check=false){
    if($title != "" && $content != "" && $image != ""){
        $checkedAttribute = ($check) ? 'checked' : '';
        return (<<<HTML
        <div class ="article $id_a" id="">
        <span class="material-symbols-outlined $class_open"  id="material-symbols-outlined-1">
        open_in_full
        </span>
        <div class="parent">
        <div class="child">

        <input type="checkbox"  id="$id_b_1" name="favorite-checkbox[]" value="$title"  $checkedAttribute>
        <label for="favorite" class="$id_b_2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather  feather-heart"> 
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
        </svg>
        </label>
        </div>
        </div>
        
        <div class="title"><h1>$title</h1> </div>
        <div class="content"><p>$content</p> </div>
        <div class="image"><img src="$image" alt=""></div>
        <div class="genre">
            <h3 >Thème : $genre</h3>
        </div>
        </div>
    HTML);
}
}

?>