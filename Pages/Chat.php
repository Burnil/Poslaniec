<?php if($_SESSION['logged']==0) header("Location: Layout.php?p=Home")  ?>
<div class="container-flex">
    <div class="chatPanel  col-9">
        <?php include "displayMessages.php"; ?>
    </div>
    <div class="messageInput col-12">
        <form action="../SendMessage.php" method="post">
            <input type="text" name="content" id="TextField" autofocus/>
            <input type="submit" value="Wyślij" disabled id="SendButton"/>
        </form>
    </div>
    <script src="../../wwwroot/js/script.js"></script>
</div>