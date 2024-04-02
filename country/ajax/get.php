<?php

require_once("config.php");
$data = $_GET;
$src_data = $data["searchdata"];
$selquery = "SELECT * FROM `student`";
$recdata = $con->query($selquery);
$totalrow = $recdata->num_rows;
// dd($totalrow);
$pagesize = 3;

$totalpage = ceil($totalrow / $pagesize);
// dd($totalpage);
$page = $_GET["page"] ?? 1;
$start = $page * $pagesize - $pagesize;

if ($src_data) {
    $selQuery = "SELECT * FROM `student` WHERE first_name LIKE '%$src_data%'";
} else {
    $selQuery = "SELECT * FROM `student` limit $start,$pagesize";
}
$selData = $con->query($selQuery);


// dd($selData);   

?>
<table border="1" cellspacing="0">
    <tr>
        <th>Sr.No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Action</th>
    </tr>
    <?php if ($selData->num_rows) { ?>
        <?php while ($_selData = mysqli_fetch_assoc($selData)) { ?>
            <tr>
                <td>
                    <?= $_selData["id"] ?>
                </td>
                <td>
                    <?= $_selData["first_name"] ?>
                </td>
                <td>
                    <?= $_selData["last_name"] ?>
                </td>
                <td>
                    <?= $_selData["email"] ?>
                </td>
                <td>
                    <?= $_selData["phone"] ?>
                </td>
                <td>
                    <button id="editbtn" data-id="<?= $_selData["id"] ?>">Edit</button> |
                    <button id="deletebtn" data-id="<?= $_selData["id"] ?>">Delete</button>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="5" align="center">Data No Found...</td>
        </tr>
    <?php } ?>

</table>
<div class="pagination">
    <?php if ($page > 1) { ?>

        <a href="javascript:void(0)" class="pages" page-no="<?= ($page - 1) ?>">Previous&laquo;</a>
        <?php
    } ?>
    <?php
    for ($i = 1; $i <= $totalpage; $i++) { ?>
        <a href="javascript:void(0)" class="pages" page-no="<?= $i ?>">
            <?= $i ?>
        </a>
    <?php }

    if ($totalpage > $page) {
        ?>
        <a href="javascript:void(0)" class="pages" page-no="<?= $page + 1 ?>">Next&raquo;</a>
        <?php
    } ?>
</div>