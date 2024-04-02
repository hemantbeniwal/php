<?php

require_once("country-config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add country</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="country-save.php" method="post" id="form">
        <table cellpadding="5">
            <tr>
                <td>Country Name</td>
                <td><input type="text" name="country_name">
                </td>
            </tr>

            <tr>
                <td>status</td>
                <td>
                    <select name="country_status">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>states:</td>
                <td>
                    <table id="add">
                        <tr>
                            <th>Name</th>
                            <th>status</th>
                            <td><button type="button" id="addmore">+</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="text" name="state_name[]"></td>
                            <td>
                                <select name="state_status[]">
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
                    <button type="reset" value="reset">Reset</button>
                    <input type="submit" value="save">
                </td>
            </tr>
        </table>

    </form>
    <script>

        $(document).ready(function () {
            $("#addmore").click(function () {
                add_more = '<tr>\
            <td></td><td><input type="text" name ="state_name[]"></td>\
            <td>\
                <select name="state_status[]">\
                    <option value="0">action</option>\
                    <option value="1">Enable</option>\
                    <option value="2">Disable</option>\
                </select>\
            </td>\
            <td><button class ="remove" type = "button">X</button></td>\
        </tr>'
                $('#add').append(add_more);
            });

            $("#add").delegate(".remove", "click", function () {

                $(this).closest("tr").remove()
            });

        });

    </script>
</body>

</html>