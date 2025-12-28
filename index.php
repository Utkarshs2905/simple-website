<!DOCTYPE html>
<html>
<head>
    <title>Simple AWS Website</title>
</head>
<body>
    <h2>User Registration</h2>

    <form action="insert.php" method="POST">
        <input type="text" name="name" placeholder="Enter Name" required><br><br>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="users.php">View Users</a>
</body>
</html>
