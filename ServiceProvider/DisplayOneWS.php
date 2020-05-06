<?php
include('class_lib/MurachDB_Access.php');

$DB_Access = new MurachDB_Access(); 

$key = $_REQUEST['key'];

$DB_Result = $DB_Access->selectOne($key);

$data = array();

$index = 0;
while($row = $DB_Result->fetch_assoc())
{ $rValue = "";
  foreach($row as $value)
      {$rValue = $rValue . "$value ";}
  $data[] = $rValue;
}

print(json_encode($data));

?>
