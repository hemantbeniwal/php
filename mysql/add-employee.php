<?php
require_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add employee</title>
</head>

<body>

    <form action="save-employee.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name: <span style="color:red;">*</span></td>
                <td><input type="text" name="name" maxlength="50" value="<?php echo $_SESSION["name"] ?? "" ?>">
                    <?php if (isset($_SESSION["name_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["name_error"];
                            unset($_SESSION["name_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>phone<span style="color:red;">*</span></td>
                <td><input type="tel" name="phone" value="<?= $_SESSION["phone"] ?? "" ?>" maxlength="15">
                    <?php if (isset($_SESSION["phone_error"])) { ?>
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
                <td>Email <span style="color:red;">*</span></td>
                <td><input type="email" name="email" value="<?= $_SESSION["email"] ?? "" ?>">
                    <?php if (isset($_SESSION["email_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["email_error"];
                            unset($_SESSION["email_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td>Gender<span style="color:red;">*</span></td>
                <td><input type="radio" name="gender" value="Male" <?= (($_SESSION["gender"] ?? NULL) == "Male") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female" <?= (($_SESSION["gender"] ?? NULL) == "Female") ? "checked" : "" ?> />Female
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
            <!-- <tr>
                <td>city<span style="color:red;">*</span></td>
                <td><input type="text" name="city" value="<?= $_SESSION["city"] ?? "" ?>" maxlength="50">
                    <?php if (isset($_SESSION["city_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["city_error"];
                            unset($_SESSION["city_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr> -->
            <tr>
                <td>fee<span style="color:red;">*</span></td>
                <td><input type="number" name="fee" value="<?= $_SESSION["fee"] ?? "" ?>" maxlength="10">
                    <?php if (isset($_SESSION["fee_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["fee_error"];
                            unset($_SESSION["fee_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td>total_salary<span style="color:red;">*</span></td>
                <td><input type="number" name="total_salary" value="<?= $_SESSION["total_salary"] ?? "" ?>"
                        maxlength="11">
                    <?php if (isset($_SESSION["total_salary_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["total_salary_error"];
                            unset($_SESSION["total_salary_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td>pin</td>
                <td><input type="number" name="pin" value="<?= $_SESSION["pin"] ?? "" ?>" maxlength="6">
                    <?php if (isset($_SESSION["pin_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["pin_error"];
                            unset($_SESSION["pin_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>&nbsp;
                    <input type="submit" value="save">
                </td>
            </tr>
        </table>

        <?php

    ?>
</body>

</html>