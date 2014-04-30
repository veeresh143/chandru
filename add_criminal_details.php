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
 <script>
          var reg = /^[a-zA-Z]+$/;

function is_valid_char(textField)
{

if(!reg.test(textField.value))
{

alert("Please enter characters only");

textField.value="";

textField.focus();

return false;

}

}
 var reg1 = /^[0-9]+$/;

function is_valid_numbers(textField)
{

if(!reg1.test(textField.value))
{

alert("Please enter numbers only");

textField.value="";

textField.focus();

return false;

}

}
      </script>
<form name="f1" action="add_criminal_exec.php" method="post">
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
 
</table>

<table width="1000"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <TBODY>
    <TR>
      <TD width="200" height="100" align="center" valign="top" bgcolor="#f3f3f3"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
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
          <td><b>Criminal Data Matainance System<br>
           Vidyanagar, Hubli -580031 <br>
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


      </table></TD>
      <TD width="600" align="center" valign="top"><br>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="listtable">

   </p><p align="justify" style="margin:1%"><marquee onMouseOver="this.stop()" onMouseOut="this.start()">
      <span class="flashnote" ><h1 color="green"><b >CRIMINAL DETAILS FORM HERE</b></span>

   </marquee>
  </p>

  <DIV class="bodydiv">
  <div class="divheading" align="center">
  </div>
    <table align="center" class="table" cellspacing="6" width="85%">

       <tr class="formfieldheading">
        <td colspan="3">
         <strong>Criminal Details</strong>        </td>
      </tr>
      <tr>
        <td width="40%" valign="top">

          <img src="images/formbullet.gif">&nbsp;&nbsp;First NAME<font color=red>*</font> :</td>

        <td width="60%" colspan="2">
         <input name="first_name" type=text maxlength=30 id="first_name" value='' onKeyUp="javascript:is_valid_char(this);">
         </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Middle  Name<font color=red>*</font> : </td>
        <td colspan="2"><input name="middle_name" type=text maxlength=30 size=40 id="middle_name" value=''  onKeyUp="javascript:is_valid_char(this);">   <br>
          <span class="note">[Please do not use any prefix such as Shri or Dr. etc.]</span></td>

      </tr>
      <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Last Name <font color=red>*</font> : </td>
        <td colspan="2"><input name="last_name" type=text maxlength=30 size=40 id="last_name" value=''  onKeyUp="javascript:is_valid_char(this);">          <br>

      </tr>
       <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Date of Birth <font color=red>*</font> : </td>
        <td colspan="2"><input name="date_of_birth" type=text maxlength=30 size=40 id="date_of_birth" value='' >          <br>

      </tr>
       <tr>
        <td valign="top"><img src="images/formbullet.gif">&nbsp;&nbsp;Age <font color=red>*</font> : </td>
        <td colspan="2"><input name="age" type=text maxlength=30 size=40 id="age" value='' >          <br>

      </tr>
      <tr>
        <td valign="top">
          <img src="images/formbullet.gif">&nbsp;&nbsp;Gender<font color=red>*</font> :        </td>

        <td colspan="2">
        	<select name="gender" id="gender">
		<option value="Male" >Male</option>
                <option value="Feale">Female</option>
                </select>
        </td>
      </tr>
      <tr>

        <td>
         <img src="images/formbullet.gif">&nbsp;&nbsp;Nationality<font color=red>*</font> :        </td>
        <td colspan="2">
          <select name="nationality" id="nationality">
              <option value="Indian">Indian</option>
              <option value="Others">Others</option>
          </select>
        </td>
      </tr>

      <tr>
        <td><img src="images/formbullet.gif">&nbsp;&nbsp;Category<font color=red>*</font> : </td>
        <td><select name="category" id="category">
          <option value="General">General</option>
          <option value="OBC">OBC</option>
          <option value="SC">SC</option>
          <option value="ST">ST</option>
            </select>
        </td>
      </tr>


      <tr class="formfieldheading">

        <td colspan="3">
         <strong>Postal Address</strong>        </td>
      </tr>
      <tr>
        <td>
         <img src="images/formbullet.gif">&nbsp;&nbsp;Line 1<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="line1" type=text id="line1" size=40 value='' maxlength=30>        </td>

      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Line 2<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="line2" type=text id="line2" size=40 value='' maxlength=30 >        </td>

      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Line 3 :        </td>
        <td colspan="2">
        <input name="line3" type=text id="line3" size=40 value='' maxlength=30 >        </td>
      </tr>
      <tr>

        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;District/City<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="district" type=text id="district" size=40 value='' maxlength=30  onKeyUp="javascript:is_valid_char(this);">        </td>
      </tr>
     <tr>

        <td>
                <img src="images/formbullet.gif">&nbsp;&nbsp;State/UT<font color=red>*</font> :
        </td>
        <td colspan="2">
          <select name="state" id="state">
            <option value="0">[ Select State ]</option>
          <option value="Andaman & Nicobar Island">Andaman & Nicobar Island</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadar & Nagar Haveli">Dadar & Nagar Haveli</option>
          <option value="Daman & Diu">Daman & Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu & Kashmir">Jammu & Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Orissa">Orissa</option>
          <option value="Pudduchery">Pudduchery</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttrakhand">Uttrakhand</option>
          <option value="West Bengal">West Bengal</option>
          </select>
        </td>


      </tr>
      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Pincode<font color=red>*</font> :        </td>
        <td colspan="2">
        <input name="pincode" type=text id="pincode" size=4 maxlength=6 value=''  onKeyUp="javascript:is_valid_numbers(this);">        </td>

      </tr>
	        <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Phone with Area Code :
        </td>
        <td colspan="2">
             <input name="phone_no1" type=text id="phone_no1" size=4 maxlength=5 onKeyUp="javascript:is_valid_numbers(this);">
             <input name="phone_no2" type=text id="phone_no2" size=12 maxlength=8 onKeyUp="javascript:is_valid_numbers(this);">
        </td>
      </tr>

      <tr>
        <td>
          <img src="images/formbullet.gif">&nbsp;&nbsp;Mobile :        </td>
        <td colspan="2">
        <input name="mobile" type=text id="mobile" size=15 maxlength=10 value='' onKeyUp="javascript:is_valid_numbers(this);">        </td>
      </tr>
      <tr>
        <td>

          <img src="images/formbullet.gif">&nbsp;&nbsp;E-Mail :        </td>
        <td colspan="2">
        <input name="email" type=text id="email" size=40 value=''>        </td>
      </tr>
      <tr>
          <td src="images/formbullet.gif">&nbsp;&nbsp;Photo </td>
          <td colspan="2"><input type="file" name="pictures[]" /></td>
        </tr>
      <tr>
          <td colspan="2">
              <input type="submit" value="Take Thumb Print" onclick="takeThumbPrint()">

          </td>
      </tr>
      <tr class="box">

          <td align="center">
              <input type="submit" value="Submit">
          </td>

          <td colspan="2" align="center">
              <input type="submit" value="Clear">
         </td>
         
      </tr>
    </table>
  </DIV>
  

 </table>
   </TD>
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
</table>
 </TD>
    </TR>

  </TBODY>
</table>

<TABLE width="1000" border="0" align="center" cellPadding="0" cellSpacing="0" bgcolor="#ffffff">
 <TR>
   <TD vAlign="center" align="center"><div class="footer"><a href="admin_success.php" class="textlink">Home</a> | <a href="aboutus.php" class="textlink">About Us</a> | <a href="contact3.php" class="textlink">Contact Us</a>  | <a href="http://mail.ksp.gov.in" class="textlink">Email Login</a> | <a href="sitemap.php" class="textlink">Site Map</a></div></TD>

</TR>
  <TR>
    <TD vAlign="center" align="center">&nbsp;</TD>
</TR>
 <TR>
   <TD vAlign="center" align="center" height="20"><div class="copyright">Criminal Data Maintainance System  </div></TD>
 </TR>
</TABLE>


<map name="Map">
  <area shape="rect" coords="228,46,547,145" href="aboutus.php">
</map>
</form>
</body>
</HTML>
