<?php
$abjad=array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
sort($abjad);

$clength=count($abjad);
for($x=0;$x<$clength;$x++)
   {
   echo $abjad[$x];
   echo "<br>";
   }
?>