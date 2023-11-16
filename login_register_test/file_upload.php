<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST["upload"])) {
    $userId = $_SESSION["user"];

    // Check if the user directory exists, create it if not
    $userDir = "uploads/user_$userId";
    if (!file_exists($userDir)) {
        mkdir($userDir, 0777, true);
    }

    // Define the upload path
    $uploadPath = $userDir . '/';

    // Check if the file was uploaded without errors
    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $fileName = basename($_FILES["file"]["name"]);
        $fileSize = $_FILES["file"]["size"];

        // Check file size (50MB limit)
        if ($fileSize <= 50 * 1024 * 1024) {
            $destination = $uploadPath . $fileName;

            // Move the uploaded file to the destination
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $destination)) {
                echo "<div class='alert alert-success'>File uploaded successfully.</div>";
            } else {
                echo "<div class='alert alert-danger'>Error uploading file.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>File size exceeds the limit of 50MB.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Error: " . $_FILES["file"]["error"] . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="file_upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Select File:</label>
                <input type="file" name="file" class="form-control" accept=".pdf, .doc, .docx, .txt">
            </div>
            <div class="form-btn">
                <input type="submit" value="Upload" name="upload" class="btn btn-primary">
            </div>
        </form>
        <div><p><a href="logout.php">Logout</a></p></div>
    </div>
</body>
</html>
