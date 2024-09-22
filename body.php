<?php

if(isset($_GET['link'])){
    $link = $_GET['link'];
    if($link=='sign_in'){
        include 'sign_in/index.php';
    }

    if($link=='sign_up'){
        include 'sign_up/index.php';
    }
    
    if($link=='pr'){
        include 'pr/index.php';
    }
    if($link=='collection'){
        include 'pr/collection.php';
    }
    if($link=='about_us'){
        include 'pr/about_us.php';
    }

    if($link=='women'){
        include 'women/women.php';
    }
    if($link=='men'){
        include 'men/men.php';
    }


    if($link=='home'){
        include 'index.php';
    }
    if($link=='show'){
        include 'show.php';
    }
    


    
    
  
  
}

?>