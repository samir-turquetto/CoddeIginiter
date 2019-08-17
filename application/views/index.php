<?php
    require_once "./templates/header.php";
    

    if(isset($_GET['page'])){
        include "./{$_GET['page']}.php";
    }else{
        include "./home.php";
    }

    
    require_once "./templates/footer.php";
?>