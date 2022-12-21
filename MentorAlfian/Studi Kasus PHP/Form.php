
<?php 
include 'operator.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
<form action="switch.php" method="POST">
  <label for="game">Pilih Game mu</label>
  <select name="game">
    <option value="Valorant">Valorant</option>
    <option value="ML">Mobile Legend</option>
    <option value="CSGO">CS:GO</option>
    <option value="EPEP">EPEP</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">

  <p><?php echo "Game Favorit mu Adalah : " . phpswitch($gamenya)?></p>
</form>
</body>
</html>