<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Add user

    </button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.I. No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php
include 'connect.php';

$sql = "SELECT * FROM `crud_table`";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];

        echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td>
                <button><a href="update.php?updateid=' . $id . '">Update</a></button>
                <button><a href="delete.php?deleteid=' . $id . '">Delete</a></button>
            </td>
        </tr>';
    }
}
?>

       
        </tbody>
        

    </table>
    </div>
</body>
</html>