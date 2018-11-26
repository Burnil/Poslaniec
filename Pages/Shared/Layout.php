<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta name="author" content="Maciej Burnat" />
    <meta name="description" content="Chat tekstowy" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="../../wwwroot/css/bootstrap.css" />
    <link rel="stylesheet" href="../../wwwroot/css/site.css" />
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand" href="Layout.php?p=Home">Posłaniec+</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Layout.php?p=Home">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item active">
                    <a class="nav-link" href="https://github.com/Burnil/Poslaniec">
                        Github
                    </a>
                </li>

                <?php if($_SESSION['logged']==1) {
                                 echo "
                                <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"../Logout.php\">Wyloguj się
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>";

                      } ?>
            </ul>
        </div>
    </nav>

    <?php require '../'.$_GET['p'].'.php'; ?>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

