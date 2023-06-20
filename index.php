<?php
include "functions.php";
$candidateBoxId = "aabcda";

$candidatesBoxesIds = ["abcdef","bababc","abbcde","abcccd","aabcdd","abcdee","ababab"];

echo "The checksum is :". computeChecksum($candidatesBoxesIds);



?>
