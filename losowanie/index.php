<?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: ../login");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mechan, mechanik, card game, mechan card game">
    <title>MECHAN - The Card Game</title>

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/styleIndex.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2534586073857624" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
        <div id="header">
            <a href="index.php"><h1>MECHAN - The Card Game</h1><hr></a>
        </div>

        <div id="left">
            <img src="../img/dyrektor.png" alt="Dyrektor Mechanika" style="height: 70vh;">
        </div>

        <div id="centerTop">
            <a href="play.html"><input type="submit" class="buttonMain button" value="Graj"></a>
            <a href="draw.html"><input type="submit" class="buttonMain button" value="Losuj"></a>
        </div>

        <div id="centerBottom">
            <div class="links"><a href="login.html"><input type="submit" class="button" value="Rejestracja / Logowanie"></a></div>
            <div class="links">
                <a href="https://github.com/KondyKox/MECHAN-The-Card-Game" target="_blank"><input type="submit" class="button" value="Github"></a>
            </div>
            <div class="links">
                <a href="https://www.paypal.me/megakoks" target="_blank"><input type="submit" class="button" value="Donate"></a>
            </div>
            <div class="links">
                <a href="contact.html"><input type="submit" class="button" value="Kontakt"></a>
            </div>
            <div style="text-align: center; margin-top: 15%;">
                <p>Wykonali:<span style="color: #398AD7;"> Konrad Ciesielski</span> i <span style="color: #398AD7;">Michał Wachowski (4ir)</span></p>
            </div>
        </div>

        <div id="right">
            <img src="../img/grafika.png" alt="ad" class="ad">
            <img src="../img/grafika.png" alt="ad" class="ad">
            <img src="../img/grafika.png" alt="ad" class="ad">
        </div>
    </div>
</body>
</html>