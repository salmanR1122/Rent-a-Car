<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BS (CS) 2009 - 2013 | Contact</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<?php include "header.php"; ?>
  <div class="body">
    <div class="body_resize">
      <div class="left">
        <h2>Student <span>Registration</span></h2>
        <form action="ok.php" method="post" id="contactform">
          <ol>
            <li>
              <label for="name">First Name*</label>
              <input id="name" name="first_name" class="text" maxlength="30" required onkeypress="return chr(event);"/>
            </li>
             <li>
              <label for="name">Last Name*</label>
              <input id="name" name="userlast" class="text" maxlength="30" onkeypress="return chr(event);" />
            </li>
             <li>
              <label for="name">Father Name*</label>
              <input id="name" name="userfather" class="text" maxlength="30"  onkeypress="return chr(event);"/>
            </li>
             <li>
              <label for="name">Date of birth*</label>
              <input id="name" name="date_birth" class="text" />
            </li>
            <li>
              <label for="email">Tel*</label>
              <input id="email" name="tel_numb" class="text" maxlength="11"  onkeypress="return numb(event);" />
            </li>
            <li>
              <label for="company">High School*</label>
              <input id="company" name="company_name" class="text" maxlength="250"   onkeypress="return chr(event);" />
            </li>
            <li>
              <label for="message">Permanent Address*</label>
              <input id="company" name="permanent_address" class="text" maxlength="250"   onkeypress="return chr(event);" />
            </li>
             <li>
              <label for="message">Your Level*</label>
              <input id="company" name="your_level" class="text" maxlength="20"   onkeypress="return chr(event);" />
            </li>
             <li>
              <label for="message">Email*</label>
              <input id="company" name="e_mail" class="text"required />
            </li>
             <li>
              <label for="message">Degree Program*</label>
              <input id="company" name="degree_program" class="text" maxlength="250"  onkeypress="return chr(event);"  />
            </li>
            <li class="buttons">
              <input type="submit" name="imageField" id="imageField"  value="Register" class="send" />
              <div class="clr"></div>
            </li>
          </ol>
        </form>
        <div class="bg"></div>
      </div>
      <div class="right">
			<img src="images/mmm.jpg"  width="260" height="275" style="margin-top:40px;"/>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <?php include "footer.php"; ?>
<!-- END PAGE SOURCE -->
<!--Script code starts here -->
	<script  language="javascript">
function numb(e)
{
ascii = e.keyCode;
//alert(ascii);

	if(((ascii >=48) && (ascii <=58)) || (ascii ==32))
		return true;
		else 
		return false;
}

function chr(e)
{
ascii = e.keyCode;
//alert(ascii);
if(((ascii >=65) && (ascii <=90)) ||((ascii >=97) && (ascii <=122)) || (ascii ==32))
	return true;
	else 
	return false;
}
	</script>
<!--script code ends here -->
</body>
</html>
