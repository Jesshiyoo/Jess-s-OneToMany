<?php require_once 'core/config.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Game Publisher System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Register a Developer</h1>
  <form action="core/handleForms.php" method="POST">
    <p><label>Name:</label><input type="text" name="devName"></p>
    <p><label>Experience (years):</label><input type="number" name="experience"></p>
    <p><label>Specialization:</label><input type="text" name="specialization"></p>
    <input type="submit" name="insertDeveloperBtn" value="Register">
  </form>

  <h2>All Developers</h2>
  <?php $developers = getAllDevelopers($pdo); ?>
  <?php foreach ($developers as $dev) { ?>
    <div style="border:1px solid black; margin:10px; padding:10px;">
      <h3><?php echo $dev['devName']; ?></h3>
      <p>Experience: <?php echo $dev['experience']; ?> years</p>
      <p>Specialization: <?php echo $dev['specialization']; ?></p>
      <a href="viewGames.php?devID=<?php echo $dev['devID']; ?>">View Games</a>
      <a href="editDeveloper.php?devID=<?php echo $dev['devID']; ?>">Edit</a>
      <a href="deleteDeveloper.php?devID=<?php echo $dev['devID']; ?>">Delete</a>
    </div>
  <?php } ?>
</body>
</html>
