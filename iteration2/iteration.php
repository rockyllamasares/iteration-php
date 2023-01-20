<!DOCTYPE html>
<html>
<head>
    	<meta charset="utf-8">
		<meta name="viewport"content="width=device-width,initial-scale=1">
	
<title>ITretion_lab_activity_2
</title>
<style type="text/css">
table{
      height: 200px;
  width:100%;
}
#firstColor{
    background-color:  #4da6ff;
}
#secondColor{
    background-color: #e6f7ff;
}
</style>
</head>
<body>

Borrowed Amount:
<?php 
$_POST["borrowed_amount"];
echo number_format($_POST["borrowed_amount"],0,'.',','); 
?><br>
Terms:
<?php
$_POST["terms"];
echo $_POST["terms"];
if ($_POST['terms'] == 1){
    echo " year";
}else{
    echo " year's";
}
?>
<?php 
$amount = $_POST["borrowed_amount"];
$term = $_POST["terms"];

//$amount=$borrowed*$term;
$terms =$term*12;
$month=12*$term;

$interestrate_2percent = 0.02;
$interestrate_3percent = 0.03;
$interestrate_5percent = 0.05;
$interestrate_7percent = 0.07;
$interestrate_8percent = 0.08;


if ($amount >= 1 and $amount <= 10000){
    $interestrate=$interestrate_2percent;
}
elseif ($amount > 10001 and  $amount <= 30000){
    $interestrate=$interestrate_3percent;
}
elseif ($amount > 30001  and  $amount <= 50000){
    $interestrate=$interestrate_5percent;
}
elseif ($amount > 50001 and  $amount <= 100000){
    $interestrate=$interestrate_7percent;
}
elseif($amount > 100000){
    $interestrate=$interestrate_8percent;
}
?>

<br><br>
<table>

<tr style="background-color:#0059b3;">
<td><center>Months</center></td>
<td><center>Outstanding Balance</center></td>
<td><center>Principal</center></td>
<td><center>Interest</center></td>
<td><center>Monthly Amortization </center></td>

</tr>
<!--first months ///////////////////////////////-->
<tr id="firstColor">
<td><center>
<?php  
$month_1=1;
echo $month_1;
   ?> 
</td></center>
<td><center>
<?php
if($month_1=1){
    echo number_format("$amount",2);
}
?>
</td></center>

<td><center>
<?php 
$principal = $amount / $month;
echo number_format("$principal",2);

?>
</td></center>
<td><center>
<?php
$interest_1 = $amount *  $interestrate;
echo number_format("$interest_1",2);
?>
</td></center>
<td><center>
<?php
$monthly_amortization_1=$principal + $interest_1;
echo number_format("$monthly_amortization_1",2);
?>
</td></center>
</tr>

<!--2nd months ///////////////////////////////-->

