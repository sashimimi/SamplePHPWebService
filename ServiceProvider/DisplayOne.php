<?php
include('class_lib/MurachDB_Access.php');

$DB_Access = new MurachDB_Access();

$id = $_POST['key'];

$DB_Result = $DB_Access->selectOne($id);
$header = "<h3>Record with id of " . $id . " in lamm_class table</h3><br/>";
$rValue = "";

while ($row = $DB_Result->fetch_assoc())
{
	foreach($row as $value)
	{
		$rValue = $rValue . "$value ";
	}
	$rValue = $rValue . "<br/>";
}

if (empty($rValue))
    $rValue = "No records.";

print ($header . $rValue);

?>