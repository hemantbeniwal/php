<?php 

require_once("config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajas Class</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
</head>
<body>
<br>
<form id="insertData" >
    <input type="hidden" name="edit_id" id="edit_id">

    <input type="search" name ="search" id ="search">
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" id="first_name"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" id="last_name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
            <td><input type="tel" name="phone" id="phone"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save" id="save"></td>
        </tr>
    </table>
    <a href=""></a>
</form>
<br>

<table id="table" border="1" cellspacing="0">         
</table>
<br>

<script>
    $(document).ready(function(){

        $("body").delegate(".pages","click",function () {
           pageno =$(this).attr('page-no');
           getData(pageno);
        });
        function getData(page = 1){
            var search_data =$("#search").val();
            $.ajax({
                url: 'get.php',
                method: 'GET',
                data : {'searchdata':search_data,
                page:page},
                success: function(response) {
                    $("#table").html(response);
                    $('a[page-no="+page+"]').addClass('active');
                },
                error: function(er) {
                    alert(er);
                }
            });
        }
        getData();
        $("#search").keyup(function(){
            getData();
        });

        $("#insertData").submit(function(e){
            e.preventDefault();
            formData = $(this).serializeArray();
            $.ajax({
                url: 'ajax-save.php',
                method: 'POST',
                data: formData,
                success: function(response) {
                    $("#insertData").trigger("reset");
                    getData();
                },
                error: function(e){
                    console.log(e);
                }
            });
            
        });
        $("body").delegate("#deletebtn", "click", function(){
           var delid = $(this).attr('data-id');
            $.ajax({
                url: 'delete.php',
                method: 'GET',
                data: {'student_id': delid},
                success: function(result) {
                    getData();
                },
                error: function(er) {
                    alert(er);
                }
            });
        });
        $("body").delegate("#editbtn", "click", function(){
           var editid = $(this).attr('data-id');
            $.ajax({
                url: 'edit.php',
                method: 'GET',
                data: {'sch_id': editid},
                success: function(result) {
                    student = JSON.parse(result);
                    $('#first_name').val(student.first_name);
                    $('#last_name').val(student.last_name);
                    $('#email').val(student.email);
                    $('#phone').val(student.phone);
                    $('#edit_id').val(student.id);
                }
                
            });
        });

    });
</script>

</body>
</html>
