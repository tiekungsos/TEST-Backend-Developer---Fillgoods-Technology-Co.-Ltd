<?php 

//process text
function subString($text,$number){
   
    $check = false;

    if($number == 1){
        $number = strlen($text);
        $check = true;
    }elseif($number == strlen($text)){
        $number = 1;
        $check = true;
    }

    $string = str_split($text,$number);
    if($check){
        return $string;
    }
    
    return checkSplit($string,$number);
}


function checkSplit($string,$number){
    $textArr = [];
    
    $typeNumber = strlen($number) % 2 == 0;
    $lastKey = key(array_slice($string, -1, 1, true));
    foreach ($string as $key => $value) {
        $typeNumberValue = strlen($value) % 2 == 0;

        if($key == $lastKey &&  $typeNumberValue == $typeNumber){
            $textArr[$key - 1] = $string[$key - 1].$value;
            continue;
        }

        $textArr[$key] = $value;
    }

    return $textArr;
}


//set text
$string = "cycle";
$number= 2;

//show text
echo implode(',',subString($string,$number));