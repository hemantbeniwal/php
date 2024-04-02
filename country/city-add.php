<?php

require_once("country-config.php");

$selQuery = "SELECT * FROM `countries` ";
$countryQuery = $con->query("$selQuery");
$seleQuery = "SELECT * FROM `states`";
$stateQuery = $con->query("$seleQuery");
// dd($stateQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add city</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="city-save.php" method="post" id="city_form">
        <table cellpadding="5">
            <tr>
                <td>country id</td>
                <td>
                    <select name="country_id" id="country_id">
                        <option value="">country-id</option>
                        <?php while ($_country = mysqli_fetch_assoc($countryQuery)) { ?>
                            <option value="<?= $_country['id'] ?>">
                                <?= $_country['country_name'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>state id</td>
                <td>
                    <select name="state_id" id="state_id">
                        <option value="">Select states</option>
                        <?php /*while ($_state = mysqli_fetch_assoc($stateQuery)) { ?>
                            <option value="<?= $_state['state_id'] ?>">
                                <?= $_state['state_name'] ?>
                            </option>
                        <?php
                        }*/
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>name</td>
                <td><input type="text" name="city_name">
                </td>
            </tr>

            <tr>
                <td>status</td>
                <td>
                    <select name="city_status">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>

                    </select>
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
</body>
<script>
    $(document).ready(function(){
        $("#country_id").change(function(){
        let countryId = $(this).val();
        $.ajax({
            url: 'get-state.php',
            method: 'GET',
            data: {'cnt_id':countryId},
            success:function(response){
                $('#state_id').html(response);
            },
            error:function(err){
                console.log(err);
            }
        });
    // });
    // ${'#city_form'}.submit(function(e){
    //     e.preventDefault();
    //     FormData = $(this).serialize();
    //     console.log(FormData);
    });
    });
</script>
</html>