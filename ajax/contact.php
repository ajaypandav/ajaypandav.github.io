<?php
header("Content-Type: application/json");

$returnData['type'] = 'success';
$returnData['message'] = 'Contact Submited Successfully!';

echo json_encode($returnData);
