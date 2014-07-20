<?php
		$current_file = $_SERVER['SCRIPT_NAME'];
		
		if ($current_file == '/minor/index.php') {
          echo '   <li><a href="index.php"  class="current">Home</a></li>
                <li><a href="dev.php">Submit Your Article</a></li>';}
		
		else{
		echo '   <li><a href="index.php" >Home</a></li>
                <li><a href="dev.php"  class="current">Submit Your Article</a></li>';}
				
				
		if(isset($_SESSION['logintrue']))
		{
		
		echo'
             <li><a href="validate.php">Validate Articles</a></li>
			 	
   ';
   }
?>