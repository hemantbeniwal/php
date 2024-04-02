<?php

require_once("country-config.php");

$selectquery = "SELECT count(*) as total_row FROM `countries` ";
$selequery = $con->query($selectquery);
$selquery = mysqli_fetch_assoc($selequery);
$totalrow = $selquery["total_row"];
// dd($totalrow);
// echo $totalrow;
$pagesize = 5;
$totalpage = ceil($totalrow/$pagesize);
// echo $totalpage;
$page = $_GET["page"]??1;
// echo $page;
$start = $page*$pagesize-$pagesize;
// echo $start;

$selQuery = "SELECT * FROM `countries` limit $start,$pagesize";
$countryQuery = $con->query($selQuery);
// $selquer = mysqli_fetch_assoc($countryQuery);
// dd($selquer);
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>country-list</title>
    <style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
</head>
<body>
    
    <a href="country-add.php">add country</a>
    
    <table border="1" cellspacing="0">
        <tr>
            <th>Sr. No</th>
            <th>Country_name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $i=1;
        while($_country = mysqli_fetch_assoc($countryQuery))
        { ?>
        <tr>
            
            <td><?= $i++?></td>
            <td><?= $_country['country_name'] ?></td>
            <td><?= ($_country['country_status'] == 1)? "Enable" : "Disable" ?></td>
            <td>
                <a href="country-edit.php?id=<?= $_country['id']?>">Edit</a>/
                <a href="country-delete.php?id=<?= $_country['id'] ?>" onclick="return confirm ('Are You Sure.....')">Delete</a>
            </td>
        </tr>

        <?php } ?>


    </table>
    <br>
<div class="pagination">

  <a href="?page=<?= ($page==1)?1:($page-1) ?>">&laquo;</a>
  <?php
for($i = 1; $i <= $totalpage; $i++){?>

<a href="?page=<?=$i ?>"class="<?= ($page==$i)?'active':''?>"><?= $i ?></a>
<?php
};
  ?>
  <a href="?page=<?= ($page+1) ?>">&raquo;</a>
</div>
</body>
</html>
<!-- <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a> -->