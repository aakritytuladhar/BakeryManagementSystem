<?php
    session_start();
    if(isset($_SESSION['name'])){
        session_destroy();
        echo "<script>location.href='login.php'</script>";
        // echo $_SESSION['name'];
        
    }
    else{
        echo "<script>location.href='index.php'</script>";
    }