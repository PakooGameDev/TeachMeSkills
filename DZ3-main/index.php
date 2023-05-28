<?php
################ 1 ################
function numSum($a, $b){
    return $a+$b;
}

// echo numSum(1,2);

################ 2 ################
function strLength($str) {
    return strlen($str); // returns str length including spaces
}

// echo strLength('Lorem ipsum'); 

///////CUSTOM FUNCTION - MORE FLEXIABLE coz can return length excluding spaces///////////

// function calculateLength($str, $considerSpace, $callback){
//     $strSymbols = str_split($str);
//     $counter = 0;
//     foreach ($strSymbols as $symbol) {
//         if($considerSpace == false){
//             if($symbol != " ") {
//                 if(is_callable($callback)){
//                     $callback($counter);
//                 }
//             }
//         } else {
//             if(is_callable($callback)){
//                 $callback($counter);
//             }
//         }
//     }
//     return $counter;
// }

// function updateCounter (&$counter) {  //callback fucntion
//     return $counter++;
// }

// echo calculateLength("Lorem ipsum", true, 'updateCounter');

################ 3 ################

$exampleArr = [1, '2', 3.0]; // Should contain only data of type integer or float or numeric string
function averageOfArr($array){
    return array_sum($array)/count($array);
}

// echo averageOfArr($exampleArr);

//////////////// CUSTOM FUNCTION - MORE FLEXIABLE ///////////////////

// $exampleArr = [1, 2, '3', 'b', ' ', '']; // may contain anything

// function averageOfArr($a, $callback) {
//     if(count($a)) {
//         return $callback($a);
//     }
// }

// function checkIsNumAvaliable($elem) {
//     return (ctype_space($elem) == false && $elem != '' && is_numeric($elem));
// }

// function calculateAverage($arrNum){
//     $arrLength = 0;
//     $tempNum = 0;
//     foreach($arrNum as $num){
//         if(checkIsNumAvaliable($num) == true){
//             $tempNum = $num + $tempNum;
//             $arrLength++;
//         }
//     }
//     return $tempNum / $arrLength;
// }

// echo averageOfArr($exampleArr, 'calculateAverage');


################ 4 ################

function getMax($a,$b){
    if(is_numeric($a) && is_numeric($b)) {
        return max($a, $b);
    }
    return 0;
}

// echo getMax(22, 'n'); 

/////////////////// CUSTOM FUNCTION ///////////////////

// function isNumAvaliable($elem){
//     return (is_numeric($elem) && ctype_space($elem) == false && $elem != '');
// }

// function getMax($first, $second){
//     if(isNumAvaliable($first) && isNumAvaliable($second)) {
//         if($first > $second){
//             return $first;
//         } else {
//             return $second;
//         }
//     } else {
//         return "One of the values is incorrect. Only numbers are avaliable";
//     }
// }

################ 5 ################
function concateStr($firstStr, $secondStr) {
        return trim($firstStr) . ' ' . trim($secondStr);
}

// echo concateStr('Du', 'Hast', true);

################ 6 ################
$exampleStr = 'Si vis pacem, para bellum';

function capitalizeText($str, $callback = 'ucfirst'){
    return $callback($str);
}

// echo capitalizeText($exampleStr, 'strtoupper');

################ 7 ################
function findSubstring($str, $substr){
    // return str_contains($str, $substr);
    return strpos($str, $substr);
}

// var_dump(findSubstring('Was wollen wir trinken 7 tage lang', 'wollen'));
################ 8 ################
function getAverage($a, $b) {
    return ($a+$b)/2;
}

// echo getAverage(5.0,'7');
################ 9 ################
function getSQRT($a){
    return sqrt($a);
}

// echo getSQRT(400);
?>

