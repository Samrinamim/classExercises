
<?php

$ar1[] = array("red","green","yellow","blue");
$ar1[] = array("green","yellow","brown","red","white","yellow");
$ar1[] = array("red","green","brown","blue","black","yellow");
#$ar1= array("red","green","brown","blue","black","red","green"); // Possible with one or multiple Array

$res = array_icount_values ($ar1);
print_r($res);

function array_icount_values($arr,$lower=true) {
    $arr2=array();
    if(!is_array($arr['0'])){$arr=array($arr);}
    foreach($arr as $k=> $v){
        foreach($v as $v2){
            if($lower==true) {$v2=strtolower($v2);}
            if(!isset($arr2[$v2])){
                $arr2[$v2]=1;
            }else{
                $arr2[$v2]++;
            }
        }
    }
    return $arr2;
}
/*
Will print:
Array
(
    [red] => 3
    [green] => 3
    [yellow] => 4
    [blue] => 2
    [brown] => 2
    [white] => 1
    [black] => 1
)
*/
?>