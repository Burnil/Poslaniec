<?php
include('dbconnect.php');
$query = "SELECT Author, Content FROM messages ORDER BY ID ASC";
$result=$conn->query($query);

while($row=$result->fetch_assoc()) {
    echo "<p class=message>".$row['Author']."> ".$row['Content']."</p>";
}
?>