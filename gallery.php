<?php
session_start();

error_reporting(0);

include "db.php";

$message = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $filename = $_FILES["upload_file"]["name"];
    $temp_name = $_FILES["upload_file"]["tmp_name"];
    $folder = "./img/gallery/" . $filename;

    $sql = "INSERT INTO images (file_name) VALUES ('$filename')";

    try {
        if (!empty($filename) && move_uploaded_file($temp_name, $folder)) {
            mysqli_query($link, $sql);
            $message = "Image uploaded successfully!";
        } else {
            $message = "Failed to upload image!";
        }
    } catch (mysqli_sql_exception $e) {
        $message = "Image is already in the database!";
    }
}

// If delete button is clicked ...
if (isset($_POST['delete'])) {
    $img_id = $_POST['img_id'];

    $sql = "SELECT file_name FROM images WHERE img_id=$img_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $filename = $row['file_name'];

    $filepath = "./img/gallery/" . $filename;

    $query = "DELETE FROM images WHERE img_id=$img_id";
    if (mysqli_query($link, $query) && unlink($filepath)) {
        $message = "Image successfully deleted!";
    } else {
        $message = "Error while deleting!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include "menu.php" ?>

<div class="container">
    <?php
    if (isset($_SESSION['user'])) {
        ?>
        <div id="upload-section">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="file" name="upload_file" id="upload"/>
                <button type="submit" name="upload">UPLOAD</button>

                <div class="message"><?php if (isset($message)) echo $message; ?></div>
            </form>
        </div>
        <?php
    }
    ?>

    <div class="display-section">
        <?php
        $query = "SELECT * FROM images ORDER BY img_id";
        $result = mysqli_query($link, $query);

        while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <div class="image-wrapper">
                <img id="gallery-img" src="./img/gallery/<?php echo $data['file_name']; ?>" alt=""
                     onclick="document.getElementById('overlay-img').src = this.src; document.getElementById('overlay').style.display = 'flex';">
                <?php
                if (isset($_SESSION['user'])) {
                    ?>
                    <form method="POST" action="">
                        <input type="hidden" name="img_id" value="<?php echo $data['img_id']; ?>">
                        <button class="delete-btn" type="submit" name="delete">DELETE</button>
                    </form>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include "copyright.php" ?>

<div class="overlay" id="overlay">
    <span class="close-btn" onclick="document.getElementById('overlay').style.display = 'none';">&times;</span>
    <img src="" alt="Overlay Image" id="overlay-img">
</div>
</body>
</html>
