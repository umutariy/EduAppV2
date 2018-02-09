<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
</head>
<body>
	<div>
		<h1>Start Assignment</h1>
		<form method="get" action="index.php/Newquestions/quiz">

			<?php foreach($questions as $rows) { ?>
			<?php $ans_array=array($rows['Answer_1'], $rows['Answer_2'], $rows['Answer_3']);
			shuffle($ans_array); 
			?>

			<p><?=$rows['Assignment_ID']?>.<?=$rows['Question_1']?></p>
			<input type="radio" name="Assignment<?=$rows['Assignment_ID']?>" value="<? $ans_array[0]?>">
			<?=$ans_array[0]?>
			<br>
			<input type="radio" name="Assignment<?=$rows['Assignment_ID']?>" value="<? $ans_array[0]?>">
			<?=$ans_array[1]?>
			<br>
			<input type="radio" name="Assignment<?=$rows['Assignment_ID']?>" value="<? $ans_array[0]?>">
			<?=$ans_array[2]?>
			<br>
			
			<?php } 

			?>

		</form>
		<p> End of form </p>
	</div>

</body>
</html>