<?php 

//process text
function showProcessText($string){
     $check = '';
    if(ctype_upper($string)){
        $check = showText(1);
      }elseif(ctype_lower($string)){
        $check = showText(2);
      }elseif(strtolower($string) != $string && strtoupper($string) != $string){
        $check = showText(3);
      }else{
        $check = showText(4);
      }

      return $check;
 }

 //list text
function showText($number){
     $text = array(
         1 => 'All Capital Letter',
         2 => 'All Small Letter',
         3 => 'Mix',
         4 => 'Invalid Input',
     );

     return $text[$number];
 }

//set text
 $string  = "TTTTT";
 //show text
 echo showProcessText($string);
 
 