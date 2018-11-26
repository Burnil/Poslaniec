<?php session_start();
      $_SESSION['logged']=0;
      header("Location: Shared/Layout.php?p=Home")
?>