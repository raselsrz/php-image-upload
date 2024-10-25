<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>

<style>
	/* Center form on the page */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f5f5f5;
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Form container styling */
form {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

/* Label styling */
label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

/* Input field styling */
input[type="file"],
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
}

/* Button styling */
button[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Button hover effect */
button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Input focus effect */
input[type="file"]:focus,
input[type="text"]:focus {
    border-color: #007bff;
    outline: none;
}

</style>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
        <label>File</label>
        <input type="file" name="img" required><br><br>
        <label>File Name (optional)</label>
        <input type="text" name="js" placeholder="Enter file name without extension"><br><br>
        <button type="submit">Upload</button>
    </form>

</body>
</html>