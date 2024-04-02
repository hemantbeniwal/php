<?php
require_once("config.php");

$id = $_GET['id'] ?? 0;

if ($id) {
    $selQuery = "SELECT * FROM `student` WHERE id=$id";
    $studentsrec = $con->query($selQuery);
    if (!$studentsrec->num_rows) {
        $_SESSION['error'] = "somethig wrong with id..";
        header("location: student-list.php");
        exit();
    }
    $_student = mysqli_fetch_assoc($studentsrec);

} else {
    $_SESSION["error"] = "something wrong...";
    header("location: student-list.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Student</title>
    <style>
        .error {
            color: red:
        }
    </style>
</head>

<body>
    <h3>Update Stydent</h3>
    <?php require_once("message.php"); ?>
    <form action="student-update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_student["id"]; ?>">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $_student["name"] ?? ""; ?>">
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
                <td><input type="email" name="email" value="<?php echo $_student["email"] ?? "" ?>">
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
                <td><input type="radio" name="gender" value="Male" <?= (($_student["gender"] ?? NULL) == "M") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female" <?= (($_student["gender"] ?? NULL) == "F") ? "checked" : "" ?> />Female
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
                <td><input type="tel" name="phone" value="<?= (($_student["phone"] ?? "")) ?>">
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
               
                <td><textarea name="address" cols="30" rows="10"><?= (($_student["address"] ?? "")) ?></textarea>
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
                

            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>