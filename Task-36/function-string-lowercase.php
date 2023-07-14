<?php

// ctype_lower
$str = "laravel";
print ctype_lower($str);
if(ctype_lower($str)){
   echo "all lower case";
}else{
    echo "not in lower case";
}

// ctype_upper
$str = "LARAVEL";
print ctype_upper($str);
if(ctype_upper($str)){
    echo "all upper case";
 }else{
     echo "not in upper case";
 }

 // strlen
 $str = " Hello world!";
 echo strlen($str);



 

?>