<style>
    .success 
    {
        width: 50%;
        padding: 5px 10px;
        background-color: #adf3b9;
        border: 1px solid green;
        background-redius: 5px;
        margin: 20px 10px;
    }
    .error 
    {
        width: 50%;
        padding: 5px 10px;
        background-color: #f3adad;
        border: 1px solid red;
        background-redius: 5px;
        margin: 20px 10px;
    }
</style>

<?php
if (isset($_SESSION["success"])) { ?>
    <div class="success">
        <?php
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
        ?>
    </div>
    <?php
}
?>
<?php
if (isset($_SESSION["error"])) { ?>
    <div class="error">
        <?php
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
        ?>
    </div>
    <?php
}
?>