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
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "vertrigo";
        $dbname = "db_project";
       
		$fname = $_POST['first_name'];
		$lname = $_POST['userlast'];
		$faname = $_POST['userfather'];
		$datebirth = $_POST['date_birth'];
		$telnumb = $_POST['tel_numb'];
		$companyname = $_POST['company_name'];
		$permanentaddress = $_POST['permanent_address'];
		$yourlevel = $_POST['your_level'];
		$email = $_POST['e_mail'];
		$degreeprogram = $_POST['degree_program'];


    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mydb (fname, lname, fathername, DoB)
VALUES ('$fname','$lname', '$faname', '$datebirth')";

if (mysqli_query($conn, $sql)) {
  echo " <h1 style = color:red; > New record created successfully </h1>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
		
		/*
		if((empty($uname)) || (empty($userlast)) || (empty($userfather)) || (empty($datebirth)) || (empty($telnumb)) || (empty($companyname)) || (empty($permanentaddress)) || (empty($yourlevel)) || (empty($email)) || (empty($degreeprogram)))
		{
		echo "<h2><font color=red>Enter * Field</font></h2>";
		}
		else
		{
		echo "<h2First Name;" .$uname ."</h2>";
		echo "<h2Father Name;" .$userfather ."</h2>";
		echo "<h2>Date of Birth: " . $datebirth . "</h2>";
		echo "<h2>Tel: " . $telnumb . "</h2>";
		echo "<h2>High School: " . $companyname . "</h2>";
		echo "<h2>Permanent Address: " . $permanentaddress . "</h2>";
		echo "<h2>Your level: " . $yourlevel . "</h2>";
		echo "<h2>Email: " . $email . "</h2>";
		echo "<h2>Degree Program: " . $degreeprogram . "</h2>";
		}
		*/
		
		
		?>
        
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
