<?php
/**
 * @author Kevin TOFFA
 * 
 * 
 */
function countOccurence(?string $str)
{
    $idSplitted = str_split($str);

    $charCounter = [];

    for($i = 0 ; $i< count($idSplitted); $i++)
    {
        if(!array_key_exists($idSplitted[$i], $charCounter)){
            $charCounter[$idSplitted[$i]] = 0;
            for($j = $i ; $j < count($idSplitted);$j++ ){
                if($idSplitted[$i] == $idSplitted[$j] ){
                    $charCounter[$idSplitted[$i]]++;
                }
            }
        }
        
    }

    return $charCounter;
}

/**
 * @param array[string]
*/

function computeChecksum(array $boxes)
{
    $checksumArray = [2=> 0, 3 =>0];
    
    foreach($boxes as $box )
    {
        $charCounter = countOccurence($box);
        $twoAdded = false;
        $threeAdded = false;

        foreach($charCounter as $letter => $count){
            if($count ==2 && $twoAdded == false)
            {
                $checksumArray[2]++;
                $twoAdded = true;
            }
            if($count ==3 && $threeAdded == false)
            {
                $checksumArray[3]++;
                $threeAdded = true;
            }
        }
    }

    $checksum = $checksumArray[2]*$checksumArray[3];
    return $checksum;
    
}
?>