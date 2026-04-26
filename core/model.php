<?php  
function insertDeveloper($pdo, $name, $experience, $specialization) {
    $sql = "INSERT INTO developer (devName, experience, specialization) VALUES(?,?,?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$name, $experience, $specialization]);
}

function updateDeveloper($pdo, $name, $experience, $specialization, $devID) {
    $sql = "UPDATE developer SET devName=?, experience=?, specialization=? WHERE devID=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$name, $experience, $specialization, $devID]);
}

function deleteDeveloper($pdo, $devID) {
    $sql = "DELETE FROM developer WHERE devID=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$devID]);
}

function getAllDevelopers($pdo) {
    $sql = "SELECT * FROM developer";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getDeveloperByID($pdo, $devID) {
    $sql = "SELECT * FROM developer WHERE devID=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$devID]);
    return $stmt->fetch();
}

function insertGame($pdo, $title, $genre, $year, $devID) {
    $sql = "INSERT INTO game (gameTitle, genre, releaseYear, devID) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$title, $genre, $year, $devID]);
}

function getGamesByDeveloper($pdo, $devID) {
    $sql = "SELECT game.*, developer.devName AS owner
            FROM game
            JOIN developer ON game.devID = developer.devID
            WHERE game.devID=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$devID]);
    return $stmt->fetchAll();
}

function getGameByID($pdo, $gameID) {
    $sql = "SELECT * FROM game WHERE gameID=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$gameID]);
    return $stmt->fetch();
}

function updateGame($pdo, $title, $genre, $year, $gameID) {
    $sql = "UPDATE game SET gameTitle=?, genre=?, releaseYear=? WHERE gameID=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$title, $genre, $year, $gameID]);
}

function deleteGame($pdo, $gameID) {
    $sql = "DELETE FROM game WHERE gameID=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$gameID]);
}
?>
