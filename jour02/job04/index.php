<?php

$i=0;

while($i<=100):
    if(!($i%3) and !($i%5)){
    echo "<br/>"."FizzBuzz";
     }
    elseif(!($i%5)){
        echo "<br/>"."Buzz";
         }
    elseif(!($i%3)){
        echo "<br/>"."Fizz";
    }
    else{echo "<br/>".$i;}
    $i++;
endwhile;
?>