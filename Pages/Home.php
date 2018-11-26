<?php if($_SESSION['logged']==1) header("Location: Layout.php?p=Chat")  ?>
<div class="row">
    <div class="col-sm"></div>
    <div class="col-sm-5 CredPanel">
        <h1>Zaloguj się</h1>

        <?php  if(isset($_GET['e']) && $_GET['e']==1) echo "<p class=\"error\">Podany login lub hasło jest nieprawidłowe</p>";  ?>
        

        <form action="../Auth.php?p=Home.php" method="post">
            <input type="hidden" name="type" value="1" />
            <input type="text" name="login" placeholder="Login" />
            <br />
            <input type="password" name="pass" placeholder="Hasło" />
            <br />
            <input type="submit" value="Zatwierdź" />
        </form>
    </div>
    <div class="col-sm-5 CredPanel">
        <h1>Zarejestruj się</h1>

        <?php  if(isset($_GET['e']) && $_GET['e']==2) echo "<p class=\"error\">Wprowadziłeś nieprawidłowe dane</p>";  ?>
        <?php  if(isset($_GET['e']) && $_GET['e']==3) echo "<p class=\"error\">Nazwa użytkownika jest zajęta</p>";  ?>
        <?php  if(isset($_GET['l']) && $_GET['l']==1) echo "<p class=\"error\">Stworzono uzytkownika</p>";  ?>

        <form action="../Auth.php?p=Home.php" method="post">
            <input type="hidden" name="type" value="2" />
            <input type="text" name="login" placeholder="Login" />
            <br />
            <input type="password" name="pass" placeholder="Hasło" />
            <br />
            <input type="password" name="passConfirm" placeholder="Potwierdź hasło" />
            <br />
            <input type="submit" value="Zatwierdź" />
        </form>
    </div>
    <div class="col-sm"></div>
</div>