<?php
    session_start(); 

    $sesID = $_SESSION['id'];
    require "../config.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mechan, mechanik, card game, mechan card game, gra-bo.ga">
    <title>MECHAN - The Card Game</title>
    <link rel="icon" href="../img/mechan_logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact_style.css">

    <script src="../jquery-3.6.1.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php"><img src="../img/mechan_logo.png"></a>
                <h1>MECHAN - The Card Game</h1>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown-item"><a href="../index.php" class="nav-link active">Strona główna</a></li>
                    <li class="dropdown-item">
                        <?php
                            if(!isset($_SESSION["username"]))
                                echo '<a href="../login" class="nav-link">Rejestracja / Logowanie</a>';
                            else 
                                echo '<a href="../logout" class="nav-link">Wyloguj</a>';
                        ?>
                    </li>
                    <li class="dropdown-item"><a href="https://www.paypal.me/megakoks" target="_blank" class="nav-link">Donate</a></li>
                    <li class="dropdown-item"><a href="https://github.com/KondyKox/MECHAN-The-Card-Game" target="_blank" class="nav-link">Github</a></li>
                    <li class="dropdown-item"><a href="../contact/" class="nav-link">Kontakt</a></li>
                    <li class="dropdown-item"><a href="https://youtu.be/Slz3vTqsKLg" target="_blank" class="nav-link">Zwiastun</a></li>
                    <li style="margin: 3%;">
                        <?php
                            $sq4 = "SELECT money_count as monety FROM users WHERE id = $sesID";
                            $resul = mysqli_query($link, $sq4);

                            if(isset($_SESSION["username"])) {
                                while($row = mysqli_fetch_assoc($resul))                                  
                                    echo "Zalogowany: <span style='color: #398AD7' id='monety'>" . htmlspecialchars($_SESSION["username"]) . " (" . $row['monety'] . " <img src='../img/boski_dukat.png' alt='Boski Dukat' style='width: 20px; height: 20px;'>)</span>";
                            }                           
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div id="main">
            <h2>Chcesz do nas napisać?</h2>
            <h3>Tu masz dc i maila:</h3>
            <p><a href="https://discord.gg/Mbv96YGDsB" target="_blank">https://discord.gg/Mbv96YGDsB</a></p>
            <p><a href="mailto:sluzbowy@gra-bo.ga" target="_blank">sluzbowy@gra-bo.ga</a></p>
            <p id="smaller">(Mail działa tylko w połowie - możesz do nas pisać, ale nie możemy z niego odpisać.)</p>
            <p>Pozdrawiamy!</p>
        </div><hr>

        <div id="footer">
            <p id="bigger">^ KONTAKT DO NAS ^</p>
            <p>&copy; Wszelkie prawa zastrzeżone</p>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>