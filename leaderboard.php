<?php
include "connection.php";

$query = "SELECT student_id, score FROM quiz_results ORDER BY score DESC";
$result = mysqli_query($conn, $query);

if (!result) {
    die("Error fetching leaderboard data: " . mysqli_error($conn));
}

$leaderboard = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
</head>
<body>
    <h1>LEADERBOARD</h1>

    <?php if ($leaderboard): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Student_ID</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rank = 1;
                foreach ($leaderboard as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['student_id']); ?></td>
                        <td><?php echo $row['score']; ?></td>
                    </tr>
            </tbody>
        </table>
</body>
</html>