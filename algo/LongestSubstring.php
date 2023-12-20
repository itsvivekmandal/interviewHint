<?php

#

function lengthOfLongestSubstring($s) {
    $finalArray = [];
    $last = null;
    $counter = 0;
    $i = 0;
    while(isset($s[$i])) {
        $arr = [];
        $current = $s[$i];
        $finalArrayCount = count($finalArray) - 1;
        if($last !== $current && empty($finalArray)){
            $arr['string'] = $current;
            $arr['count'] = 1;
            array_push($finalArray, $arr);
        } else if ($last != $current && !empty($finalArray)){
            if(strpos($finalArray[$finalArrayCount]['string'], $current) !== false) {
                $i = $counter + 1;
                $counter++;
                $current = $s[$i];
                $arr['string'] = $current;
                $arr['count'] = 1;
                array_push($finalArray, $arr);
            } else {
                $finalArray[$finalArrayCount]['string'] = $finalArray[$finalArrayCount]['string'].$current;
                $finalArray[$finalArrayCount]['count'] += 1;
            }
        } else {
            $arr['string'] = $current;
            $arr['count'] = 1;
            $i = $counter + 1;
            $counter++;
            array_push($finalArray, $arr);
        }
        $last = $current;
        $i++;
    }

    print_r($finalArray);

    $countResult = 0;
    for($j = 0; $j < count($finalArray); $j++){
        if($countResult > $finalArray[$j]['count']) {
            $countResult = $countResult;
        } else {
            $countResult = $finalArray[$j]['count'];
        }
        // echo $countResult;
    }

    return $countResult;
}

$result = lengthOfLongestSubstring('abcabcbb');

// print_r($result);
