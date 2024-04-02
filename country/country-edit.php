<?php

require_once("country-config.php");
$data = $_POST;

$id = $_GET['id'] ?? "";

$selQuery = "SELECT * FROM `countries` WHERE id=$id";

$countryRec = $con->query($selQuery);

$_country = mysqli_fetch_assoc($countryRec);

$setQuery = "SELECT * FROM `states` WHERE country_id=$id";

$strecord = $con->query($setQuery);
$strcord = mysqli_fetch_assoc($strecord);
// dd($strcord);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit country</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="country-update.php" method="post">
        <input type="hidden" name="id" value="<?= $_country["id"] ?>">
        <table cellpadding="5">
            <tr>
                <td>Country Name</td>
                <td><input type="text" name="country_name" value="<?= $_country['country_name'] ?? null ?>">
                </td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                    <select name="country_status">
                        <option value="1" <?= ($_country["country_status"] == 1) ? "selected" : null ?>>Enable</option>
                        <option value="2" <?= ($_country["country_status"] == 2) ? "selected" : null ?>>Disable</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>states:</td>
                <td> 
                    <table id="edit">
                        <tr>
                            <th>Name</th>
                            <th>status</th>
                            <td><button type="button" id="addmore">+</button></td>
                        </tr>
                        <?php while ($_strec = mysqli_fetch_assoc($strecord)) { ?>
                            <tr>
                                <td>
                                    <input type="hidden" name="state_id[]" value="<?= $_strec["state_id"] ?>">
                                    <input type="text" name="state_name[]" value="<?= $_strec["state_name"] ?>">
                                </td>

                                <td>
                                    <select name="state_status[]">
                                        <option value="0" <?= ($_strec["state_status"] == 0) ? "selected" : null ?>>action
                                        </option>
                                        <option value="1" <?= ($_strec["state_status"] == 1) ? "selected" : null ?>>Enable
                                        </option>
                                        <option value="2" <?= ($_strec["state_status"] == 2) ? "selected" : null ?>>Disable
                                        </option>
                                    </select>
                                </td>
                                <td><button class="remove" type="button">X</button></td>
                            </tr>
                        <?php } ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="save">
                </td>
            </tr>
        </table>
    </form>
    <script>

        $(document).ready(function () {
            $("#addmore").click(function () {
                add_more = '<tr>\
    <td><input type="text" name ="state_name[]"></td>\
    <td>\
        <select name="state_status[]">\
            <option value="0">action</option>\
            <option value="1">Enable</option>\
            <option value="2">Disable</option>\
        </select>\
    </td>\
    <td><button class ="remove" type = "button">X</button></td>\
</tr>'
                $('#edit').append(add_more);
            });

            $("#edit").delegate(".remove", "click", function () {

                $(this).closest("tr").remove()
            });

        });

    </script>
</body>

</html>