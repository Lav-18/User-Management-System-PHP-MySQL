<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h2>All Users</h2>
    <a href="form.html"> Add New User</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th> <th>Name</th> <th>Email</th> <th>Phone</th> <th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['phone']."</td>
                        <td>
                            <a href='update.php?id=".$row['id']."'>Edit</a> | 
                            <a href='delete.php?id=".$row['id']."'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
