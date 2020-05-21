<?php session_start(); ?>
<?php 
    require("funkcje.php");

    if (isSet($_POST["zaloguj"])) {
        $ulogin = testInput($_POST["login"]);
        $uhaslo = testInput($_POST["haslo"]);

        if ($ulogin == $osoba1->login && $uhaslo == $osoba1->haslo) {
            $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
            header("Location: user.php");
        } else if ($ulogin == $osoba2->login && $uhaslo == $osoba2->haslo) {
            $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
            header("Location: user.php");
        } else {
            $_SESSION["zalogowanyImie"] = "";
            $_SESSION["zalogowany"] = 0;
            header("Location: index.php");
        }
        
        // echo "Odebrany login: $ulogin<br>";
        // echo "Odebrane hasło: $uhaslo<br>";
    } else {
        header("Location: index.php");
    }
?>