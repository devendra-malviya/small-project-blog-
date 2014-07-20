<?php
session_start();
include 'db_config.php';


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
<script type="text/javascript" src="tabcontent.js">
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
if(isset($_POST['adminlogin'])|| isset($_SESSION['logintrue']))
{

 

	/* Find the articles that are validated */
	$result=mysqli_query($con,"SELECT * from minor where status=0");
	while($row=mysqli_fetch_array($result))
	{
		if(isset($_POST['v' . $row['id']]))
		{
			//echo 'clicked ' . $row['id'] . 'for validation';
			/* Validate the article */
			mysqli_query($con,"update minor set status=1 where id=" . $row['id']);
			echo "<script>alert('Article has been validated and posted in the blog!');</script>";
			
		}
		if(isset($_POST['i' . $row['id']]))
		{
			//echo 'clicked ' . $row['id'] . 'for ignore';
			/* Ignore the article */
			mysqli_query($con,"update minor set status=-1 where id=" . $row['id']);
			echo "<script>alert('Article has been ignored!');</script>";

		}

	}
	
	
	
	if(isset($_SESSION['logintrue']) ||$_POST['password']=='dev')
	{
		
		$_SESSION['logintrue']='yes';

	
		/* Print table of articles which needs to be validated*/
		echo '<form action="" method="post">
		<table border="1" cellspacing="0" cellpading="1">
			  <tr>
				<td>Id No</td>
					<td>Subject</td>
					<td>Content</td>
					<td>Category</td>
					
					<td>Validate It</td>
					<td>Ignore it?</td></tr>';
		
		$result=mysqli_query($con,"SELECT * from minor where status=0");
		while($row=mysqli_fetch_array($result))
		{
			echo '<tr>
						<td>' . $row['id'] . '</td>
						<td>' . $row['subject'] . '</td>
						<td>' .$row['article'] . '</td>
						<td>' .$row['category'] . '</td>
						<td><button name="v'.$row['id'].'">Validate It</button></td>
						<td><button name="i'.$row['id'].'">Ignore It</button></td>
					</tr>	
						';
						
		}
		echo '</table>';
		
		
		
		
		
	}
	else
		exit('Wrong password!');
}
else
{
	echo "Please enter admin password to continue : 
	<form action='' method='post'>
	<input type='' placeholder='password' name='password'>
	<input type='submit' name='adminlogin'>
	
	
	";
}

if(isset($_SESSION['logintrue']))
{
	echo "<a href='logout.php'>Logout</a>";
}

?>

















						
            
  
</div>

<?php


?>
                  </div>

				  
                </div>
                </div> <!-- End of a post-->
                
               
                
            </div> <!-- end of content left -->
        
          <!--  <div id="templatemo_content_right">
            
            	           	
                
                <div class="templatemo_right_section">
                	If you are Admin <br><a href="#">click here</a>
					
                </div>
                
               -->
         
                
                
                
            </div> <!-- end of right content -->
	    </div> <!-- end of content -->
		<br><br>
    </div> <!-- end of content container -->

</body>
</html>