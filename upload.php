<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Supported file extensions
$supported_extensions = ['png', 'jpeg', 'jpg', 'gif', 'js'];

// Check if a file is uploaded
if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {

    // File details
    $name = $_FILES['img']['name'];
    $temp_dir = $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];
    $type = $_FILES['img']['type'];

    // Extract the file extension
    $ext_array = explode('.', $name);
    $extension = strtolower(end($ext_array));

    // Check if the extension is supported
    if (!in_array($extension, $supported_extensions)) {
        echo 'Only .js, .png, .jpeg, .jpg, and .gif files are supported';
        exit();
    }

    // Set the upload directory
    $upload_dir = 'upload/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true); // Create directory if it doesn’t exist
    }

    // Define a new file name (if user provided one, or use original name without extension)
    $new_name = !empty($_POST['js']) ? $_POST['js'] . '.' . $extension : pathinfo($name, PATHINFO_FILENAME) . '.' . $extension;
    $new_dir = $upload_dir . $new_name;

    // Move uploaded file to the target directory
    if (move_uploaded_file($temp_dir, $new_dir)) {
        echo 'Upload successful';
    } else {
        echo 'File upload failed. Please try again.';
    }

} else {
    echo 'Please select a file first.';
}