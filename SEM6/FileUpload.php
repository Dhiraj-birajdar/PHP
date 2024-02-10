<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
<fieldset>
        <legend>File Upload</legend>
        <form action="FileUploadHandle.php" method="POST" enctype="multipart/form-data">
            File: <input type="file" name="doc" >
            <br><input type="submit" name="ok" value="Upload Image">
        </form>
    </fieldset>
</body>
</html>


