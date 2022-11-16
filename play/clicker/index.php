<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: ../../login");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mechan, mechanik, card game, mechan card game, gra-bo.ga">
    <title>MECHAN - The Card Game</title>
    <link rel="icon" href="../../img/mechan_logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/clicker_style.css">

    <script src="../../jquery-3.6.1.min.js"></script>
    <script src="../../draw/array.js"></script>
    <script src="click.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../../index.php"><img src="../../img/mechan_logo.png"></a>
                <h1>MECHAN - The Card Game</h1>
                <button type="button" class="dropdown-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown-item"><a href="../../index.php" class="nav-link active">Strona główna</a></li>
                    <li class="dropdown-item">
                        <?php
                            if(!isset($_SESSION["username"]))
                                echo '<a href="../../login" class="nav-link"><input type="submit" value="Rejestracja / Logowanie"></a>';
                            else 
                                echo '<a href="../../logout" class="nav-link"><input type="submit" value="Wyloguj"></a>';
                        ?>
                    </li>
                    <li class="dropdown-item"><a href="https://www.paypal.me/megakoks" target="_blank" class="nav-link">Donate</a></li>
                    <li class="dropdown-item"><a href="https://github.com/KondyKox/MECHAN-The-Card-Game" target="_blank" class="nav-link">Github</a></li>
                    <li class="dropdown-item"><a href="../../contact/" class="nav-link">Kontakt</a></li>
                    <li style="margin: 3%;">
                        <?php
                            if(isset($_SESSION["username"]))
                                echo "Zalogowany: <span style='color: #398AD7'>" . htmlspecialchars($_SESSION["username"]) . "</span>";
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div id="clicker" class="col-sm-12">
            <center>
                <form action="index.php" method="post">
                    <button type="button" name="submit" onclick="click()" id="click">
                        <img src="../../img/cards/kartaMucha2.png">
                    </button>
                </form>
            </center>
            <?php 
              $sq0 = "UPDATE `profiles` SET `money_count` = money_count + 1 WHERE user_id = $sesID;";
              $run = mysqli_query($link, $sq0);
            ?>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>