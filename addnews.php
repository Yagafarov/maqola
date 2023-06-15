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
            $mavzu = $_POST['mavzu'];
            $imageUr = $_FILES['image'];
            $content = $_POST['content'];
            $imageUrl = $imageUr['tmp_name'];
            $imageName = $file['name'];
            // Perform any necessary validation or sanitization of the input data

            // Prepare the SQL statement
            $sql = "INSERT INTO yangiliklar (header,content,image) VALUES (?, ?, ?)";
            $stmt = $ulanish->prepare($sql);

            if ($stmt === false) {
                die('<div class="alert alert-danger position-absolute justify-content-center">Error preparing the statement: ' . $ulanish->error . "</div> <a href='./index.php' class='btn btn-danger float-end'>Chiqish</a>");
            }

            // Bind the parameters and execute the statement
            $stmt->bind_param("sss", $mavzu, $content, $imageUrl);

            if ($stmt->execute()) {
                $uploadDir = 'uploads/';
                $targetFilePath = $uploadDir.$imageName;
                move_uploaded_file($imageUrl, $targetFilePath);
                echo "<div class='alert alert-success position-absolute justify-content-center'>Yangilik yaratildi <br><a href='./admin.php' class='btn btn-danger float-end'>Chiqish</a></div>";
            } else {
                echo "<div class='alert alert-danger position-absolute justify-content-center'>Error adding the post: " . $stmt->error . " <a href='./index.php' class='btn btn-danger float-end'>Chiqish</a></div>";
            }

            // Close the statement and the database connection
            $stmt->close();
            $ulanish->close();
        }
        ?>
    </div>
</body>

</html>
