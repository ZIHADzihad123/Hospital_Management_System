<?php

$a[] = "Alam";
$a[] = "Bashir";
$a[] = "Chondra";
$a[] = "Dipa";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gabir";
$a[] = "Hege";
$a[] = "Inia";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Abir";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wakka";
$a[] = "Vaya";
$a[] = "Tommy";
$a[] = "Five";
$a[] = "Pintu";
$a[] = "Kamal";
$a[] = "Harper";
$a[] = "Mason";
$a[] = "Ella";
$a[] = "Jackson";
$a[] = "Jamil";

 

// get the q parameter from URL
$q = $_REQUEST["q"];

 

$hint = "";

 

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $username) {
        if (stristr($q, substr($username, 0, $len))) {
            if ($hint === "") {
                $hint = $username;
            } else {
                $hint .= ", $username";
            }
        }
    }
}

 

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggested name" : $hint;
?>