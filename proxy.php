<?php

$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept: application/json\r\n" .
              "Authorization: Bearer APIKEYHERE\r\n"
  )
);
echo  filemtime('0.json').PHP_EOL;
echo time();

if (time() - filemtime('0.json') > 90)
{
$context = stream_context_create($opts);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/1%2C2%2C3%2C4%2C5%2C6%2C7%2C12%2C13%2C14', false, $context); file_put_contents('0.json', $file);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/17%2C19%2C20%2C21%2C22%2C25%2C27%2C28%2C29%2C97', false, $context); file_put_contents('1.json', $file);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/34%2C36%2C38%2C39%2C41%2C42%2C43%2C44%2C45%2C98', false, $context); file_put_contents('2.json', $file);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/47%2C48%2C49%2C50%2C51%2C53%2C54%2C55%2C57%2C58', false, $context); file_put_contents('3.json', $file);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/59%2C60%2C61%2C62%2C63%2C64%2C65%2C66%2C67%2C68', false, $context); file_put_contents('4.json', $file);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/69%2C71%2C72%2C75%2C76%2C77%2C78%2C79%2C80%2C81', false, $context); file_put_contents('5.json', $file);
$file = file_get_contents('https://opendata-api.stib-mivb.be/OperationMonitoring/1.0/VehiclePositionByLine/82%2C84%2C86%2C87%2C88%2C89%2C92%2C93%2C94%2C95', false, $context); file_put_contents('6.json', $file);
}
else
echo 'OK';
?>
