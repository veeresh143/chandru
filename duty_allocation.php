<HTML>
<HEAD>
<title>Criminal Data Maintainance System</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK REL="STYLESHEET" TYPE="text/css" HREF="css/stylesheet.css">
<LINK href="css/stylesheet2.css" type="text/css" rel="stylesheet">

</HEAD>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<SCRIPT language="JavaScript" src="javascript/chrome.js" type="text/javascript"></SCRIPT>
<SCRIPT language="JavaScript" src="javascript/swfobject.js" type="text/javascript"></SCRIPT>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 )
            {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
 <form method="post" name="FIR" action="duty_allocation_exec.php">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td bgcolor="#335566"><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center"><img src="../home-ifx/x.gif" width="1" height="10"></td>
        </tr>
      <tr>
        <td width="150" align="center" bgcolor="#FFFFFF"><a href="admin_success.php"><img src="images/logo1.jpg" width="119" height="100" border="0"></a></td>
        <td align="center" bgcolor="#FFFFFF">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
              <td align="right">&nbsp;
            </tr>
	<tr>

              <td align="center"><a href="admin_success.php"><img src="images/title.png" width="500" height="60" border="0"></a></td>
            	  </tr>
           	   <tr>
              <td align="right"><font color="#666666">Sat, April 20, 2013 </font>
			</td>
              </tr>
		 </table>
            </td>
        </tr>
</table>
      <TABLE width="1000" border="0" align="center" cellPadding="0" cellSpacing="0">
        <TR bgcolor="#45738a">
          <TD height="18" align="right" ><DIV style="PADDING-RIGHT: 0px" align=left>
            <DIV class=chromestyle id=chromemenu>

  <UL>

  &nbsp;&nbsp;&nbsp;&nbsp; <LI><A HREF="admin_success.php">Home</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu2 >Staff Profile</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu3>FIR Genereation </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu4>Investigation </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu5>Duty Allocation </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" >Report </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="contact3.php">Contact Us </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="admin_logout.php" >Logout </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;

<UL/>
   <!--1st drop down menu -->
   <div class=dropmenudiv id=dropmenu1 style="WIDTH: 200px">
   </div>
  <div class=dropmenudiv id=dropmenu2 style="WIDTH: 200px">
  <A HREF="adminstaff.php"><img src="images/formbullet.gif" border=0>Add Staff Member</A>
  <A HREF=""><img src="images/formbullet.gif" border=0>Update Staff Details</A>
 <A HREF="view_staff_details.php"><img src="images/formbullet.gif" border=0>View Staff Details</A>
 </div>
  <div class=dropmenudiv id=dropmenu3 style="WIDTH: 200px">
	       <A HREF="FIR_form.php"><img src="images/formbullet.gif" border=0>FIR Form</A>
               <A HREF="view_FIR_form.php"><img src="images/formbullet.gif" border=0>View FIR Form</A>
            </div>
             <div class=dropmenudiv id=dropmenu4 style="WIDTH: 200px">
	       <A HREF="add_criminal_details.php"><img src="images/formbullet.gif" border=0>Add Criminal Details</A>

            </div>
             <div class=dropmenudiv id=dropmenu5 style="WIDTH: 200px">
	       <A HREF="duty_allocation.php"><img src="images/formbullet.gif" border=0>Allocate Duty</A>
               <A HREF="view_duty_allocation.php"><img src="images/formbullet.gif" border=0>View Duty Allocated</A>

            </div>
    <!--------------------- code added-------------------------->
            <SCRIPT type=text/javascript>
            cssdropdown.startchrome("chromemenu");
        </SCRIPT>
          </DIV></TD>

        </TR>
      </TABLE>
<table width="1000"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <TBODY>
    <TR>
      <TD width="200" align="center" valign="top"><img src="images/banner2.png" width="201" height="294" border="0" usemap="#Map"></TD>
      <TD width="800" align="center">
      <div id="flashcontent">
  This text is replaced by the Flash movie.

</div>
<script type="text/javascript">
   var so = new SWFObject("http://ksp.gov.in/flash/main1.swf", "mymovie", "800", "294", "8", "#ffffff");
   so.addParam("quality", "low");
   so.addParam("wmode", "opaque");
   so.addParam("salign", "t");
   so.write("flashcontent");
</script>
</TD>
      </TR>
    </TBODY>
</table>


   <map name="Map">
  <area shape="rect" coords="15,3,179,29" href="missing_persons.php">
 <area shape="rect" coords="15,78,116,99" href="police_strength.php">
 <area shape="rect" coords="14,125,80,145" href="helpline.php">
 <area shape="rect" coords="12,198,143,219" href="about_FIR.php">

</map>
</td>
  </tr>
</table>

<!-- #EndLibraryItem --><table width="1000"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <TBODY>
    <TR>
      <TD width="200" height="100" align="center" valign="top" bgcolor="#f3f3f3"><!-- #BeginLibraryItem "/Library/home-navi.lbi" --><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="10%">&nbsp;</td>
          <td>&nbsp;</td>

        </tr>
                <tr>
          <td>&nbsp;</td>

        </tr>
                <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td>&nbsp;</td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>

          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><b>Criminal Data Maintainance System<br>
            Hubli - 580031<br>
            Call 100</b></td>

        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>


      </table><!-- #EndLibraryItem --></TD>
      <TD width="600" align="center" valign="top"><br>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="listtable">

    <marquee><h1> WEL COME TO DUTY ALLOCATION</h1></marquee>
 <h4 align="right"><font color="#FF0000">*</font>Mandetory Field</h4>

    <table align="center" class="table" cellspacing="6" width="10%">

      <tr>
         
        <?php

                  require_once ('connect_db.php');
                  echo'<img src="images/formbullet.gif">&nbsp;&nbsp;Staff Name<font color=red>*</font> :';
                  
                   echo '<select  style="width:150px" name="first_name" onChange="f1.submit()"><option value="0">Choose staff Name</option>';
                 // echo'</select>';
                    $s="select first_name from add_staff order by staff_id asc";
                $m=mysql_query($s);

                while($row=mysql_fetch_array($m))
                    {

                    echo "<option value=\"".$row['first_name']."\">".$row['first_name']."</option> \n  ";
                    }

           ?>
       
      </tr>
 <tr>
        <td>
                <img src="images/formbullet.gif">Area<font color=red>*</font> :
        </td>
        <td colspan="2">
          <select name="area" id="area" style="width:150px">
          <option value="0">[ Select Area]</option>
          <option value="Agastya Foundation">Agastya Foundation</option>
          <option value="Arts College">Arts College</option>
          <option value="BVB College">BVB College</option>
          <option value="BVB Back Gate Area">BVB Back Gate Area</option>
          <option value="Chetana College">Chetana College</option>
          <option value="Hans Hotel">Hans Hotel</option>
          <option value="Jain College">Jain College</option>
          <option value="JG College">JG College</option>
          <option value="KIMS Hospital">KIMS Hospital</option>
          <option value="Lingraj Nagar">Lingraj Nagar</option>
           <option value="Rambapuri Kalyan Mantap">Rambapuri Kalyan Mantap</option>
          <option value="Ravi Nagar">Ravi Nagar</option>
           <option value="Sirur Park">Sirur Park</option>
           <option value="Sukruthi College">Sukruthi College</option>
          </select>
        </td>
      </tr>
<tr>
        <td valign="top"><img src="images/formbullet.gif">Date<font color=red>*</font> : </td>
        <td colspan="2">
            <input type="text" name="date" id="date">
          </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">Time_From<font color=red>*</font> : </td>
        <td colspan="2">
            <input type="text" name="time_from" id="time_from">
          </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">Time_To<font color=red>*</font> : </td>
        <td colspan="2">
            <input type="text" name="time_to" id="time_to">
          </td>
      </tr>



    <tr>
        <td>
    &nbsp;&nbsp;
    <input name="submit" align="center" type="submit" value="SUBMIT">
        </td>
        <td>
            &nbsp;&nbsp;
      <input type="reset" name="Reset" value="Reset" align="center">
    </tr>



      </table></TD>
      <TD width="200" align="center" valign="top" bgcolor="#f3f3f3"><table width="95%" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td width="10%">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

       </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></TD>
    </TR>

  </TBODY>
</table>
		 <!--------------------- code added-------------------------->
              		  <!-- #BeginLibraryItem "/Library/home-footer.lbi" -->
<TABLE width="1000" border="0" align="center" cellPadding="0" cellSpacing="0" bgcolor="#ffffff">
        <TR>
          <TD vAlign="center" align="center"><div class="footer"><a href="admin_success.php" class="textlink">Home</a> | <a href="aboutus.php" class="textlink">About Us</a> | <a href="contact3.php" class="textlink">Contact Us</a>  | <a href="http://mail.ksp.gov.in" class="textlink">Email Login</a> | <a href="sitemap.php" class="textlink">Site Map</a></div></TD>

        </TR>
        <TR>
          <TD vAlign="center" align="center">&nbsp;</TD>
        </TR>
        <TR>
          <TD vAlign="center" align="center" height="20"><div class="copyright">Criminals Data Maintainance System</div></TD>
        </TR>
</TABLE>
            	<!--------------------- code added-------------------------->

<!-- #EndLibraryItem --><map name="Map">
  <area shape="rect" coords="228,46,547,145" href="aboutus.php">
</map>
</form>
</body>
</HTML>

