<?php

$name = "ken";
echo "my name is ".$name;
if(!empty$name)
{
 echo"这是"$name;
}else{
 echo"整错了";
}
$num = rand(1,50);
$info = "";
switch ($num){
	case 1:
		$info = "一等奖"；
		break；
	case 2：
		$info = "二等奖";
		break；
	case 3:
		$info = "三等奖";
		break;
	case 4:
		$info = "很遗憾，没有中奖";
	
}

echo $info ;