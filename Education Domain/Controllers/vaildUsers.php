<?php
    if(!isset($_SESSION['user'])){
        header('location: ../Index.php');
    }
?>