<html>
<head>

</head>
<body>
Enter Value for 1st number :
<?php
echo $_POST["value_for_1st_number"];
?><br>
Enter Value for 2nd number :
<?php
echo $_POST["value_for_2nd_number"];
?><br>
<?php
$first_number = $_POST["value_for_1st_number"];
$second_number = $_POST["value_for_2nd_number"];
$counter = $_POST["number_display"];
?>

<b>
<?php
echo $first_number." ".$second_number." ";
$number = $first_number + $second_number;

?>
</b>
<?php

for($counter; $counter != 0; $counter-- )
{
    $number = $first_number + $second_number;
    $first_number = $second_number;
    $second_number = $number;

    echo $number." ";

}
?>
</body>
</html>