<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BS (CS) 2009 - 2013 | About</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu">
        <ul>
          <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="about.php" class="active"><span> About Us </span></a></li>
          <li><a href="product.php"><span>Vehicle Hire </span></a></li>
          <li><a href="contact.php"><span> Contact Us</span></a></li>
         
        </ul>
      </div>
      <div class="search">
        <form id="form1" name="form1" method="post" action="#">
          <span>
          <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
          </span>
          <input name="b" type="image" src="images/search_1.gif" class="button" />
        </form>
      </div>
      <div class="clr"></div>
      <div class="logo">
        <h1><a href="index.html"><span>Pakistan</span> Rent a Car<br />
          <small>Runs faster. And never breaks</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="body">
    <div class="body_resize">
      <div class="left">
      <table width="100%">
      	<tr>
        	<td>ID</td>
            <td>Name</td>
            <td>Father Name</td>
            <td>Date of Birth</td>
        </tr>
        <?php
		
		$con = mysqli_connect("localhost","root","vertrigo","db_project");
		
		$sql = "SELECT * FROM project_reg";
		
		$rs = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td>".$row['reg_id']."</td>";
			echo "<td><font size=24 color=red>".$row['reg_name']."</font></td>";
			echo "<td>".$row['reg_fname']."</td>";
			echo "<td>".$row['reg_dob']."</td>";
			echo "</tr>";		
		}
		
		
		?>
        </table>
        <div class="bg"></div>
      </div>
      <div class="right">
      
       
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="FBG">
    <div class="FBG_resize">
      <div class="blok">
        <h2>About</h2>
        <img src="images/fbg_img_1.gif" alt="" width="80" height="80" />
        <p>About Us</p>
        <p> <a href="#">Learn more...</a></p>
      </div>
      <div class="blok">
       <h2>Vehicle Hire</h2>
        <ul>
          <li><a href="#">• Budget Cars</a>
          <li><a href="#">• Executive Cars</a></li>
          <li><a href="#">• Luxury Cars</a></li>
          <li><a href="#">• Buses & Vans</a></li>
        </ul>
      </div>
      <div class="blok">
        <h2>Gallery</h2>
        <img src="images/gal_img_1.jpg" alt="" width="68" height="68" /> <img src="images/gal_img_2.jpg" alt="" width="68" height="68" /> <img src="images/gal_img_3.jpg" alt="" width="68" height="68" /> <img src="images/gal_img_4.jpg" alt="" width="68" height="68" /> <img src="images/gal_img_5.jpg" alt="" width="68" height="68" /> <img src="images/gal_img_6.jpg" alt="" width="68" height="68" />
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2011 <a href="#">BS (CS) 2009 - 2013</a> - All Rights Reserved</p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
