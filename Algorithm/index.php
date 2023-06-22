<?php
include("Class/miniMaxSum.php");
$p=new miniMaxSum();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Algorithm</title>
</head>

<body>
<?php
 $arr = array(2, 5, 3, 1, 4);
 $p->displayArr($arr);
 echo '<br/>';
 $miniSum=$p->miniSum($arr);
 $maxSum=$p->maxSum($arr);
 echo $miniSum;
 echo '&nbsp';
 echo $maxSum;
?>
</body>
</html>