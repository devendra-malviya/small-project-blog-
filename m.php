
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
                    <div class="post_title">
                    	small Project</div>
                    <div class="post_info">
                    	Posted by <!--<a href="http://www.templatemo.com" target="_blank">-->Devendra Malviya</a>, June 7, 2012 at 10:12 am.
                    </div>
                    <div class="post_body">
                        <body>
                    <div class="container" style="border:2px solid;">  



<?php
$server = "";
$username = "root";
$password="";
$database="minordatabase";
$con=mysqli_connect($server,$username,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $title_of_article=$_POST['subject'];
  $content_of_article=$_POST['article'];
  $category=$_POST['typeofinfo'];
  $sql="INSERT INTO `minor`(`id`, `subject`, `article`, `category`, `status`) VALUES (0,'$title_of_article','$content_of_article','$category',0)";
   mysqli_query($con,$sql);
   
 ?>
 Thank You for submitting the article.<br>
 It needs a manual approval before it can be posted in our website!
 
 
 
   <br><br><br>
  
</div>
</body>
                  </div>
              <div class="post_comment">
          <!--          	<a href="#">No Comment</a>  -->
                    </div> 
                </div>
                </div> <!-- End of a post-->
                
               
                
            </div> <!-- end of content left -->
        
            <div id="templatemo_content_right"              
                
            </div> <!-- end of right content -->
	    </div> <!-- end of content -->
    </div> <!-- end of content container -->


    
</body>
</html>