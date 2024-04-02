<?php

require_once("country-config.php");
$selectquery = "SELECT count(*) as total_row FROM `cities` ";
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

$selQuery = "SELECT * FROM `cities` limit $start,$pagesize";
$cityQuery = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city-list</title>
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
    
    <a href="city-add.php">+city add</a>
    
    <table border="1" cellspacing="0">
        <tr>
            <th>Sr.no</th>
            <th>Country id</th>
            <th>State id</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $a = 1;
        while($_city = mysqli_fetch_assoc($cityQuery))
        
        { ?>
        <tr>
            <td><?= $a++ ?></td>
            <td><?= $_city['country_id'] ?></td>
            <td><?= $_city['state_id'] ?></td>
            <td><?= $_city['city_name'] ?></td>
            <td><?= ( $_city['city_status']=="1")?"Enable":"Disable" ?></td>
            <td>
                <a href="city-edit.php?city_id=<?= $_city['city_id']?>">Edit</a>/
                <a href="city-delete.php?city_id=<?= $_city['city_id']?>"onclick = "return confirm('you are sure...')">Delete</a>
            </td>
        </tr>

        <?php }; ?>


    </table>
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