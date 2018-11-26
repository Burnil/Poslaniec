<?php session_start();
$message = $_POST['content'];
$senderName = $_SESSION['loggedUsername'];

include('dbconnect.php');

$query = "INSERT INTO messages (Author,Content) VALUES('$senderName','$message')";
if($conn->query($query)===TRUE) {
    echo "Wys³ano";
} else {
    echo "Error: $query<br>$conn->error";
}
header("Location: Shared/Layout.php?p=Chat");
?>