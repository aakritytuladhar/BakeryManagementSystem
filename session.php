<?php
    session_start();
    require('dbconfig.php');

    if($_SESSION['name']){
        header('location:login.php');
    }