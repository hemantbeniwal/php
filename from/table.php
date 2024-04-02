<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <table id="table" border="1" cellspacing="0">
        <tr>
            <td>name</td>
            <td>email</td>
            <td><button class="add">+</button></td>
        </tr>
        <tr>
            <td><input type="text" name="name"></td>
            <td><input type="email" name="email"></td>
            <td><button class="remove">X</button></td>
        </tr>
    </table>

    <script>
        $(document).ready(function () {
            $(".add").click(function () {
                let add_more = '<tr>\
             <td><input type="text" name="name"></td>\
             <td><input type="email" name="email"></td>\
             <td><button class="remove">X</button></td>\
         </tr>'
                $("#table").append(add_more);
            });
            $("#table").delegate(".remove","click",function(){
                $(this).closest('tr').remove();
            });
        });


    </script>


</body>

</html>