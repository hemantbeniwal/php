<?php
require_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h3>Add student</h3>
    <form action="student-save.php" method="post">
        <table>

            <tr>
                <td>Name</td>
                <td><input type="name" name="name" value="<?php echo $_SESSION["name"] ?? "" ?>">
                    <?php
                    if (isset($_SESSION["name_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["name_error"];
                            unset($_SESSION["name_error"]);
                            ?>
                        </span>
                    <?php }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $_SESSION["email"] ?? "" ?>">
                    <?php
                    if (isset($_SESSION["email_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["email_error"];
                            unset($_SESSION["email_error"]);
                            ?>
                        </span>
                    <?php }
                    ?>

                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="M" <?= (($_SESSION["gender"] ?? NULL) == "M") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="F" <?= (($_SESSION["gender"] ?? NULL) == "F") ? "checked" : "" ?> />Female
                    <?php if (isset($_SESSION["gender_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["gender_error"];
                            unset($_SESSION["gender_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="tel" name="phone" value="<?= (($_SESSION["phone"] ?? "")) ?>">
                    <?php
                    if (isset($_SESSION["phone_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["phone_error"];
                            unset($_SESSION["phone_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" cols="30" rows="10" <?= (($_SESSION["address"] ?? "")) ?>></textarea>
                    <?php
                    if (isset($_SESSION["address_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["address_error"];
                            unset($_SESSION["address_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>

            <tr>
                <td></td>
                <td><button type="reset">reset </button>
                    <button type="submit">submit</button>
                </td>
            </tr>
        </table>

    </form>
    <?php
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["phone"]);
    unset($_SESSION["addre"]);

    ?>
</body>

</html>