<html lang="es">
<head>
    <title>Get divisors</title>
</head>
<body>
<form method="post" action="Divisores.php">
    <label>
        Number:
        <input type="text" name="num"/>
    </label>
    <input type="submit"/>
</form>
<div>
    <?php
    $divisores = [];
    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        $i = 1;
        while (sizeof($divisores) != $num) {

            echo "<br>Es divisible entre: ", $i;

            $divisores[] = $i;

            $i++;
        }
        echo "<br>";
        var_dump($divisores);

    }

    ?>
</div>
</body>
</html>