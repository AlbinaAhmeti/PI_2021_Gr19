<?php
$a[] = "tip_aktiv";
$a[] = "tip_basic";
$a[] = "tip_premium";
$a[] = "interneti_parapagim";
$a[] = "interneti_superfibra";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    $replaced =preg_replace("/rrjeti/i","interneti",$q);
    $lenq=strlen($replaced);
    foreach($a as $name) {
        if (stristr($replaced, substr($name, 0, $lenq))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>