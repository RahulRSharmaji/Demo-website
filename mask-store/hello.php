<?php
// echo "Hello World!";

/**
 * Loop
 * 1. For
 * 2. while
 * 3. do...while 
 * 4. foreach
 */

# Print a table of given number

$num = 10;

for($i = 1; $i <= 10; $i++) {
    $res = $num * $i;
    // print "$num x $i = $res <br />";
    // echo "$num x $i = $res <br />";

    printf("%d x %d = %d <br />", $num, $i, $res);
}

# while loop

$num = 10;
$i = 1;

while($i <= 10) {
    $res = $num * $i;
    // print "$num x $i = $res <br />";
    // echo "$num x $i = $res <br />";

    printf("%d x %d = %d <br />", $num, $i, $res);

    $i++;
}

# do..while loop

$num = 10;
$i = 1;

do {
    $res = $num * $i;
    // print "$num x $i = $res <br />";
    echo "$num x $i = $res <br />";

    printf("%d x %d = %d <br />", $num, $i, $res);

    $i++;
} while($i <= 10);


echo " <br/> ";
echo " <br/> ";
echo " <br/> ";
echo " <br/> ";


echo "Fibonacci Series <br/>";

$limit = 10;

$n1=0;
$n2=1;

$x=0;

for($i=0;$i<=$limit;$i++)
{
    echo "$n1";
    $n1=$n1+$n2;
    $n2=$x;
    $x=$n1;
}

echo " <br/> ";
echo " <br/> ";
echo " <br/> ";
echo " <br/> ";

echo "Patterns <br />";



for ($i=1; $i<=5; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	 
}	  	
echo "<br/>";   	
}  


echo "<br/>";

for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo $j." ";
    }
    echo "<br/>";
}

echo "<br/>";

for($i=0;$i<=9;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo $i." ";
    }
    echo "<br/>";
}