<?php session_start();

switch($_POST['type']) {
    case 1: {
        if($_POST['login']=="") {
            redirectToHomeWithLoginErr(1);
        }

        $login = getAndFormatLogin();

        if($_POST['pass']=="") {
            redirectToHomeWithLoginErr(1);
        }

        $pass = md5($_POST['pass']);
        unset($_POST['pass']);

        authUser($login,$pass);
        break;
    }
    case 2:
        registerUser();
        break;
}
function getAndFormatLogin() {
    return strip_tags(trim(mb_strtolower($_POST['login'])));
}

function redirectToHomeWithLoginErr($code) {
    header("Location: Shared/Layout.php?p=Home&e=$code");
}

function redirectToHomeLogged($code) {
    $_SESSION['logged']=1;
    header("Location: Shared/Layout.php?p=Home");
}

function registerUser() {
    if($_POST['login']=="") {
        redirectToHomeWithLoginErr(2);
    }

    $login = getAndFormatLogin();

    if(!$_POST['pass']=="" && !$_POST['passConfirm']=="") {

        if($_POST['pass']!=$_POST['passConfirm']) {
            redirectToHomeWithLoginErr(2);
        }

        $pass = md5($_POST['pass']);
        unset($_POST['pass']);

        if(checkIfAnyUserHasThatUsername($login)) {
            redirectToHomeWithLoginErr('3');
        } else {
            addUser($login,$pass);
            redirectToHomeLogged('1');
        }
    } else {
        redirectToHomeWithLoginErr(2);
    }
}

function checkIfAnyUserHasThatUsername($login) {
    include('dbconnect.php');
    $query = "SELECT Username FROM users WHERE Username LIKE '$login'";
    $result = $conn->query($query);
    $conn->close();

    if($result->num_rows==0)
        return false;
    return true;
}

function addUser($login,$pass) {

    include('dbconnect.php');
    $query = "INSERT INTO users (Username,Password) VALUES ('$login','$pass')";

    if($conn->query($query)===TRUE) {
        echo "Stworzono uzytkownika";
    } else {
        echo "Error: $query<br>$conn->error";
    }

    $conn->close();
}

function authUser($login,$pass) {
    include('dbconnect.PHP');
    $query = "SELECT Username,Password FROM Users WHERE Username LIKE '$login'";
    $result = $conn->query($query);
    if($result->num_rows==0) {
        redirectToHomeWithLoginErr(1);
    }

    $result = $result->fetch_assoc();
    if($result['Password']!=$pass) {
        redirectToHomeWithLoginErr(1);
    }
    $conn->close();
    if($result['Password']==$pass) {
        $_SESSION['loggedUsername']=$login;
        redirectToHomeLogged(0);
    }
}



?>