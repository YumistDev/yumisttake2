<?php
echo "<html><body style='background-color:white;'>check out form will come here</body></html>";
require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('EiWx1ykE6MHUjmnFwzoLvufUlsdtLUEO5mUuHwpv', 'FtJ7IIwGG5cBKMCMW8XfBg3vowVz7Gp81CDxSUzW', 'Q95YnjuuAwZJKldilMc6lAtxxStZmDw5Tiqa2VbW');


use Parse\ParseObject;
use Parse\ParseQuery;
 
/* 
//saving the data
$testObject1 = new ParseObject("TestObject1");
$testObject1->set("foo", "bar");
$testObject1->set("boo","far");
$testObject1->set("goo","mar");
try {
$testObject1->save();
}
catch(ParseException $ex)
{
echo 'Failed to create new object, with error message: ' + $ex->getMessage();
} */

/*
// Updating the data
$query= new ParseObject("TestObject1");
try {
$testObject1= $query->set("goo","yay");
$testObject1= $query->set("boo","yay");
$testObject1= $query->set("foo","yay");
$query->save();
$testObject1=$query->set("foo","may");
$query->save();
}
catch(ParseException $ex){
} */


$query=new ParseQuery("TestObject1");
$testObject1=$query->get("i0lppopyf4");

$myData=$testObject1->get("goo");
$testObject1->fetch();
echo $myData;


?>