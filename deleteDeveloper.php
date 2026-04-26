<?php require_once 'core/config.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Developer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php $dev = getDeveloperByID($pdo, $_GET['devID']); ?>
  <h1>Are you sure you want to delete this developer?</h1>
  <div style="border:1px solid black; padding:10px;">
    <h2>Name: <?php echo $dev['devName']; ?></h2>
    <h2>Experience: <?php echo $dev['experience']; ?> years</h2>
    <h2>Specialization: <?php echo $dev['specialization']; ?></h2>
    <form action="core/handleForms.php?devID=<?php echo $_GET['devID']; ?>" method="POST">
      <input type="submit" name="deleteDeveloperBtn" value="Delete">
    </form>
  </div>
</body>
</html>
