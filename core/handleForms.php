<?php 
require_once 'config.php'; 
require_once 'model.php';

// Insert Developer
if (isset($_POST['insertDeveloperBtn'])) {
    $query = insertDeveloper($pdo, $_POST['devName'], $_POST['experience'], $_POST['specialization']);
    if ($query) { header("Location: ../index.php"); } else { echo "Insertion failed"; }
}

// Edit Developer
if (isset($_POST['editDeveloperBtn'])) {
    $query = updateDeveloper($pdo, $_POST['devName'], $_POST['experience'], $_POST['specialization'], $_GET['devID']);
    if ($query) { header("Location: ../index.php"); } else { echo "Update failed"; }
}

// Delete Developer
if (isset($_POST['deleteDeveloperBtn'])) {
    $query = deleteDeveloper($pdo, $_GET['devID']);
    if ($query) { header("Location: ../index.php"); } else { echo "Deletion failed"; }
}

// Insert Game
if (isset($_POST['insertGameBtn'])) {
    $query = insertGame($pdo, $_POST['gameTitle'], $_POST['genre'], $_POST['releaseYear'], $_GET['devID']);
    if ($query) { header("Location: ../viewgames.php?devID=" . $_GET['devID']); } else { echo "Insertion failed"; }
}

// Edit Game
if (isset($_POST['editGameBtn'])) {
    $query = updateGame($pdo, $_POST['gameTitle'], $_POST['genre'], $_POST['releaseYear'], $_GET['gameID']);
    if ($query) { header("Location: ../viewgames.php?devID=" . $_GET['devID']); } else { echo "Update failed"; }
}

// Delete Game
if (isset($_POST['deleteGameBtn'])) {
    $query = deleteGame($pdo, $_GET['gameID']);
    if ($query) { header("Location: ../viewgames.php?devID=" . $_GET['devID']); } else { echo "Deletion failed"; }
}
?>
