<?php
include 'config.php';

if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    $header = $_POST['header'];
    $description = $_POST['description'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

    $sql = "INSERT INTO main_page (header, description, image) VALUES ('$header', '$description', '$folder')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        header("Location: main_page.php");
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
