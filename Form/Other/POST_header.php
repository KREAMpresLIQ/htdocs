<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST FORM</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td> <label><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><label><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><label><input type="submit" value="Send"></td>
        </tr>
    </table>
</form>
</body>
</html>
