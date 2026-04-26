<?php require_once 'core/config.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php $game = getGameByID($pdo, $_GET['gameID']); ?>
  <h1>Are you sure you want to delete this game?</h1>
  <div style="border:1px solid black; padding:10px;">
    <h2>Title: <?php echo $game['gameTitle']; ?></h2>
    <h2>Genre: <?php echo $game['genre']; ?></h2>
    <h2>Release Year: <?php echo $game['releaseYear']; ?></h2>
    <form action="core/handleForms.php?gameID=<?php echo $_GET['gameID']; ?>&devID=<?php echo $_GET['devID']; ?>" method="POST">
      <input type="submit" name="deleteGameBtn" value="Delete">
    </form>
  </div>
</body>
</html>
