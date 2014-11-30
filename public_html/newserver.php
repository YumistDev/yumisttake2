<?php 

require 'vendor/autoload.php'; 
use Parse\ParseClient;
 
ParseClient::initialize('EiWx1ykE6MHUjmnFwzoLvufUlsdtLUEO5mUuHwpv', 'FtJ7IIwGG5cBKMCMW8XfBg3vowVz7Gp81CDxSUzW', 'Q95YnjuuAwZJKldilMc6lAtxxStZmDw5Tiqa2VbW');

use Parse\ParseObject;
use Parse\ParseQuery;


$location = $_GET['location'];
$dish1=$_GET['dish1'];
$dish2=$_GET['dish2'];

echo 'the location is'.$location.'. Dish1 is'.$dish1.'. Dish2 is'.$dish2;



?>
