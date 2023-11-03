<?php require "fonction_but.php";



?>


<?php $class_1=$_SERVER['SCRIPT_NAME']=="/favorie.php" ? "submit_but_1":"submit_but"; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?=$class?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title><?=$name?></title>
    <script src="js.js" defer></script>
    <script src="open_f.js" ></script>
</head>
<body>
<div class="all">
<header class="head" >
<div class="bar">
        <img width="48" height="48" src="https://img.icons8.com/color/96/flow-chart.png" alt="flow-chart"/>
        <div class="but_list">
        <?=but("Home","/index.php") ?>
        <?=but("Algorithme","/algorithme.php") ?>
        </div>
        <input type="text" class="search_bar" placeholder="Faite une recherche...">
        <div class="profil">J</div>
</div>

</header>
