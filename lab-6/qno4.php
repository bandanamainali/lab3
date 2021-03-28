<?php
$name = "bandana";
 echo strlen($name); //for counting length
 echo "   ";
echo strtoupper($name);//changing string in upper case

$numbers = [10, 15, 12, 20, 6, 2];
echo "Array<br>";
foreach ($numbers as $number) {
	echo "$number ";
}
echo "<br><br>Array Functions<br><br>";
echo "Length of array<br>";
echo count($numbers);
echo "<br>Array Push 100<br>";
array_push($numbers, 100);
foreach ($numbers as $number) {
	echo $number."<br>";
}
echo "<br>Array POP 100<br>";
array_pop($numbers);
foreach ($numbers as $number) {
	echo $number."<br>";
}
echo "<br>Array Sorted in Ascending Order<br>";
sort($numbers);
foreach ($numbers as $number) {
	echo $number."<br>";
}
?>