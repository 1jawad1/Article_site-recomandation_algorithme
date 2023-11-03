<?php 

function but($name,$file){

    $class=$_SERVER['SCRIPT_NAME']==$file ? "current":"home"; 
    return " <a href='".$file."' style='text-decoration: none;'><div class='".$class."'><span class='home_1'>".$name."</span></div></a>";

}
?>