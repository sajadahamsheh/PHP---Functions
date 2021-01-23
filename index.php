<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 

// questions 1
function factorial($n){
    $f=1;
    if($n <0 ){
        $n=$n*-1;
    }
    for ($i=1;$i <= $n;$i++){    
            $f=$f*$i;
    }
   return $f;
}

echo factorial(-5);

echo '<br>';
// questions 2
function prime ($n1){
   
    for($nf=2;$nf < $n1 ; $nf++){
        if($n1 % $nf == 0){
            
            echo 'is not prime';
        }
    }
    echo 'is prime';
    
}

 prime(8);

 
echo '<br>';
// questions 3
function revverse($srt){
    $str1=explode(" ",$srt);
    for($i=count($str1);$i >=0;$i-- ){
        echo $str1[$i];
    }

}
revverse("1 2 2 8");

 
echo '<br>';
// questions 4
function sorting($sortng){
   $sr= sort($sortng);
    
   for ($x = 0; $x < count($sr); $x++){
       echo $sr[$x];
       echo '<br';
   }
}
$s= array('a','s','d','a','s');
sorting($s);

 
echo '<br>';
// questions 5




?>
<body>
    
</body>
</html>

