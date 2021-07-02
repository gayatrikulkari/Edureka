<?php

function pattern1($num)
{
    for($i=1;$i<=$num;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo "$i";
        }
      echo "\n";
    }
}

$num = readline("enter a number");
pattern1($num);


function pattern2($num1)
{
    for($i=1;$i<=$num1;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo "$j";
        }
      echo "\n";
    }
}

$num1 = readline("enter a number");
pattern2($num1);
?>