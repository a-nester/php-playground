<!-- Start Docker Desktop first -->
<!-- docker-compose up --build -d -->
<?php
require_once 'db.php';
try {


    $name = mysqli_real_escape_string($db, "Andy's");

    // $insert = "INSERT INTO `team` (`name`, `email`, `date`) VALUES ('$name', 'bill@gmail.com', '2012-10-10')";
    // $update = "UPDATE `team` SET `text` = 'hello' WHERE `id` = 5 ";
    // $delete = "DELETE FROM team WHERE id = 6";
    $select = "SELECT * FROM team";

    $query = mysqli_query($db, $select);
    $team = mysqli_fetch_all($query, MYSQLI_ASSOC);


    echo "<br>Successfully add to db";
} catch (mysqli_sql_exception $e) {
    echo 'Caugth: ' . $e->getMessage();
    // mysqli_error();
}

 ?>
 
$var = "        <h2>Our team</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th><th>NAME</th><th>EMAIL</th><th>DATE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($team as $member): ?>
            <tr>
                <td><?= htmlspecialchars($member['id']) ?></td>
                <td><?= htmlspecialchars($member['name']) ?></td>
                <td><?= htmlspecialchars($member['email']) ?></td>
                <td><?= htmlspecialchars($member['date']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>"

    