<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<fieldset>
        <legend>Form Validation</legend>
        <form name='form' action="FormValidationHandle.php" method="POST">
            Name: <input type="text" name="name"> <br>
            userName: <input type="text" name="username" value=""> <br>
            password: <input type="password" name="pass"> <br>
            <br><input type="submit" name="ok" value="Submit">
        </form>
    </fieldset>
</body>
</html>