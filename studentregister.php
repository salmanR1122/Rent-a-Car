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
<?php //include "header.php"; ?>
  <div class="body">
    <div class="body_resize">
      <div class="left">
        <h2>Contact <span>Us</span></h2>
        <form action="#" method="post" id="contactform">
          <ol>
            <li>
              <label for="name">Your Name*</label>
              <input id="name" name="name" class="text" required onkeypress="return chr(event);"/>
            </li>
             <li>
              <label for="name">Your Name*</label>
              <input id="name" name="name" class="text" required onkeypress="return chr(event);"/>
            </li>
             <li>
              <label for="name">Your Name*</label>
              <input id="name" name="name" class="text" required onkeypress="return chr(event);"/>
            </li>
             <li>
              <label for="name">Your Name*</label>
              <input id="name" name="name" class="text" required onkeypress="return chr(event);"/>
            </li>
            <li>
              <label for="email">E-Mail*</label>
              <input id="email" name="email" class="text" required  />
            </li>
            <li>
              <label for="company">Phone No*</label>
              <input id="company" name="company" class="text"  required onkeypress="return numb(event);" />
            </li>
            <li>
              <label for="message">Your Message*</label>
              <textarea id="message" name="message" rows="6" cols="50" required onkeypress="return chr(event);"></textarea>
            </li>
            <li class="buttons">
              <input type="submit" name="imageField" id="imageField"  value="Send message" class="send" />
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
