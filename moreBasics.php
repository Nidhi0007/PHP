<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<style>
.container{
    max-width:80%;
    background-color: grey;
    margin:auto;
    padding:23px;

}
</style>
<body>
<div class="container">
<h1> Lets learn php</h1>
<?php
$age=17;
if($age >18){
    echo "go to party";
}
else{
    echo "you can not go to party";
}
echo "<br>";
//array
$languages= array("python","c++","php","nodeJs");
echo $languages[0];

//count
echo count($languages);


//loops
$a=0;
while ($a < count($languages)) {
    echo "<br> the value of languages is: ";
    echo $languages[$a];
$a++;
}

//for loop
for ($i=0; $i < 17 ; $i++) { 
  echo $i;
}


//to write a function
function(){
    echo $age;
}

?>


<?php

$strr="thos";
echo $strr;
$len=strlen($strr);
$word=str_word_count($strr);
$rev=strrev($strr);
echo $len;
echo $word;
echo $rev;

?>
</div>
    
</body>
</html>