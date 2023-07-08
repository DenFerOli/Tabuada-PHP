<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
      $number = $_GET['number'] ?? 0;
    ?>
    <main>
      <h1>Tabuada</h1>
      <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
        <input type="number" name="number" id="number" value="<?php $number?>" min="1" max="10" required>
        <input type="submit" value="Calcular">
        </form>
      <ul>
        <?php 
          for($i = 1; $i <= 10; $i++) {
            echo "<li>$number X $i = " . $number * $i . "</li>";
          }
        ?> 
      </ul>
    </main>
</body>
</html>