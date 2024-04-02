<?php
require_once("country-config.php");

$countryId =($_GET['cnt_id']) ? $_GET['cnt_id']:0;
// dd($countryId);

$stateQuery = "SELECT * FROM `states`where country_id=$countryId";
$statedata = $con->query($stateQuery);
echo '<option value="">Select states</option>';

while($_state =mysqli_fetch_assoc($statedata)){
    ?>
    <option value="<?= $_state['state_id']?>"><?= $_state['state_name']?></option>
<?php
}?>



?>