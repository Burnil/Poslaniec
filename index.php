<?php  
    session_start();
    $_SESSION['logged']="0";
    header("Location: Pages/Shared/Layout.php?p=Home");
?>