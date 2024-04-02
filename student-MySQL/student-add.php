<?php
require_once("student-config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <style>
        form {
            background: linear-gradient(to bottom, #33ccff 10%, #ff99cc 60%);
            
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
<?php require_once("student-massage.php"); ?>
    <form action="student-save.php" method="post">
        <table cellpadding="5" align="center">

            <tr>
                <td>Student Name:</td>
                <td>
                    <input type="text" name="student_name" maxlength="50" placeholder="Student Name"
                        value="<?php echo $_SESSION["student_name"] ?? null ?>">

                    <?php if (isset($_SESSION["student_name_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["student_name_error"];
                            unset($_SESSION["student_name_error"]);
                            ?>
                        </span>

                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="emailid" placeholder="Email"
                        value="<?php echo $_SESSION["emailid"] ?? null ?>">
                    <?php if (isset($_SESSION["emailid_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["emailid_error"];
                            unset($_SESSION["emailid_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="tel" name="mobile_number" maxlength="10" placeholder="Mobile Number"
                        value="<?php echo $_SESSION["mobile_number"] ?? null ?>">

                    <?php if (isset($_SESSION["mobile_number_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["mobile_number_error"];
                            unset($_SESSION["mobile_number_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" <?php echo (($_SESSION["gender"] ?? null) == "male") ? "checked" : null ?>>Male
                    &nbsp;&nbsp;
                    <input type="radio" name="gender" value="female" <?php echo (($_SESSION["gender"] ?? null) == "female") ? "checked" : null ?>>Female
                    &nbsp;&nbsp;
                    <input type="radio" name="gender" value="other" <?php echo (($_SESSION["gender"] ?? null) == "other") ? "checked" : null ?>>Other
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
                <td>Date of Birth(DOB):</td>
                <td>
                    <input type="date" name="dob" value="<?= $_SESSION["dob"] ?? null ?>">
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
                <td>Address:</td>
                <td><textarea name="address" rows="5" cols="" maxlength="50"
                        placeholder="Enter Your Address......"><?php echo $_SESSION["address"] ?? null ?></textarea>
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
                <td>City:</td>
                <td><input type="text" name="city" maxlength="50" placeholder="City Name"
                        value="<?php echo $_SESSION["city"] ?? null ?>">
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
                <td>Pin Code:</td>
                <td><input type="number" name="pincode" maxlength="6" placeholder="Pin Code"
                        value="<?php echo $_SESSION["pincode"] ?? null ?>">
                    <?php if (isset($_SESSION["pincode_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["pincode_error"];
                            unset($_SESSION["pincode_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>State:</td>
                <td><input type="text" name="state" maxlength="50" placeholder="State Name"
                        value="<?php echo $_SESSION["state"] ?? null ?>">
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
                <td>Country:</td>
                <td><input type="text" name="country" maxlength="50" placeholder="Country Name"
                        value="<?php echo $_SESSION["country"] ?? null ?>">
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
                <td>Hobbies:</td>
                <td>
                    <?php
                        $hobbies = explode(",", ($_SESSION["hobbies"]??""));
                    ?>
                    <input type="checkbox" name="hobbies[]" value="drawing" <?php echo (in_array("drawing", ($hobbies ?? []))) ? "checked" : null ?>>Drawing
                    <input type="checkbox" name="hobbies[]" value="singing" <?php echo (in_array("singing", ($hobbies ?? []))) ? "checked" : null ?>>Singing
                    <input type="checkbox" name="hobbies[]" value="dancing" <?php echo (in_array("dancing", ($hobbies ?? []))) ? "checked" : null ?>>Dancing
                    <input type="checkbox" name="hobbies[]" value="sketching" <?php echo (in_array("sketching", ($hobbies ?? []))) ? "checked" : null ?>>Sketching<br>
                    <input type="checkbox" name="hobbies[]" value="others" <?php echo (in_array("others", ($hobbies ?? []))) ? "checked" : null; ?>>Others
                    <input type="text" name="other_hobbies" placeholder="Ex-Teaching">
                    <?php if (isset($_SESSION["hobbies_error"])) { ?>
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
                <td>Qualification:</td>
                <td>
                    <?php
                        $qualification = explode(",", ($_SESSION["qualification"]??""));
                    ?>
                    <input type="checkbox" name="qualification[]" value="high_School" <?php echo (in_array("high_School", ($qualification ?? []))) ? "checked" : null ?>>High
                    School(10th)<br>
                    <input type="checkbox" name="qualification[]" value="higher_school" <?php echo (in_array("higher_school", ($qualification ?? []))) ? "checked" : null ?>>Higher
                    School(12th)<br>
                    <input type="checkbox" name="qualification[]" value="graduation" <?php echo (in_array("graduation", ($qualification ?? []))) ? "checked" : null ?>>Graduation(Bachelors)<br>
                    <input type="checkbox" name="qualification[]" value="post_graduation" <?php echo (in_array("post_graduation", ($qualification ?? []))) ? "checked" : null ?>>Post
                    Graduation(Masters)<br>
                    <input type="checkbox" name="qualification[]" value="phd" <?php echo (in_array("phd", ($qualification ?? []))) ? "checked" : null ?>>PHD
                    <?php if (isset($_SESSION["qualification_error"])) { ?>
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
                <td>Courses Applied For:</td>
                <td><input type="radio" name="course_applied" value="b.ca" <?php echo (($_SESSION["course_applied"] ?? null) == "b.ca") ? "checked" : null ?>>BCA(Bachelors of Coumpter Applications)<br>
                    <input type="radio" name="course_applied" value="b.com" <?php echo (($_SESSION["course_applied"] ?? null) == "b.com") ? "checked" : null ?>>B.Com(Bachelors of Commerce)<br>
                    <input type="radio" name="course_applied" value="b.sc" <?php echo (($_SESSION["course_applied"] ?? null) == "b.sc") ? "checked" : null ?>>B.Sc(Bachelors of Science)<br>
                    <input type="radio" name="course_applied" value="b.a" <?php echo (($_SESSION["course_applied"] ?? null) == "b.a") ? "checked" : null ?>>B.A(Bachelors of Arts)<br>
                    <input type="radio" name="course_applied" value="m.ca" <?php echo (($_SESSION["course_applied"] ?? null) == "m.ca") ? "checked" : null ?>>MCA(Master of Coumpter Applications)<br>
                    <input type="radio" name="course_applied" value="m.com" <?php echo (($_SESSION["course_applied"] ?? null) == "m.com") ? "checked" : null ?>>M.Com(Master of Commerce)<br>
                    <input type="radio" name="course_applied" value="m.sc" <?php echo (($_SESSION["course_applied"] ?? null) == "m.sc") ? "checked" : null ?>>M.Sc(Master of Science)<br>
                    <input type="radio" name="course_applied" value="m.a" <?php echo (($_SESSION["course_applied"] ?? null) == "m.a") ? "checked" : null ?>>M.A(Master of Arts)<br>
                    <?php if (isset($_SESSION["course_applied_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["course_applied_error"];
                            unset($_SESSION["course_applied_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="reset">Reset</button>`&nbsp;`
                    <input type="Submit" value="Save">
                </td>
            </tr>


        </table>
    </form>
    <?php
    unset($_SESSION["student_name"]);
    unset($_SESSION["emailid"]);
    unset($_SESSION["mobile_number"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["dob"]);
    unset($_SESSION["address"]);
    unset($_SESSION["city"]);
    unset($_SESSION["pincode"]);
    unset($_SESSION["state"]);
    unset($_SESSION["country"]);
    unset($_SESSION["hobbies"]);
    unset($_SESSION["qualification"]);
    unset($_SESSION["course_applied"]);
    ?>


</body>

</html>