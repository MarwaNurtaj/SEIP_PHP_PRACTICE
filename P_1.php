<?php 

    $a = 10;
    $b = 50;
    $c = $a + $b;
    // echo $c;
    echo "  RESULT is =  " .$c . "  A =" . $a ."  B =". $b;


add(3,3);
function add($a,$b){
    $c = $a + $b;
    echo "-----Function-----";
    echo "  RESULT is =  " .$c . "  A =" . $a ."  B =". $b;
}


//  Assosiative array 
$arr1 = array();

$arr=['v1'=>22 ,'v2'=>23];
$arr['v3']=50;

adtn($arr);
del($arr);

function adtn($all){
    $a = $all['v1'];
    $b = $all['v2'];
    $c = $a + $b;
    echo 'Result=====>'.$c;
}
function del($all){
    $d=$all['v3']-$all['v1'];
    echo 'Deletion result=====>'.$d;
}

//isset to check the variable is set or not(boolean type ans return)
chkisset($arr);
function chkisset($all){
    if($all['v3']>=50){
        ECHO "ok!";
    }
    else{
        echo 'not ok!!!';
    }
}

//similaly

chkisset1($arr);

function chkisset1($all){
    $check = $all['v3']>=69 ;
    if($check){
        echo 'OK';
    }
    else{
        echo 'NOT OK';
    }

}