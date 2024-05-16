<?php
$nb1 = null;
$nb2 = null;
$operation = null;
$add = null;
$sub = null;
$mul = null;
$div = null;
$mod = null;


// Je vérifie si le prénom et le nom existent

if(isset($_POST["nb1"]) && isset($_POST["nb2"]) && isset($_POST["operation"]))
{
    echo "Les champs existent. <br>";

    if(!empty($_POST["nb1"]) && !empty($_POST["nb2"]) && !empty($_POST["operation"]))
    {
        echo "Les champs ne sont pas vides <br>";

        $nb1 = (int) $_POST["nb1"];
        $nb2 = (int) $_POST["nb2"];
        $operation = $_POST["operation"];

        echo "<pre>";
        var_dump($nb1);
        var_dump($nb2);
        var_dump($operation);
        echo "</pre>";
    }
}
else
{
    echo "/!\ ERREUR : un ou plusieurs champs n'existent pas /!\<br>";
}

$nb1 = intval($_POST["nb1"]);
$nb2 = intval($_POST["nb2"]);
$operation = ($_POST["operation"]);

function add (int $nb1, int $nb2 ) : int {
    $add = $nb1 + $nb2;
    return $add;
}

function sub(int $nb1, int $nb2) : int {
    $sub = $nb1 - $nb2;
    return $sub;
}

function mul (int $nb1, int $nb2) : int {
    $mul = $nb1 * $nb2;
    return $mul;
}

function div(int $nb1, int $nb2) : ?int {
    if($nb2 === 0)
    {
        return null;
    }
    $div = $nb1/$nb2;
    return $div;
}

function mod (int $nb1, int $nb2) : ?int {
    if($nb2 === 0)
    {
        return null;
    }
    $mod = $nb1 % $nb2;
    return $mod;
}



if ($operation === "add")
{
    echo add($nb1, $nb2);
}

else if ($operation === "sub")
{
    echo sub($nb1, $nb2);
}

else if ($operation ==="mul")
{
    echo mul($nb1, $nb2);
}

else if ($operation === "div")
{
    echo div($nb1, $nb2);

}

else if ($operation === "mod")
{
    echo mod($nb1, $nb2);

}

else
{
    echo "error operator";
}

echo "40 + 2 = ". add(40, 2) . "<br>"; // 42
echo "44 - 2 = ". sub(44, 2) . "<br>"; // 42
echo "21 * 2 = ". mul(21, 2) . "<br>"; // 42
echo "84 / 2 = ". div(84, 2) . "<br>"; // 42
echo "85 % 2 = ". mod(85, 2). "<br>"; // 1

?>