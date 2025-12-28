<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<h2>Registered Users</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Created At</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Back</a>
