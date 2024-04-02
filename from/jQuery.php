<?php
session_start();

?>
<!DOCTYPe html>
<html>

<head>

    <title>form page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        form {
            background: linear-gradient(to bottom, #33ccff 100%, #ff99cc 0%);
            border: 2px dashed black;
        }

        .error {
            color: red;
        }

        .green-border {
            border-color: green;
        }

        .red-border {
            border-color: red;
        }
    </style>

</head>

<body>
    <form action="jQuery_save.php" method="post" enctype="multipart/form-data" id="form">
        <table cellpadding="10">
            <tr>
                <td>First Name: <span style="color:red;">*</span></td>
                <td><input type="text" name="first_name" id="first_name" maxlength="50"
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
                <td><input type="text" name="last_name" id="last_name" maxlength="50"
                        value="<?= $_SESSION["last_name"] ?? "" ?>">(Max
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
                <td><input type="email" name="email" id="email" value="<?= $_SESSION["email"] ?? "" ?>">
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
                <td><input type="tel" name="mobile_number" id="mobile_number"
                        value="<?= $_SESSION["mobile_number"] ?? "" ?>" maxlength="10">(Max 10 Digits Allowed)
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
                <td>Gender<span style="color:red;">*</span></td>
                <td><input type="radio" name="gender" value="Male" id="Male" <?= (($_SESSION["gender"] ?? NULL) == "Male") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female" id="Female" <?= (($_SESSION["gender"] ?? NULL) == "Female") ? "checked" : "" ?> />Female
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
                <td>Date_of_Birth<span style="color:red;">*</span></td>
                <td><select name="dob_day">
                        <option value="">Day</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) { ?>
                            <option value='<?= $i ?>' <?= ($_SESSION["dob_day"] ?? null) == $i ? "selected" : " " ?>>
                                <?php echo $i ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select name="dob_month">
                        <option value=" ">Month</option>
                        <?php
                        $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                        foreach ($months as $month) { ?>
                            <option value='<?= $month ?>' <?= ($_SESSION["dob_month"] ?? null) == $month ? "selected" : " " ?>>
                                <?php echo $month ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select name="dob_year">
                        <option value="">Year</option>
                        <?php
                        for ($i = 1940; $i <= date('Y'); $i++) { ?>
                            <option value='<?= $i ?>' <?= ($_SESSION["dob_year"] ?? null) == $i ? "selected" : " " ?>>
                                <?php echo $i ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php if (isset($_SESSION["dob_year_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["dob_year_error"];
                            unset($_SESSION["dob_year_error"]);
                            ?>
                        </span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Address<span style="color:red;">*</span></td>
                <td><textarea name="address" rows="5" cols="20"
                        id="address"><?= $_SESSION["address"] ?? "" ?></textarea>
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
                <td><input type="name" name="city" maxlength="50" id="city" value="<?= $_SESSION["city"] ?? "" ?>">(Max
                    50
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
                <td><input type="text" name="pin_code" id="pin_code" value="<?= $_SESSION["pin_code"] ?? "" ?>"
                        maxlength="6">(Max 6
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
                <td><input type="name" name="state" maxlength="50" id="state"
                        value="<?= $_SESSION["state"] ?? "" ?>">(Max 50
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
                <td><input type="name" name="country" id="country" value="<?= $_SESSION["country"] ?? "" ?>">
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
                <td><input type="checkbox" name="hobbies[]" id="Hobbies" value="drowing" <?= (in_array("drowing", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Drowing
                    <input type="checkbox" name="hobbies[]" value="singing" <?= (in_array("singing", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Singing
                    <input type="checkbox" name="hobbies[]" value="dancing" <?= (in_array("dancing", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Dancing
                    <input type="checkbox" name="hobbies[]" value="sketching" <?= (in_array("sketching", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>Sketching<br>
                    <input type="checkbox" name="hobbies[]" value="other" <?= (in_array("other", ($_SESSION['hobbies'] ?? []))) ? "checked" : ""; ?>>other
                    <input type="text" name="other_hobbies" value="<?= $_SESSION["other_hobbies"] ?? "" ?>"
                        maxlength="50" placeholder="Ex-Teaching">(Max 50 Characters
                    Allowed)
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
                <td>Qualification</td>
                <td><input type="checkbox" name="qualification[]" value="high_school(10th)"
                        <?= (in_array("high_school(10th)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>High
                    School(10th)<br>
                    <input type="checkbox" name="qualification[]" value="high_school(12th)"
                        <?= (in_array("high_school(12th)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>High
                    School(12th)<br>
                    <input type="checkbox" name="qualification[]" value="graduation(bachelors)"
                        <?= (in_array("graduation(bachelors)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>Graduation(Bachelors)<br>
                    <input type="checkbox" name="qualification[]" value="post_graduation(masters)"
                        <?= (in_array("post_graduation(masters)", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>Post
                    Graduation(Masters)<br>
                    <input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd", ($_SESSION['qualification'] ?? []))) ? "checked" : ""; ?>>Phd
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
                <td>Courses Applied For</td>
                <td><input type="radio" name="course" value="bca" <?= (($_SESSION["course"] ?? NULL) == "bca") ? "checked" : "" ?>>BCA(Bachelor of Computer Applications)<br>
                    <input type="radio" name="course" value="bcom" <?= (($_SESSION["course"] ?? NULL) == "bcom") ? "checked" : "" ?>>B.Com(Bachelor of Commerce)<br>
                    <input type="radio" name="course" value="bsc" <?= (($_SESSION["course"] ?? NULL) == "bsc") ? "checked" : "" ?>>B.Sc(Bachelore of Science)<br>
                    <input type="radio" name="course" value="ba" <?= (($_SESSION["course"] ?? NULL) == "ba") ? "checked" : "" ?>> BA(Bachelor of Arts)<br>
                    <input type="radio" name="course" value="mca" <?= (($_SESSION["course"] ?? NULL) == "mca") ? "checked" : "" ?>>MCA(Master of Computer Applications)<br>
                    <input type="radio" name="course" value="mcom" <?= (($_SESSION["course"] ?? NULL) == "mca") ? "checked" : "" ?>>M.Com(Master of Commerce)<br>
                    <input type="radio" name="course" value="msc" <?= (($_SESSION["course"] ?? NULL) == "msc") ? "checked" : "" ?>>M.Sc(Master of Science)<br>
                    <input type="radio" name="course" value="ma" <?= (($_SESSION["course"] ?? NULL) == "ma") ? "checked" : "" ?>>MA(Master of Arts)
                    <?php if (isset($_SESSION["course_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["course_error"];
                            unset($_SESSION["course_error"]);
                            ?>
                        </span>
                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="reset">Reset</button>&nbsp;
                    <button type="submit" id="submit">submit</button>
                </td>
            </tr>
        </table>
    </form>
    <script>
        $(document).ready(function () {
            $("#form").submit(function (p) {

                firstname = $("#first_name").val();
                lastname = $("#last_name").val();
                emailname = $("#email").val();
                mobile_number = $("#mobile_number").val();
                emailname = $("#email").val();
                gender_male = $("#male").val();
                gender_female = $("#female").val();
                address = $("#address").val();
                city = $("#city").val();
                pin_code = $("#pin_code").val();
                state = $("#state").val();
                country = $("#country").val();
                Hobbies = $("#Hobbies").val();
                isError = false;
                if (firstname == "") {
                    isError = true;
                    $("#first_name").addClass("green-border");
                }
                if (lastname == "") {
                    isError = true;
                    $("#last_name").addClass("green-border");
                    if (mobile_number == "") {
                        isError = true;
                        $("#mobile_number").addClass("green-border");
                    }
                    if (emailname == "") {
                        isError = true;
                        $("#email").addClass("green-border");
                    }
                }
                if (gender_male == "") {
                    isError = true;
                    $("#gender").addClass("green-border");
                }
                if (address == "") {
                    isError = true;
                    $("#address").addClass("green-border");
                }
                if (city == "") {
                    isError = true;
                    $("#city").addClass("green-border");
                }
                if (pin_code == "") {
                    isError = true;
                    $("#pin_code").addClass("green-border");
                }
                if (state == "") {
                    isError = true;
                    $("#state").addClass("green-border");
                }
                if (country == "") {
                    isError = true;
                    $("#country").addClass("green-border");
                }
                if (Hobbies == "") {
                    isError = true;
                    $("#Hobbies").addClass("green-border");
                }

                if (isError) {
                    p.preventDefault();
                }
            });
        });
       $(document).ready(function(){

           $("input").click(function () {
               $(this).css({ "background-color": "yellow" });
            });
			});
            $("input").blur(function(){
                $(this).css({"background-color": "red"})
            });
    </script>

    <?php

    unset($_SESSION["first_name"]);
    unset($_SESSION["last_name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["mobile_number"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["dob_day"]);
    unset($_SESSION["dob_month"]);
    unset($_SESSION["dob_year"]);
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