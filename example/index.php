<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title><link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  
<?php

require_once __DIR__ . '/../vendor/autoload.php';
use DeanWard\TableTool\Table;

$table = new Table(array(
  "class" => "table-bordered table table-rounded table-striped"
));

$data = array(
  array('Gecko', 'Firefox 1.0', 'Win 98+ / OSX.2+',  '1.7', 'A'),
  array('Gecko', 'Firefox 1.5', 'Win 98+ / OSX.2+',  '1.8', 'A'),
  array('Gecko', 'Firefox 2.0', 'Win 98+ / OSX.2+',  '1.8', 'A'),
  array('Gecko', 'Firefox 3.0', 'Win 2k+ / OSX.3+',  '1.9', 'A'),
  array('Gecko', 'Camino 1.0',  'OSX.2+',  '1.8', 'A'),
  array('Gecko', 'Camino 1.5',  'OSX.3+',  '1.8', 'A'),
  array('Gecko', 'Netscape 7.2',  'Win 95+ / Mac OS 8.6-9.2',  '1.7', 'A')
);
$table->addRow(array('Engine','Browser','User Agent','version', 'CSS Grade'),null,'head');
foreach($data as $row) {
  $table->addRow($row);
}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <?php echo $table->render();?>
    </div>
  </div>
</div>
</body>
</html>