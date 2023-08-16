<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header( 'HTTPs/1.0 403 Forbidden', TRUE, 403 );
    session_destroy();
}
session_start();
if ($_SESSION['authorized'] != true || $_SESSION['userName'] != 'ali') {
    echo 'You are not authorized to access this page.';
    session_destroy();
}
else
{
    echo "welcom ali";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin-left: 5px;
            padding: 0;
        }

        body {
            display: flex;
        }

        #fname,
        #lname,
        #address,
        #country,
        #userName,
        #password,
        #dep,
        #userimg,
        #captcha,
        #submit,
        #reset {
            margin-left: 80px;
            margin-top: 10px;
        }

        h2 {
            margin-left: 115px;
            margin-top: 10px;
        }

        .gender {
            margin-left: 70px;
        }

        .skills {
            margin-left: 80px;
        }

        h4 {
            margin-top: 10px;
            text-align: center;
        }

        .form {
            background-color: rgba(50, 50, 50, .3);
        }
    </style>
</head>

<body>
    <form action="data.php" class="form" method="POST" enctype="multipart/form-data">
        <label for="fname">First Name :</label>
        <input type="text" name="firstName" id="fname"> <br>
        <label for="lname">Last Name :</label>
        <input type="text" name="lastName" id="lname"> <br>
        <label for="address" style="display: inline-block; vertical-align:top; margin-top:10px">Address:</label>
        <textarea name="address" id="address" cols="30" rows="10" style="margin-left:60px"></textarea> <br>
        <label for="userimg">Your image</label>
        <input type="file" id="userimg" name="userimage"> <br>
        Country : <select class="form-select" id="country" name="country">
            <?php
            $countries = "Choose your country,Egypt,United States,Canada,Russia,Hndonesia,Japan,Morocco,Qatar,India,Brazil,England,Spain,Croatia,France,Portugal,Germany";
            $arrCountries = explode(",", $countries);
            foreach ($arrCountries as $country) :
                echo "<option value='$country'>$country</option>";
            endforeach;
            ?>
        </select> <br>
        <span>Gender:</span>
        <label><input type="radio" name="gender" value="male" class="gender">Male</label>
        <label><input type="radio" name="gender" value="female" class="gender">Female</label><br>
        <span style="display:inline-block ;margin-top:10px;">Skills : </span>
        <label><input type="checkbox" name="skills[]" value="PHP" class="skills">PHP</label>
        <label><input type="checkbox" name="skills[]" value="J2SE" class="skills">J2SE</label> <br>
        <label><input type="checkbox" name="skills[]" value="MYSQL" class="skills" style="margin-left: 129px;">MYSQL</label>
        <label><input type="checkbox" name="skills[]" value="PostgreeSQL" class="skills" style="margin-left: 54px;">PostgreeSQL</label> <br>
        <label for="userName">User Name</label>
        <input type="text" id="userName" name="username"> <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"> <br>
        <label for="dep">Department</label>
        <input type="text" name="department" id="dep"> <br>
        <h4>Please insert the code in the below box</h4>
        <h2>24WsdRf</h2>
        <input type="text" name="captcha" id="captcha"> <br>
        <input type="submit" id="submit" value="submit">
        <input type="reset" id="reset" name="reset">
    </form>
</body>

</html>