<tr id="secondColor">
<td><center>
    <?php
    if($month_2=2){
    echo $month_2;
}
?>
</td>
<td><center>
    <?php
    $amount_2= $amount-$principal;
    echo number_format("$amount_2",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_2= $amount_2*$interestrate;
    echo number_format("$interest_2",2);
    ?>
    
</td></center>
<td><center>
    <?php
    $monthly_amortization_2=$principal+$interest_2;
    echo number_format("$monthly_amortization_2",2);
    ?>
    
</td></center>
</tr>
<!--3rd months ///////////////////////////////-->

<tr id="firstColor">
<td><center>
    <?php
    if($month_3=3){
    echo $month_3;
}
?>
</td></center>
<td><center>
    <?php
    $amount_3=$amount_2-$principal;
    echo number_format("$amount_3",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_3=$amount_3*$interestrate;
    echo number_format("$interest_3",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_3=$principal+$interest_3;
    echo number_format("$monthly_amortization_3",2);
    ?>
</td></center>
</tr>

<!--4th months ///////////////////////////////-->

<tr id="secondColor">
<td><center>
    <?php
    if($month_4=4){
    echo $month_4;
}
?>
</td></center>
<td><center>
    <?php
    $amount_4=$amount_3-$principal;
    echo number_format("$amount_4",2);
    ?>
    
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_4=$amount_4*$interestrate;
    echo number_format("$interest_4",2);
    ?>
</td></center>
<td><center>
     <?php
    $monthly_amortization_4=$principal+$interest_4;
    echo number_format("$monthly_amortization_4",2);
    ?>
</td></center>
</tr>
<!--5th months ///////////////////////////////-->

<tr id="firstColor">
<td><center>
    <?php
    if($month_5=5){
    echo $month_5;
}
?>
</td></center>
<td><center>
    <?php
    $amount_5=$amount_4-$principal;
    echo number_format("$amount_5",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_5=$amount_5*$interestrate;
    echo number_format("$interest_5",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_5=$principal+$interest_5;
    echo number_format("$monthly_amortization_5",2);
    ?>
</td></center>
</tr>
<!--6th months /////////////////////////////-->
<tr id="secondColor">
<td><center>
    <?php
    if($month_6=6){
    echo $month_6;
}
?>
</td></center>
<td><center>
    <?php
    $amount_6=$amount_5-$principal;
    echo number_format("$amount_6",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_6=$amount_6*$interestrate;
    echo number_format("$interest_6",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_6=$principal+$interest_6;
    echo number_format("$monthly_amortization_6",2);
    ?>
</td></center>
</tr>
<!--7th months ///////////////////////////////-->
<tr id="firstColor">
<td><center>
    <?php
    if($month_7=7){
    echo $month_7;
}
?>
</td></center>
<td><center>
     <?php
    $amount_7=$amount_6-$principal;
    echo number_format("$amount_7",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_7=$amount_7*$interestrate;
    echo number_format("$interest_7",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_7=$principal+$interest_7;
    echo number_format("$monthly_amortization_7",2);
    ?>
</td></center>
</tr>
<!--8th months ///////////////////////////////-->

<tr id="secondColor">
<td><center>
    <?php
    if($month_8=8){
    echo $month_8;
}
?>
</td></center>
<td><center>
     <?php
    $amount_8=$amount_7-$principal;
    echo number_format("$amount_8",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_8=$amount_8*$interestrate;
    echo number_format("$interest_8",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_8=$principal+$interest_8;
    echo number_format("$monthly_amortization_8",2);
    ?>
</td></center>
</tr>
<!--9th months ///////////////////////////////-->

<tr id="firstColor">
<td><center>
    <?php
    if($month_9=9){
    echo $month_9;
}
?>
</td></center>
<td><center>
     <?php
    $amount_9=$amount_8-$principal;
    echo number_format("$amount_9",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_9=$amount_9*$interestrate;
    echo number_format("$interest_9",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_9=$principal+$interest_9;
    echo number_format("$monthly_amortization_9",2);
    ?>
</td></center>
</tr>
<!--10th months ///////////////////////////////-->
<tr id="secondColor">
<td><center>
    <?php
    if($month_10=10){
    echo $month_10;
}
?>
</td></center>
<td><center>
     <?php
    $amount_10=$amount_9-$principal;
    echo number_format("$amount_10",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_10=$amount_10*$interestrate;
    echo number_format("$interest_10",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_10=$principal+$interest_10;
    echo number_format("$monthly_amortization_10",2);
    ?>
</td></center>
</tr>
<!--11th months ///////////////////////////////-->
<tr id="firstColor">
<td><center>
    <?php
    if($month_11=11){
    echo $month_11;
}
?>
</td></center>
<td><center>
    <?php
    $amount_11=$amount_10-$principal;
    echo number_format("$amount_11",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
    <?php
    $interest_11=$amount_11*$interestrate;
    echo number_format("$interest_11",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_11=$principal+$interest_11;
    echo number_format("$monthly_amortization_11",2);
    ?>
</td></center>
</tr>
<!--12th months ///////////////////////////////-->
<tr id="secondColor">
<td><center>
    <?php
    if($month_12=12){
    echo $month_12;
}
?>
</td></center>
<td><center>
    <?php
    $amount_12=$amount_11-$principal;
    echo number_format("$amount_12",2);
    ?>
</td></center>
<td><center>
    <?php
   $principal = $amount / $month;
echo number_format("$principal",2);
    ?>
</td></center>
<td><center>
     <?php
    $interest_12=$amount_12*$interestrate;
    echo number_format("$interest_12",2);
    ?>
</td></center>
<td><center>
    <?php
    $monthly_amortization_12=$principal+$interest_12;
    echo number_format("$monthly_amortization_12",2);
    ?>
    </center>
</td>
</tr>

<tr id="firstColor">

<td colspan="3" style="text-align:right;">
    <b>
        Total
    </b>
</td>
<td><center>
    <b><?php
    $total_interest=$interest_1+$interest_2+$interest_3+$interest_4+$interest_5+$interest_6+$interest_7+$interest_8+$interest_9+$interest_10+$interest_11+$interest_12;
    echo number_format("$total_interest",2);
    ?></b>
    </center>
</td>
<td><center>
   <b> <?php
    $total_monthly_amortization =$monthly_amortization_1+$monthly_amortization_2+$monthly_amortization_3+$monthly_amortization_4+$monthly_amortization_5+$monthly_amortization_6+$monthly_amortization_7+$monthly_amortization_8+$monthly_amortization_9+$monthly_amortization_10+$monthly_amortization_11+$monthly_amortization_12;
    echo number_format("$total_monthly_amortization",2);
    ?>
    </b>
</center></td>
</tr>


</table>
</body>
</html>