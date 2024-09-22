<?php

if(isset($_GET['link'])){
    $link = $_GET['link'];
    if($link=='products'){
        include 'products/index.php';
    }

    if($link=='board'){
        include 'board.php';
    }

    if($link=='edit'){
        include 'products/edit_products.php';
    }

    if($link=='delete'){
        include 'products/delete_products.php';
    }

    if($link=='add_products'){
        include 'products/add_products.php';
    }
    if($link=='member'){
        include 'member/index.php';
    }
    if($link=='cart'){
        include 'cart/index.php';
    }
    if($link=='women'){
        include 'women/index.php';
    }
    if($link=='add_women'){
        include 'women/add_women.php';
    }
    if($link=='edit_perfume.php'){
        include 'women/edit_perfume.php';
    }
    

    
    
   

}

?>