<?php

/*  課題No.1  */
$name = "恵中 優";

if( $name == "恵中 優" ){
  echo "「私は 恵中 優 です」\n";
}
else{
  echo "「あなたの名前ではありません」\n";
}
/*  課題No.1  */


/*  課題No.2  */
$add = 0;

for( $i=1; $i<=10000; $i++){
  $add += $i;
}

echo $add . "\n";
/*  課題No.2  */


/*  課題No.3  */
$fruits = [ "梨", "びわ", "マンゴー", "柿", "バナナ" ];

foreach( $fruits as $fruit ){
  echo $fruit . "\n";
}
/*  課題No.3  */


/*  課題No.4  */
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}
/*  課題No.4  */

