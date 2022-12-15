<?php
include '../../connection.php';
if (isset($_POST['title']) && $_POST['content']) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imageurl = $_POST['imageurl'];
    $query = "INSERT INTO `blogs` (`id`, `title`, `content`, `image_link`) VALUES (NULL, '$title', '$content', '$imageurl')";
    $exec = $conn->query($query);
    if ($exec) {
        echo "Success";
    } else {
        echo "Fail: database rollback";
    }
} else {
    echo "Fail: invalid parameters";
}
