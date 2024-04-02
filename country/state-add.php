<?php

require_once("country-config.php");

$selQuery= "SELECT * FROM `countries`";
$countryQuery = $con->query($selQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add states</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="state-save.php" method ="post">
        <table cellpadding="5">
            <tr>
                <td>Country_ID</td>
                <td>
                    <select name="country_id">
                        <option value="">Country Name</option>
                        <?php while($_country = mysqli_fetch_assoc($countryQuery)){ ?>
                        <option value="<?= $_country['id']?>"><?= $_country['country_name'] ?></option>
                        
           <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>State Name</td>
                <td><input type="text" name="state_name">                
                </td>
            </tr>
    
            <tr>
                <td>status</td>
                <td>
                    <select name ="state_status">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>city:</td>
                <td>
                    <table id ="add-city">
                        <tr>
                            <th></th>
                            <th>city</th>
                            <th>status</th>
                            <td><button type="button" id ="addmore">+</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="text" name="city_name[]"></td>
                            <td>
                                <select name="city_status[]">
                                    <option value="0">action</option>
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                </select></td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>
                    <input type="submit" value="save">
                </td>
            </tr>
        </table>
    </form>
    <script>

$(document).ready(function () {
    $("#addmore").click(function () {
        add_more = '<tr>\
    <td></td><td><input type="text" name ="city_name[]"></td>\
    <td>\
        <select name="city_status[]">\
            <option value="0">action</option>\
            <option value="1">Enable</option>\
            <option value="2">Disable</option>\
        </select>\
    </td>\
    <td><button class ="remove" type = "button">X</button></td>\
</tr>'
        $('#add-city').append(add_more);
    });

    $("#add-city").delegate(".remove", "click", function () {

        $(this).closest("tr").remove()
    });

});

</script>
</body>

</html>