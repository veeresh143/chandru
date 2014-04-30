<HTML>
<HEAD>
<title>Criminal Data Maintainance System</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="image/x-icon" type="image/shortcut icon" href="http://ksp.gov.in/home-ifx/favicon.ico">
<LINK REL="STYLESHEET" TYPE="text/css" HREF="css/stylesheet.css">


</HEAD>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0"><LINK href="css/stylesheet2.css" type=text/css rel=stylesheet>
<SCRIPT language="JavaScript" src="javascript/chrome.js" type=text/javascript></SCRIPT>
<SCRIPT language="JavaScript" src="javascript/swfobject.js" type=text/javascript></SCRIPT>
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
 <form method="post" name="FIR" action="complaint_exec.php">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td bgcolor="#335566"><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center"><img src="../home-ifx/x.gif" width="1" height="10"></td>
        </tr>
      <tr>
        <td width="150" align="center" bgcolor="#FFFFFF"><a href="index.php"><img src="images/logo1.jpg" alt="KSP Home" width="119" height="100" border="0"></a></td>
        <td align="center" bgcolor="#FFFFFF">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
              <td align="right">&nbsp;
            </tr>
	<tr>

              <td align="center"><a href="http://www.ksp.gov.in/home/index.php"><img src="images/title.png" width="500" height="60" border="0"></a></td>
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

  <!--------------------- code added-------------------------->
              <UL>

                   &nbsp;&nbsp;&nbsp;&nbsp; <LI><A HREF="index.php">Home</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;

                  &nbsp;&nbsp;&nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu4>OnlineCompliant</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;
              &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu2>Login</A></LI> &nbsp;&nbsp; &nbsp;&nbsp;

		 &nbsp;&nbsp; &nbsp;&nbsp;<LI><A HREF="#" rel=dropmenu13>Contact Us </A></LI>  &nbsp;&nbsp; &nbsp;&nbsp;

   <UL/>

           <!--------------------- code added-------------------------->
             <!--1st drop down menu -->
            <div class=dropmenudiv id=dropmenu1 style="WIDTH: 200px">
            </div>
            <div class=dropmenudiv id=dropmenu2 style="WIDTH: 200px">

            <A HREF="admin_login.php"><img src="images/formbullet.gif" border=0>Admin</A>
            <A HREF="staff_login.php"><img src="images/formbullet.gif" border=0>Staff</A>
      </div>

            <div class=dropmenudiv id=dropmenu4 style="WIDTH: 200px">
            <A HREF="public_login.php"><img src="images/formbullet.gif" border=0>Post Your Complaint</A>

            <A HREF="view_complaint_status.php"><img src="images/formbullet.gif" border=0>View Complaint Status</A>


            </div>


			 <div class=dropmenudiv id=dropmenu13 style="WIDTH: 200px">
	       <A HREF="/home/contact-us.php"><img src="images/formbullet.gif" border=0>Mail Us</A>

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

      <marquee><h1> POST YOUR COMPLAINT HERE </h1></marquee>

    <table align="center" class="table" cellspacing="6" width="85%">
      <tr class="formfieldheading">

        <td colspan="3">
         <strong>Complaint Details</strong>
        </td>
      </tr>
       <tr>
        <td><img src="images/formbullet.gif">&nbsp;&nbsp;Complaint ID<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="complaint_id" type=text id="complaint_id" size=40 value='' maxlength=30 >
        </td>

      </tr>
        <tr>
        <td><img src="images/formbullet.gif">&nbsp;&nbsp;Type of case<font color=red>*</font> : </td>
        <td>
            <select name="type_of_case" id="type_of_case">
                <option value="General">General</option>
                <option value="Murder">Murder</option>
                <option value="Thief">Thief</option>
                <option value="Rape">Rape</option>
                <option value="Dowry">Dowry</option>
                <option value="Kidnap">Kidnap</option>
            </select>
        </td>
      </tr>
      <tr>
        <td><img src="images/formbullet.gif">&nbsp;&nbsp;Complaint Against<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="complaint_against" type=text id="complaint_against" size=40 value='' maxlength=30 >
        </td>

      </tr>
      <tr>
        <td width="40%" valign="top">

          <img src="images/formbullet.gif">&nbsp;&nbsp;Description<font color=red>*</font> :</td>

        <td width="60%" colspan="2">
     <!--    <input name=cand_name type=text maxlength=30 id=cand_name value=''' >\ -->
                <textarea size="20" id="description" name="description"></textarea>


         </td>
      </tr>

     <tr>
     <td> <input type="submit" value="SUBMIT" name="Submit"></td>
    &nbsp;&nbsp;
      <td> <input type="reset" name="Reset" value="Reset"></td>
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
          <TD vAlign="center" align="center"><div class="footer"><a href="index.php" class="textlink">Home</a> | <a href="aboutus.php" class="textlink">About Us</a> | <a href="contactus.php" class="textlink">Contact Us</a>  | <a href="http://mail.ksp.gov.in" class="textlink">Email Login</a> | <a href="sitemap.php" class="textlink">Site Map</a></div></TD>

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
