<?php
$a[]="Nabin";
$a[]="Nabina";

// get the q  parameter from URL//
$q= $_REQUEST['q'];
$hint="";

//lookup all hints from array if $q is different  from""//
if($q!=$hint) {
    $q=strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if(stristr($q,substr($name,0,$len))) {
            if($hint=="") {
                $hint=$name;
            } else {
                $hint.=",$name";
            }
        }
    }
}
echo $hint==""? "No suggesttion": $hint;
?>