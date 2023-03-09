<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <form action="" method="post">
        <input type="imie" placeholder="imie" name="imie">
        <input type="nazwisko" placeholder="nazwisko" name="nazwisko">
        <input type="pesel" placeholder="pesel" name="pesel">
        <input type="submit" value="dodaj" name="button">
        <input type="submit" value="usun" name="button">
    </form>

    <?php
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $pesel = $_POST['pesel'];
        $button = $_POST['button'];


    if($button == "dodaj"){


        if($imie == "ania" and  $nazwisko == "nowak" and $pesel == "pesel"){
            setcookie("dane", 3,time() + 3600);
            echo("dziala 3");
        }else if($imie == "ania" and  $nazwisko == "nowak" and $pesel != "pesel"){
            setcookie("dane", 2,time() + 3600);
            echo("dziala 2");
        }else if($imie == "ania" and  $nazwisko != "nowak" and $pesel != "pesel"){
            setcookie("dane", 1,time() + 3600);
            echo("dziala 1");
        }else if($imie != "ania" and  $nazwisko != "nowak" and $pesel != "pesel"){
            setcookie("dane", 0,time() + 3600);
            echo("dziala 0");
        }
    } 

            
    if($button == "usun"){


        if($imie == "ania" and  $nazwisko == "nowak" and $pesel == "pesel"){
            setcookie("dane", 3,time() + -1);
            echo("dziala 3");
        }else if($imie == "ania" and  $nazwisko == "nowak" and $pesel != "pesel"){
            setcookie("dane", 2,time() + -1);
            echo("dziala 2");
        }else if($imie == "ania" and  $nazwisko != "nowak" and $pesel != "pesel"){
            setcookie("dane", 1,time() + -1);
            echo("dziala 1");
        }else if($imie != "ania" and  $nazwisko != "nowak" and $pesel != "pesel"){
            setcookie("dane", 0,time() + -1);
            echo("dziala 0");
        }
    } 
    
    ?>


</body>
</html>
