<?php
include "connection.php";

$query = "SELECT student_id, score FROM quiz_results ORDER BY score DESC";
$result = mysqli_query($conn, $query);

if (!result) {
    die("Error fetching leaderboard data: " . mysqli_error($conn));
}

$leaderboard = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

