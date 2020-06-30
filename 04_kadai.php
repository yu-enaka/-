<?php

/*  課題No.1  */
function mul($num){
  $return = $num * 2;
  return $return;
}

echo mul(4) . "\n";
/*  課題No.1  */


/*  課題No.2  */
function f($a, $b){
  $return = $a + $b;
  return $return;
}

echo f(4, 8) . "\n";
/*  課題No.2  */


/*  課題No.3  */
function arr_mul($arr){
  $mul_num = 1;
  
  foreach( $arr as $arr_num ){
    $mul_num *= $arr_num;
  }
    return $mul_num;
}

$array = [ 1, 3, 5 ,7, 9 ];
echo arr_mul( $array ) . "\n";
/*  課題No.3  */


/*  課題No.4  */
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
   if( $max_number < $a ){
     $max_number = $a;
   }
 }

 return $max_number;
 }
 
 echo max_array( $array ) . "\n";
/*  課題No.4  */


/*  課題No.5  */

//strip_tags
$str = "<p>課題</p>";
echo $str . "\n";
echo strip_tags($str) . "\n";

//array_push
$basket = [ "みかん" , "りんご" ];
array_push( $basket , "ぶどう" , "なし" );
print_r( $basket );

//array_merge
$arr_num1 = [ "c" => "0" , "1" => "1" , "2" => "2" ];
$arr_num2 = [ "c" => "22" , "3" ];
print_r( $arr_num1 );
print_r( $arr_num2 );
$result = array_merge( $arr_num1 , $arr_num2 );
print_r( $result );

//time
date_default_timezone_set( "UTC" );
$nextWeek = time();
echo date( "Y-m-d" , $nextWeek ) . "\n";

//mktime
echo date( "Y-m-d" , mktime( 0 , 0 , 0 , 11 , 04 , 1989 ) ) . "\n";

//date
echo date( "Y-m-d" ) . "\n";
/*  課題No.5  */