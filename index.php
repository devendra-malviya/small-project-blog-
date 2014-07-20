<?php
session_start();
include 'db_config.php';

if(isset($_POST['adminlogin']))
{
	if($_POST['password']=='dev')
	{
		$_SESSION['logintrue']=1;	
	}
	else
		echo "<script>alert('Wrong Password');</script>";	
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Old Blog Template - Free CSS Layout</title>
<meta name="keywords" content="free css layout, old blog template, CSS, HTML" />
<meta name="description" content="Old Blog Template - free website template provided by TemplateMo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<link rel="stylesheet" type="text/css" href="tabcontent.css" />
<script type="text/javascript" src="tabcontent.js"></script>
<script type="text/javascript" src="index_files/jquery.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
</head>
<body>

	<div id="templatemo_header_panel">
    	<div id="templatemo_title_section">
				<h1>SMALL PROJECT</h1>
	 </div>
    </div> <!-- end of templatemo header panel -->
    
    <div id="templatemo_menu_panel">
    	<div id="templatemo_menu_section">
            <ul>
			
			<?php
			
			include 'header.php';
			?>
            </ul> 
		</div>
    </div> <!-- end of menu -->
    
	<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                    
                    <div class="container" style="border:2px solid;">           
<?php
include 'db_config.php';
/* Display all articles */

$result=mysqli_query($con,"SELECT  * from minor where status=1");

while($row=mysqli_fetch_array($result))
{
	echo '<b>' .$row['subject'] . ':</b>' ;
	echo '<br>';   /* to change the line */
	echo $row['article'] . '<br>';
	echo '<br><br>';
}


?>




						
            <br><br><br><br><br><br>
  
</div>

                  </div>
            
                </div>
                </div> <!-- End of a post-->
                
               
                
            </div> <!-- end of content left -->
        
           <div class="templatemo_right_section">
				
				
				
				<?php
				if(!isset($_SESSION['logintrue']))
		        {
				?>
		      	  <a href="#" onclick="$('#login').css('display','inline')" style = "color:white">If you are Admin click here</a>
					<span id="login" style="display:none">
					<form action="" method="post">
					<input style="position:fixed;top:265px;left:860px" type='password' placeholder='password' name='password'>
					<input type='submit' value="login" name='adminlogin'style="position:fixed;top:265px;left:1005px">
					</form>
				
					</span>
					
				<?php
				  }
				   else
				  {
				    echo "<a href='logout.php'>Logout</a>";
				  }
				
				?>
					
					
					
					
           </div>
                
	    </div> <!-- end of content -->
    </div> <!-- end of content container -->
    
</body>
</html>