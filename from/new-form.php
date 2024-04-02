<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <style>
        label.error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="#" method="POST" id="form">
        <table>
            <tr>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
    <script>
        $(document).ready(function () {
            $('#form').validate({
                rules: {
                    'name': 'required',
                    'email': {
                        email: true,
                        required: true
                    },
                    'phone': {
                        // Number:true,
                        required:true,
                        minlength: 10,
                        maxlength: 12
                    }
                
                },
                messages: {
                    'name': 'Name is required',
                    'email': {
                        email: 'Enter a valid email address',
                        required: 'Email is required'
                    },
                    'phone':{
                        required: 'Phone is a required field',
                        minlength: 'Minimum 10 number',
                        maxlength: 'Maximum 12 number'
                    }
                }

            });
        });
    </script>
</body>

</html>