<?php
require_once 'config.php';
if (!isset($_SESSION['userData'])) {
    header('location: index.php');
}

if (!empty($_FILES['image'])) {
    $userId = $_SESSION['userData']['id'];
    $src = $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    $output_dir = "uploads/" . $filename;
    if (move_uploaded_file($src, $output_dir)) {
        $insert = $conn->query("INSERT uploading (user_id,file_name, file_path) VALUES ('".$userId."','".$filename."','".$output_dir."')");
        var_dump($insert);exit;

        if ($insert) {
            $response['status'] = 1;
            $response['message'] = 'Form data submitted successfully!';
            return $response;
        }
    } else {
        echo "Error! Image upload failed! File: " . $filename;
    };
    echo "\n<br>";
}
