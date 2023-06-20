<?php
include "functions.php";
//Test de l'algorithme
$candidateBoxId = "aabcda";
$candidatesBoxesIds = ["abcdef","bababc","abbcde","abcccd","aabcdd","abcdee","ababab"];
echo "The checksum is : ".computeChecksum($candidatesBoxesIds);

?>
