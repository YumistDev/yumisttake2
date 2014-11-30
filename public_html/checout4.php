<?php
echo "<html><body style='background-color:white;'>check out form will come here</body></html>";
use Parse\ParseObject;
 
$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "bar");
$testObject->save();

?>