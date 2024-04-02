<?php

require_once("country-config.php");


$seleQuery = "SELECT * FROM `countries`";
$countryQuery = $con->query($seleQuery);

$id = $_GET["state_id"] ?? "";

$selQuery = "SELECT * FROM `states` where state_id = $id ";
$stateQuery = $con->query($selQuery);

$_state = mysqli_fetch_assoc($stateQuery);


$selectQuery = "SELECT * FROM `cities` where state_id = $id";
$cityQuery = $con->query($selectQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>update states</title>
</head>

<body>
    <form action="state-update.php" method="post">
        <input type="hidden" name="state_id" value="<?= $_state["state_id"] ?>">
        <table cellpadding="5">
            <tr>
                <td>Country_Id</td>
                <td><select name="country_id">
                        <option value="">Country id</option>
                        <?php while ($_country = mysqli_fetch_assoc($countryQuery)) {
                            ?>
                            <option value="<?= $_country['id'] ?>" <?= ($_country['id'] == $_state['country_id']) ? "selected" : "" ?>>
                                <?= $_country['country_name'] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>state Name</td>

                <td><input type="text" name="state_name" value=" <?= $_state['state_name']??"" ?>">

                </td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                    <select name="state_status">
                        <option value="1" <?= ($_state['state_status'] == 1) ? "selected" : "" ?>>Enable</option>
                        <option value="2" <?= ($_state['state_status'] == 2) ? "selected" : "" ?>>Disable</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>city</td>
                <td>
                    <table id="city_add">
                        <tr>
                            <th>City name </th>
                            <th>City status </th>
                            <td>
                                <button type="button" id="addmore">+</button>
                            </td>
                        </tr>
                        <tr>
                            <?php while ($_city = mysqli_fetch_assoc($cityQuery)) { ?>
                            <tr>
                                <td>
                                    <input type="hidden" name="city_id[]" value="<?= $_city["city_id"] ?>">
                                    <input type="text" name="city_name[]" value="<?= $_city["city_name"] ?>">
                                </td>
                                <td>
                                    <select name="city_status[]">
                                        <option value="1" <?= ($_city["city_status"] == 1) ? "selected" : "" ?>>Enable</option>
                                        <option value="2" <?= ($_city["city_status"] == 2) ? "selected" : "" ?>>Disable
                                        </option>
                                    </select>
                                </td>
                                <td><button type="button" class="remove">X</button></td>
                            </tr>
                            <?php
                            }
                            ?>
            </tr>

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
                                <td>\
                                    <input type="text" name="city_name[]"></td>\
                                    <td><select name="city_status[]">\
                                        <option value="1">Enable</option>\
                                        <option value="2">Disable</option>\
                                    </select>\
                                </td>\
                                <td><button type="button" class="remove">X</button></td>\
                            </tr>'
                $('#city_add').append(add_more);
            });

            $("#city_add").delegate(".remove", "click", function () {

                $(this).closest("tr").remove()
            });

        });

    </script>
</body>

</html>