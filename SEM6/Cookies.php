<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<fieldset>
        <legend>Cookies</legend>
        <form name='form' action="CookiesHandle.php" method="POST">
            Background:     
        <select name="bg" >
                <option value="pink">pink</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="yellow">yellow</option>
            </select> <br>
            Text color: 
            <select name="fg" >
                <option value="pink">pink</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="yellow">yellow</option>
            </select>
            <br><input type="submit" name="color" value="Change">
        </form>
    </fieldset>
<fieldset>
        <legend>Cookies2</legend>
        <form name='form' action="CookiesHandle.php" method="POST">
            Name: <input type="text" name="name"> <br>
            userName: <input type="text" name="username" value=""> <br>
            password: <input type="password" name="pass"> <br>
            <br><input type="submit" name="ok" value="Submit">
        </form>
    </fieldset>
</body>
</html>