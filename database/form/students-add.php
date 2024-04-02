<?php

require_once( "");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students add</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h3>student add</h3>
    <form action="students-save.php" method ="post">
        <table>
        <tr>
                <td>First Name: <span style="color:red;">*</span></td>
                <td><input type="name" name="first_name" maxlength="50"
                        value="<?php echo $_SESSION["first_name"] ?? "" ?>">(Max 50 Characters Allowed)
                    <?php if (isset($_SESSION["first_name_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["first_name_error"];
                            unset($_SESSION["first_name_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Last Name<span style="color:red;">*</span></td>
                <td><input type="name" name="last_name" maxlength="50" value="<?= $_SESSION["last_name"] ?? "" ?>">(Max
                    50 Characters Allowed)
                    <?php if (isset($_SESSION["last_name_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["last_name_error"];
                            unset($_SESSION["last_name_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Email ID <span style="color:red;">*</span></td>
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
                <td>Mobile Number <span style="color:red;">*</span></td>
                <td><input type="tel" name="phone_number" value="<?= $_SESSION["phone_number"] ?? "" ?>"
                        maxlength="10">(Max 10 Digits Allowed)
                    <?php if (isset($_SESSION["phone_number_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["phone_number_error"];
                            unset($_SESSION["phone_number_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td>Gender<span style="color:red;">*</span></td>
                <td><input type="radio" name="gender" value="M" <?= (($_SESSION["gender"] ?? NULL) == "M") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="F" <?= (($_SESSION["gender"] ?? NULL) == "F") ? "checked" : "" ?> />Female
                    <?php if(isset($_SESSION["gender_error"])) {?>
                        <span class ="error">
                            <?php
                            echo $_SESSION["gender_error"];
                            unset($_SESSION["gender_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Date Of Birth<span style="color:red;">*</span></td>
                <td><input type="date" name="dob" value="<?= $_SESSION["dob"] ?? "" ?>">
                    <?php if (isset($_SESSION["dob_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["dob_error"];
                            unset($_SESSION["dob_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Address<span style="color:red;">*</span></td>
                <td><textarea name="address" rows="5" cols="20"><?= $_SESSION["address"] ?? "" ?></textarea>
                <?php if (isset($_SESSION["address_error"])) { ?>
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
                <td>City<span style="color:red;">*</span></td>
                <td><input type="name" name="city" maxlength="50" value="<?= $_SESSION["city"] ?? "" ?>">(Max 50
                    Characters Allowed)
                    <?php if (isset($_SESSION["city_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["city_error"];
                            unset($_SESSION["city_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Pin Code<span style="color:red;">*</span> </td>
                <td><input type="text" name="pin_code" value="<?= $_SESSION["pin_code"] ?? "" ?>" maxlength="6">(Max 6
                    Digits
                    Allowed)
                    <?php if (isset($_SESSION["pin_code_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["pin_code_error"];
                            unset($_SESSION["pin_code_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>State <span style="color:red;">*</span></td>
                <td><input type="name" name="state" maxlength="50" value="<?= $_SESSION["state"] ?? "" ?>">(Max 50
                    Characters Allowed)
                    <?php if (isset($_SESSION["state_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["state_error"];
                            unset($_SESSION["state_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Country <span style="color:red;">*</span></td>
                <td><input type="name" name="country" value="<?= $_SESSION["country"] ?? "" ?>">
                    <?php if (isset($_SESSION["country_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["country_error"];
                            unset($_SESSION["country_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <?php
                    $hobbies = explode(",", $_SESSION['hobbies']);
                ?> 
                <td><input type="checkbox" name="hobbies[]" value="drowing" <?= (in_array("drowing", ($hobbies ?? []))) ? "checked" : ""; ?>>Drowing
                    <input type="checkbox" name="hobbies[]" value="singing" <?= (in_array("singing", ($hobbies ?? []))) ? "checked" : ""; ?>>Singing
                    <input type="checkbox" name="hobbies[]" value="dancing" <?= (in_array("dancing", ($hobbies ?? []))) ? "checked" : ""; ?>>Dancing
                    <input type="checkbox" name="hobbies[]" value="sketching" <?= (in_array("sketching", ($hobbies ?? []))) ? "checked" : ""; ?>>Sketching<br>
                    <input type="checkbox" name="hobbies[]" value="other" <?= (in_array("other", ($hobbies ?? []))) ? "checked" : ""; ?>>other
                    <input type="text" name="other_hobbies" value="<?= $_SESSION["other_hobbies"] ?? "" ?>" maxlength="50"
                        placeholder="Ex-Teaching" >(Max 50 Characters
                    Allowed)
                    <?php if(isset($_SESSION["hobbies_error"])) {?>
                        <span class="error">
                            <?php
                            echo $_SESSION["hobbies_error"];
                            unset($_SESSION["hobbies_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Qualification</td>
                <?php
                    $qualification = explode(",", $_SESSION['qualification']);
                ?>
                <td><input type="checkbox" name="qualification[]" value="high_school(10th)"
                        <?= (in_array("high_school(10th)", ($qualification ?? []))) ? "checked" : ""; ?>>High
                    School(10th)<br>
                    <input type="checkbox" name="qualification[]" value="high_school(12th)"
                        <?= (in_array("high_school(12th)", ($qualification ?? []))) ? "checked" : ""; ?>>High
                    School(12th)<br>
                    <input type="checkbox" name="qualification[]" value="graduation(bachelors)"
                        <?= (in_array("graduation(bachelors)", ($qualification ?? []))) ? "checked" : ""; ?>>Graduation(Bachelors)<br>
                    <input type="checkbox" name="qualification[]" value="post_graduation(masters)"
                        <?= (in_array("post_graduation(masters)", ($qualification ?? []))) ? "checked" : ""; ?>>Post
                    Graduation(Masters)<br>
                    <input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd", ($qualification ?? []))) ? "checked" : ""; ?>>Phd
                    <?php if(isset($_SESSION["qualification_error"])) {?>
                        <span class="error">
                            <?php
                            echo $_SESSION["qualification_error"];
                            unset($_SESSION["qualification_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Courses 
                    Applied For</td>
                <td><input type="radio" name="courses" value="bca" <?= (($_SESSION["courses"] ?? NULL) == "bca") ? "checked" : "" ?>>BCA(Bachelor of Computer Applications)<br>
                    <input type="radio" name="courses" value="bcom" <?= (($_SESSION["courses"] ?? NULL) == "bcom") ? "checked" : "" ?>>B.Com(Bachelor of Commerce)<br>
                    <input type="radio" name="courses" value="bsc" <?= (($_SESSION["courses"] ?? NULL) == "bsc") ? "checked" : "" ?>>B.Sc(Bachelore of Science)<br>
                    <input type="radio" name="courses" value="ba" <?= (($_SESSION["courses"] ?? NULL) == "ba") ? "checked" : "" ?>> BA(Bachelor of Arts)<br>
                    <input type="radio" name="courses" value="mca" <?= (($_SESSION["courses"] ?? NULL) == "mca") ? "checked" : "" ?>>MCA(Master of Computer Applications)<br>
                    <input type="radio" name="courses" value="mcom" <?= (($_SESSION["courses"] ?? NULL) == "mca") ? "checked" : "" ?>>M.Com(Master of Commerce)<br>
                    <input type="radio" name="courses" value="msc" <?= (($_SESSION["courses"] ?? NULL) == "msc") ? "checked" : "" ?>>M.Sc(Master of Science)<br>
                    <input type="radio" name="courses" value="ma" <?= (($_SESSION["courses"] ?? NULL) == "ma") ? "checked" : "" ?>>MA(Master of Arts)
                    <?php if(isset($_SESSION["courses_error"])) {?>
                        <span class="error">
                            <?php
                            echo $_SESSION["courses_error"];
                            unset($_SESSION["courses_error"]);
                            ?>
                        </span>
                    <?php } ?>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="reset">Reset</button>&nbsp;
                    <input type="submit" value="Submit">
                </td>
            </tr> 
        </table>
    </form>
    <?php
    
    unset($_SESSION["first_name"]);
    unset($_SESSION["last_name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["mobile_number"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["address"]);
    unset($_SESSION["city"]);
    unset($_SESSION["pin_code"]);
    unset($_SESSION["state"]);
    unset($_SESSION["country"]);
    unset($_SESSION["hobbies"]);
    unset($_SESSION["other_hobbies"]);
    unset($_SESSION["qualification"]);
    unset($_SESSION["course"]);




    

    ?>
</body>
</html>