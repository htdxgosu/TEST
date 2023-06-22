<?php
class miniMaxSum{
	//Find miniSum
	public function miniSum($arr)
	{
		$min=0;
		sort($arr);
		for ($i=0;$i<=count($arr);$i++)
		{
			$min=$min+$arr[$i];
			if($arr[$i]==$arr[3])
			{
				break;
			}
		}
		return $min;
	}
	//Find maxSum
	public function maxSum($arr)
	{
		$max=0;
		sort($arr);
		for ($i=0;$i<=count($arr);$i++)
		{
			if($arr[$i]==$arr[0])
			{
				continue;
			}
			$max=$max+$arr[$i];
		}
		return $max;
	}
	//Display Array
	public function displayArr(&$arr){
		for ($i=0;$i<count($arr);$i++){
			echo $arr[$i].'&nbsp';
			}
		}
}
?>