<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form page</title>
    <style>
        form{
            background-color: rgb(225, 249, 255);
            border: dotted;
        }
    </style>
</head>
<body>
    <form action="">
        <table cellpadding="10">
            <tr>
                <td>first name <span style="color:red">*</span></td>
                <td><input type="name" name= "first_name" maxlength="50"
                value="<?php echo $_SESSION["first_name"]?? ""?>">
                <?php
                if(isset($_SESSION["first_name_error"])) {?>
                <span class="error">
                    <?php
                    echo $_SESSION["first_name_error"];
                    ?>
                </span>
                <?php } ?>
            </td>
            </tr>
            <tr>
                <td>last name</td>
                <td><input type="name" name= "last_name" maxlength="50">(Max 50 Characters Allowed)</td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name= "email" maxlength="50"></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="tel" name= "phone" maxlength="10">(Max 10 Digits Allowed)</td>
            </tr>  
            <tr>
                <td></td>
                <td><button type="reset">Reset</button>&nbsp;
                    <button type="submit">submit</button>
                </td>
            </tr> 
        </table>
    </form>
    <?php
     unset($_SESSION["first_name"]);
    ?>
</body>
</html>