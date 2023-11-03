<?php 
function favorie_buttun($class_1,$class_2,$class_3){
    return <<< CSS
                  * {
        margin: 0;
        padding: 0;
        }
        $class_1{
        width: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        gap: 14px;
        padding: 10px 15px 10px 10px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select:none;
        user-select: none;
        border-radius: 10px;
        color: #3f51b5; 
        }

        $class_2 {
        opacity:0;
        position: absolute;
        width:20px;
        height:20px;
        cursor:pointer;
    }      

    $class_2:checked + $class_1 svg {
        fill:#3f51b5;
        stroke: #3f51b5;
        -webkit-animation:heartButton 1s; 
            animation: heartButton 1s;

    }



    @keyframes heartButton {
        0% {
                -webkit-transform: scale(1);
                transform: scale(1);
        }

        25% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
        }

        50% {
                -webkit-transform: scale(1);
                transform: scale(1);
        }

        75% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
        }

        100% {
                -webkit-transform: scale(1);
                transform: scale(1);
        }
    }
CSS;
}


?>