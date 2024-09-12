<?php
function myTest() {
 static $x = 0;
 echo $x;
}
myTest() ;
myTest() ;
myTest() ;


?>