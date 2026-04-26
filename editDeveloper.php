<?php require_once 'core/config.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Developer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php $dev = getDeveloperByID($pdo, $_GET['devID']); ?>
  <h1>Edit Developer</h1>
  <form action="core/handleForms.php?devID=<?php echo $_GET['devID']; ?>" method="POST">
    <p><label>Name:</label>
       <input type="text" name="devName" value="<?php echo $dev['devName']; ?>"></p>
    <p><label>Experience (years):</label>
       <input type="number" name="experience" value="<?php echo $dev['experience']; ?>"></p>
    <p><label>Specialization:</label>
       <input type="text" name="specialization" value="<?php echo $dev['specialization']; ?>"></p>
    <input type="submit" name="editDeveloperBtn" value="Update">
  </form>
</body>
</html>
