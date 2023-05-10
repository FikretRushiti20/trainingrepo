<?php
	function printNumbers($iStart, $iEnd) {
	  $iStart_time = microtime(true);    // Get the current time in seconds and microseconds
	  for ($i = $iStart; $i <= $iEnd; $i++) {
		if ($i % 3 === 0 && $i % 5 === 0) { // There are cases of 15, 30, 45, 60, etc... meaning the % goes with 3 and also with 5 
		  echo "Hello World<br>";
		} else if ($i % 3 === 0) {
		  echo "Hello<br>";
		} else if ($i % 5 === 0) {
		  echo "World<br>";
		} 
	  }
	  $iEnd_time = microtime(true);      // Calculate the execution time in seconds and microseconds
	  $iExecution_time = round(($iEnd_time - $iStart_time) * 1000, 3);                         // Execution time goes here
	  echo "<br> Average execution time was: " . round($iExecution_time / 100, 6) . "s";     // Output the memory usage and execution time
	}
	if(isset($_POST['number1']) && isset($_POST['number2'])){
	  $iStart = $_POST['number1'];
	  $iEnd = $_POST['number2'];
	  if( !empty($iStart) && !empty($iEnd)) {
		  if($iStart <= $iEnd){
			printNumbers($iStart, $iEnd); // Call function here
		  } else {
			echo "Starting number can`t be greater than ending number<br>";
		  }	  
	  }
	  else
		  echo "Inputs can`t be empty.";
	}
?>
<form method="POST">
  <label for="number1">Starting Number:</label>
  <input type="number" name="number1"><br>
  <label for="number2">Ending Number:</label>
  <input type="number" name="number2"><br>
  <button type="submit">Submit</button>
</form>

