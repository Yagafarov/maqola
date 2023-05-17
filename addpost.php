<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container py-5">
<?php
include('./config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $muallif = $_POST['muallif'];
    $familiya = $_POST['familiya'];
    $email = $_POST['email'];
    $mavzu = $_POST['mavzu'];
    $content = $_POST['content'];

    // Perform any necessary validation or sanitization of the input data

    // Prepare the SQL statement
    $sql = "INSERT INTO postlar (ism, familiya, email, header, content) VALUES (?, ?, ?, ?, ?)";
    $stmt = $ulanish->prepare($sql);

    if ($stmt === false) {
        die('<div class="alert alert-danger position-absalute justify-content-center">Error preparing the statement: ' . $ulanish->error."</div> <a href='./index.php' class='btn btn-danger float-end '>Chiqish</a>");
    }

    // Bind the parameters and execute the statement
    $stmt->bind_param("sssss", $muallif, $familiya, $email, $mavzu, $content);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success positiobn-absalute justify-content-center'>Bosh yaratildi <a href='./index.php' class='btn btn-danger float-end'>Chiqish</a></div>";
    } else {
        echo "<div class='alert alert-danger position-absalute justify-content-center'>Error adding the post: " . $stmt->error." <a href='./index.php' class='btn btn-danger float-end'>Chiqish</a></div>";
    }

    // Close the statement and the database connection
    $stmt->close();
    $ulanish->close();
}
?>
</div>
</body>

</html>