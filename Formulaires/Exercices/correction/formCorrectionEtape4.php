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

$number1 = null;
$number2 = null;
$operation = null;
$result = null;

if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operation"]))
{

    if(!empty($_POST["number1"]) && !empty($_POST["number2"]) && !empty($_POST["operation"]))
    {

        $number1 = (int) $_POST["number1"];
        $number2 = (int) $_POST["number2"];
        $operation = $_POST["operation"];

        if($operation === "add")
        {
            $result = add($number1, $number2);
        }
        else if ($operation === "sub")
        {
            $result = substract($number1, $number2);
        }
        else if($operation === "mul")
        {
            $result = multiply($number1, $number2);
        }
        else if ($operation === "div")
        {
            $result = divide($number1, $number2);
        }
        else if ($operation === "mod")
        {
            $result = modulo($number1, $number2);
        }
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
        <h1> Resultat : <?= $result ?></h1>
        <form action="index.php" method="post">
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