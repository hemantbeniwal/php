<?php

require_once("country-config.php");
$selectquery = "SELECT count(*) as total_row FROM `states`";
$selequery = $con->query($selectquery);
// dd($selequery);
$selcquery = mysqli_fetch_assoc($selequery);
$totalrow = $selcquery["total_row"];
// dd($totalrow);
// echo $totalrow;
$pagesize = 5;
$totalpage = ceil($totalrow/$pagesize);
// echo $totalpage;
// dd($totalpage);
$page = $_GET["page"]??1;
// echo $page;
$start = ($page-1)*$pagesize;
// echo $start;

 $selQuery = "SELECT s.*,c.country_name as country_name FROM `states` as s INNER JOIN `countries` as c ON s.country_id=c.id LIMIT $start, $pagesize";

// $selQuery = "SELECT * FROM `states`";
 $stateQuery = $con->query($selQuery);

 


// $countryQuery = "SELECT * FROM `countrys`";
// $countryname = $con->query($countryQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>states-list</title>
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
    
    <a href="state-add.php">+add states</a>
    
    <table border="1" cellspacing="0">
        <tr>
            <th>Sr No.</th>
            <th>Country Name</th>
            <th>State Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while($_state = mysqli_fetch_assoc($stateQuery))
        
    
        { ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $_state['country_name'] ?></td>
            <td><?= $_state['state_name'] ?></td>
            <td><?= ($_state['state_status'] == "1")?"Enable":"Disable" ?></td>
            
            <td>
                <a href="state-edit.php?state_id=<?= $_state['state_id']?>">Edit</a>/
                <a href="state-delete.php?state_id=<?= $_state['state_id']?>" onclick="return confirm('Are you sure')">Delete</a>
            </td>
        </tr>

        <?php }; ?>


    </table>
    <div class="pagination">

        <a href="?page=<?= ($page==1)?1:($page-1) ?>">&laquo;</a>
        <?php for($i = 1; $i <= $totalpage; $i++) { ?>

        <a href="?page=<?= $i ?>" class="<?= ($page==$i)?'active':''?>"><?= $i ?></a>
        <?php } ?>
        <a href="?page=<?= ($page+1) ?>">&raquo;</a>
    </div>
</body>
</html>