<?php
for($x=1;$x<=3;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "\n";
}
?>
<?php
$n = 3; 
echo "n = " . $n . "\n";
$count = A;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "\n";
   }
?>
<?php
$n=3;
$row=3;
for($i=1; $i<=$row; $i++)
{
for($j=3; $j>=$i; $j--)
{
echo " ";
echo $j;
echo" " ;

}
echo "\r\n";
}
?>