<?php

    function test($str){
        $str = trim($str);
        $str = strip_tags($str);
        $str = stripslashes($str);
        return $str;
    }

    $usernameErr = $passwordErr = $nameErr = $emailErr = $genderErr = "";
    $about = "";
    $pets = $country = null;

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['username']) && !empty($_POST['username']) && $_POST['username'] == test($_POST['username']) && preg_match("/^[a-zA-Z]*$/",$_POST['username']) && strlen($_POST['username']) <= 40) {
            $username = $_POST['username'];
        } else {
            $usernameErr = "Incorrect Username!";
        }
        if (isset($_POST['password']) && !empty($_POST['password']) && $_POST['password'] == test($_POST['password']) && strlen($_POST['password']) <= 40 && strlen($_POST['password']) > 10) {
            $password = $_POST['password'];
        } else {
            $passwordErr = "Incorrect Password!";
        }
        if (isset($_POST['name']) && !empty($_POST['name']) && $_POST['name'] == test($_POST['name']) && preg_match("/^[a-zA-ZáéíóöőüűúÁÉÍÓÖŐÜŰÚ\s]*$/u",$_POST['name']) && strlen($_POST['name']) <= 40) {
            $name = $_POST['name'];
        } else {
            $nameErr = "Incorrect Name!";
        }
        if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $emailErr = "Incorrect Email!";
        }
        if (isset($_POST['about'])) {
            $about = $_POST['about'];
        }
        if (isset($_POST['gender']) && !empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $genderErr = "Incorrect Gender";
        }
        if (isset($_POST['pets'])) {
            $pets = $_POST['pets'];
        }
        if (isset($_POST['country'])) {
            $country = $_POST['country'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Form
        </title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><label for=""><input type="text" name="username"> * <?php echo "$usernameErr"?></label></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><label for=""><input type="password" name="password"> * <?php echo "$passwordErr"?></label></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><label for=""><input type="text" name="name"> *<?php echo "$nameErr"?></label></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><label for=""><input type="email" name="email"> *<?php echo "$emailErr"?></label></td>
                </tr>
                <tr>
                    <td>About me</td>
                    <td><label><textarea rows="5" cols="40" name="about"></textarea></label></td>
                </tr>
                <tr>
                    <td>Gender </td>
                    <td><label for=""><input type="radio" name="gender" value="man"> Man</label><br><label for=""><input type="radio" name="gender" value="women"> Women</label></td>
                </tr>
                <tr>
                    <td>Pets</td>
                    <td><label for=""><input type="checkbox" name="pets[]" value="dog"> Dog</label><br><label for=""><input type="checkbox" name="pets[]" value="cat"> Cat</label><br><label for=""><input type="checkbox" name="pets[]" value="fish"> Fish</label></td>
                </tr>
                <tr>
                    <td>Favorite countries: </td>
                    <td>
                        <select multiple="multiple" name="country[]" id="">
                            <option value="Hungary"> Hungary</option>
                            <option value="Japan"> Japan</option>
                            <option value="USA"> USA</option>
                            <option value="Germany"> Germany</option>
                            <option value="Serbia"> Serbia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><label for=""><input type="submit" value="Send"> </label></td>
                </tr>
            </table>
        </form>
        <br>
        <hr>
    </body>
</html>
<?php
    if(isset($username) && isset($password) && isset($name) && isset($email) && isset($gender)){
        echo "$username <br> $password <br> $name <br> $email <br> $about <br> $gender <br>";
        echo "<br>";
        foreach($pets as $value){
            echo "$value <br>";
        }
        echo "<br>";
        foreach($country as $value){
            echo "$value <br>";
        }
    }
?>
