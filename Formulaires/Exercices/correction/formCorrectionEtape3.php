<?php

function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

function substract(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

function multiply(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;
}

function divide(int $nb1, int $nb2) : ?int
{
    if($nb2 === 0)
    {
        return null;
    }

    return $nb1 / $nb2;
}

function modulo(int $nb1, int $nb2) : ?int
{
    if($nb2 === 0)
    {
        return null;
    }

    return $nb1 % $nb2;
}

echo "40 + 2 = ". add(40, 2) . "<br>"; // 42
echo "44 - 2 = ". substract(44, 2) . "<br>"; // 42
echo "21 * 2 = ". multiply(21, 2) . "<br>"; // 42
echo "84 / 2 = ". divide(84, 2) . "<br>"; // 42
echo "85 % 2 = ". modulo(85, 2). "<br>"; // 1

$number1 = null;
$number2 = null;
$operation = null;

if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operation"]))
{
    echo "Les champs existent. <br>";

    if(!empty($_POST["number1"]) && !empty($_POST["number2"]) && !empty($_POST["operation"]))
    {
        echo "Les champs ne sont pas vides <br>";

        $number1 = (int) $_POST["number1"];
        $number2 = (int) $_POST["number2"];
        $operation = $_POST["operation"];

        echo "<pre>";
        var_dump($number1);
        var_dump($number2);
        var_dump($operation);
        echo "</pre>";
    }
}


?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice Formulaire</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1> Resultat : </h1>
        <form action="etape-3.php" method="post">
            <fieldset>
                <label for="number1">
                    Nombre 1
                </label>
                <input type="number" step="1" name="number1" id="number1" />
            </fieldset>
            <fieldset>
                <label for="operation">
                    Opération
                </label>
                <select id="operation" name="operation">
                    <option value="add">Addition</option>
                    <option value="sub">Soustraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                    <option value="mod">Modulo</option>
                </select>
            </fieldset>
            <fieldset>
                <label for="number2">
                    Nombre 2
                </label>
                <input type="number" step="1" name="number2" id="number2" />
            </fieldset>
            <fieldset>
                <button type="submit">
                    Envoyer
                </button>
            </fieldset>
        </form>
    </body>
</html>