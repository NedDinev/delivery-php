<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Доставка</title>
  </head>
  <body>

<h1>Доставка</h1>

<?php 
$produkt=$_POST["produkt"];
$nachalniMateriali=$_POST["nachalniMateriali"];
$minimalniMateriali=$_POST["minimalniMateriali"];
$dostavchik=$_POST["dostavchik"];
$email=$_POST["email"];


?>


<table border="4" bordercolor="black" cellspacing="0" cellpadding="9" width="44%"> 
<caption><big><b>Начални данни</b></big></caption>
  <tr>
    <th>Име на продукта</th>
    <th><?php echo $produkt; ?></th>
  </tr>

  <tr>
    <th>Наличен брой материали</th>
    <th><?php echo $nachalniMateriali; ?></th>
  </tr>
  <tr>
    <th>Минимален брой материали</th>
    <th><?php echo $minimalniMateriali; ?></th>
  </tr>
  <tr>
    <th>Име на доставчика</th>
    <th><?php echo $dostavchik; ?></th>
  </tr>
  <tr>
    <th>E-mail на доставчика</th>
    <th><?php echo $email; ?></th>
  </tr>
</table>
<br />
<h2>Заявка за доставка на материали за <?php echo $produkt; ?> до</h2>
<br />
<?php
if ($nachalniMateriali < $minimalniMateriali) {
  $k = $minimalniMateriali - $nachalniMateriali;
  echo "<form>";
  echo "Име на доставчика:
  <input type=`text` name=`dostavchik` value = " . $dostavchik . " /> <br><br>";
  echo " Задайте e-mail на доставчика:
  <input type=`email` name=`email` value=". $email . " /> <br><br>";
  echo " Брой за доставка:
  <input type=`number` name=`broiDostavka` value=" . $k ." />";
}
else {
  echo "<h2>Няма нужда от доставка</h2>";
}

?>

</body>
</html>
