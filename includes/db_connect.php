<?php
$connection = @mysqli_connect('localhost', 'root', '', 'cms');
if(!$connection){
    echo 'you are not connected';
}
?>
 
