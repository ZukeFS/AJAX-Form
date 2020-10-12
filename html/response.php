<?php

$data = $_GET['datavalue'];

$a = array('Guwahati', 'Shillong');
$b = array('Bangaluru', 'Halasuru');
$c = array('Kolkata', 'Durgapur');
$d = array('Mumbai', 'Lokhandwala');

if($data == "Assam"){
    foreach($a as $aone){
        echo "<option> $aone </option>"
    }
}

if($data == "Karnataka"){
    foreach($b as $bone){
        echo "<option> $bone </option>"
    }
}

if($data == "West Bengal"){
    foreach($c as $cone){
        echo "<option> $cone </option>"
    }
}

if($data == "Maharashtra"){
    foreach($d as $done){
        echo "<option> $done </option>"
    }
}

?>