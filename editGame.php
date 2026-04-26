<?php require_once 'core/config.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php $game = getGameByID($pdo, $_GET['gameID']); ?>
  <h1>Edit Game</h1>
  <form action="core/handleForms.php?gameID=<?php echo $_GET['gameID']; ?>&devID=<?php echo $_GET['devID']; ?>" method="POST">
    <p><label>Game Title:</label>
       <input type="text" name="gameTitle" value="<?php echo $game['gameTitle']; ?>"></p>
    <p><label>Genre:</label>
       <input type="text" name="genre" value="<?php echo $game['genre']; ?>"></p>
    <p><label>Release Year:</label>
       <input type="number" name="releaseYear" value="<?php echo $game['releaseYear']; ?>"></p>
    <input type="submit" name="editGameBtn" value="Update">
  </form>
</body>
</html>
