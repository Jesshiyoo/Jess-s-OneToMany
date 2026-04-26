<?php require_once 'core/config.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Games</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <a href="index.php">Back to Developers</a>
  <h1>Games by Developer</h1>
  <form action="core/handleForms.php?devID=<?php echo $_GET['devID']; ?>" method="POST">
    <p><label>Game Title:</label><input type="text" name="gameTitle"></p>
    <p><label>Genre:</label><input type="text" name="genre"></p>
    <p><label>Release Year:</label><input type="number" name="releaseYear"></p>
    <input type="submit" name="insertGameBtn" value="Add Game">
  </form>

  <table border="1">
    <tr><th>ID</th><th>Title</th><th>Genre</th><th>Year</th><th>Owner</th><th>Action</th></tr>
    <?php $games = getGamesByDeveloper($pdo, $_GET['devID']); ?>
    <?php foreach ($games as $game) { ?>
      <tr>
        <td><?php echo $game['gameID']; ?></td>
        <td><?php echo $game['gameTitle']; ?></td>
        <td><?php echo $game['genre']; ?></td>
        <td><?php echo $game['releaseYear']; ?></td>
        <td><?php echo $game['owner']; ?></td>
        <td>
          <a href="editGame.php?gameID=<?php echo $game['gameID']; ?>&devID=<?php echo $_GET['devID']; ?>">Edit</a>
          <a href="deleteGame.php?gameID=<?php echo $game['gameID']; ?>&devID=<?php echo $_GET['devID']; ?>">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
