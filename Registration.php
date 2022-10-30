<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('lpendovski@fvm.ukim.edu.mk'); //<<---Put your email address here
$formproc->AddRecipient('petkov@fvm.ukim.edu.mk');
$formproc->AddRecipient('florinap@fvm.ukim.edu.mk');

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Days of Veterinary Medicine 2014</title>

 <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='Scripts/gen_validatorv31.js'></script>
      
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Days of veterinary medicine 2015</title>
<meta name="keywords" content="Wooden Blog Template, HTML, CSS" />
<meta name="description" content="Wooden Blog Template, HTML CSS layout available for free of charge" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

<!--[if lte IE 7]>
<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<script type="text/javascript" src="js/jquery.min.1.2.6.js"></script>
<script type="text/javascript" src="js/jquerycssmenu.js"></script>
<script type="text/javascript" src="js/jquery.min.1.3.2.js"></script>

<!--
<style type="text/css">
<!--
p.MsoNormal {
margin:0pt;
margin-bottom:.0001pt;
text-autospace:none;
font-size:10.0pt;
font-family:"Times New Roman","serif";
}

</style>
<style type="text/css">
<!--
p.MsoNoSpacing {
margin:0pt;
margin-bottom:.0001pt;
text-autospace:none;
font-size:10.0pt;
font-family:"Times New Roman","serif";
}
.style22 {font-size: 12px}
.style10 {color: #CC0000; font-weight: bold; }
.titlovi {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-style: normal;
	font-weight: bold; background-color:#013C96; color:#fff; padding:10px;
}
.style34 {
	font-size: 16pt;
	color: #09398D;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 12pt;
}
.style37 {font-weight: bold}
.style38 {color: #000099}
.style39 {color: #0000FF}

</style>
-->
</head>

<body style="background-image:url('images/templatemo_content_box_middle.png');">
      
      
<div class="post_box">
				<div class="date_box">
                	<p>Registration</p><!-- *************************NASLOV-->
                </div> <!-- end of date box -->
                
                <div class="post_body">
                       	
                        
                        <div class="post_content" style="font-size:13px;">
	<center>					
<h3>Register Here</h3><br />
</center>
      		  
               <p id="tekst" style="padding-left:10px;">The <a href="Registration Form DVM2015.pdf" target="_blank" class="style38"><strong>registration form</strong></a>  can be submitted on line or via e-mail, mail and fax too.</p>
              
            
            
            <!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>
<legend></legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' style='display:none;'/>

<div class='short_explanation'><font color="#800000" >*</font> required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<br />
<center>

<div style="background-color:#800000; ">
<p style="font-size:large; font-weight:bold; text-align:center;">PERSONAL INFORMATION</p>
</div>

<table><tr><td>
<div class="clear"></div>
<div class='container'>
    <label for='name' >Full Name<font color="#800000">*</font>: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="80" /><br/>
    <span id='contactus_name_errorloc' class='error'></span></div>

<div class='container'>
    <label for='degree' >Professional degree:</label><br/>
    <input type='text' name='degree' id='degree' value='<?php echo $formproc->SafeDisplay('degree') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
<div class="clear"></div>

<div class='container'>
    <label for='title' >Title:</label><br/>
    <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="300" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>

<div class='container'>
    <label for='address' >Address:</label><br/>
    <input type='text' name='address' id='address' value='<?php echo $formproc->SafeDisplay('address') ?>' maxlength="80" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
<div class="clear"></div>

<div class='container'>
    <label for='institution' >Institution:</label><br/>
    <input type='text' name='institution' id='institution' value='<?php echo $formproc->SafeDisplay('institution') ?>' maxlength="100" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
</td><td>

<div class='container'>
    <label for='postalcode' >Postal Code:</label><br/>
    <input type='text' name='postalcode' id='postalcode' value='<?php echo $formproc->SafeDisplay('postalcode') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>

<div class="clear"></div>

<div class='container'>
    <label for='country' >Country:</label><br/>
    <input type='text' name='country' id='country' value='<?php echo $formproc->SafeDisplay('country') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>


<div class='container'>
    <label for='phone' >Phone Number<font color="#800000">*</font>:</label><br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
    <span id='contactus_phone_errorloc' class='error'></span></div>
<div class="clear"></div>
<div class='container'>
    <label for='fax' >Fax:</label><br/>
    <input type='text' name='fax' id='fax' value='<?php echo $formproc->SafeDisplay('fax') ?>' maxlength="15" /><br/>
    <!--<span id='contactus_name2_errorloc' class='error'></span>-->
</div>

<div class='container'>
    <label for='email' >Email Address<font color="#800000">*</font>:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span></div>

<div class="clear"></div>

</td></tr></table>

<br>
<div style="background-color:#800000; ">
<p style="font-size:large; font-weight:bold; text-align:center;">ACCOMPANYING PERSON/S</p>
</div>

<table><tr><td>
<div class="clear"></div>
<div class='container'>
    <label for='person1' >Person 1 Full Name: </label><br/>
    <input type='text' name='person1' id='person1' value='<?php echo $formproc->SafeDisplay('person1') ?>' maxlength="80" /><br/>
</div>

<div class='container'>
    <label for='person2' >Person 2 Full Name: </label><br/>
    <input type='text' name='person2' id='person2' value='<?php echo $formproc->SafeDisplay('person2') ?>' maxlength="80" /><br/>
</div>
<div class="clear"></div>
</td><td>
<div class='container'>
    <label for='person3' >Person 3 Full Name: </label><br/>
    <input type='text' name='person3' id='person3' value='<?php echo $formproc->SafeDisplay('person3') ?>' maxlength="80" />
    <br/>
</div>
<div class="clear"></div>

<div class='container'>
    <label for='person4' >Person 4 Full Name: </label><br/>
    <input type='text' name='person4' id='person4' value='<?php echo $formproc->SafeDisplay('person4') ?>' maxlength="80" />
    <br/>
</div>
<div class="clear"></div>
</td></tr></table>
<br />

<div style="background-color:#800000; ">
<p style=" font-weight:bold;">1. PAYMENT OF CONFERENCE FEES</p>
</div>
<div class="clear"></div>


<table style="text-align:center;"><tr><td  align="left" valign="middle">
<div class='container3'> <label>Participants<font color="#800000">*</font></label> </div>
</td><td>
<div class='container2'>
    <label for='100e_Participants_before_June' ><font color="yellow">Before June 30, 2015</font></label><br/>
    <input name='100e_Participants_before_June' type='checkbox' id='100e_Participants_before_June' value='<?php echo $formproc->SafeDisplay('100e_Participants_before_June') ?>' />100 €</div>

</td><td style="padding-left:20px;">

<div class='container2'>
    <label for='120e_Participants_after_June' ><font color="yellow">After June 30, 2015</font></label><br/>
    <input name='120e_Participants_after_June' type='checkbox' id='120e_Participants_after_June' value='<?php echo $formproc->SafeDisplay('120e_Participants_after_June') ?>' />120 €</div>
<div class="clear"></div>
</td></tr>
<tr><td align="left" valign="middle">
<div class="clear"></div>
<div class='container3'><label>Accompanying Persons<font color="#800000">**</font></label></div>
</td><td>
<div class='container2'>
    <label for='70e_Accompanying_Persons_before_June' ></label><br/>
    <input name='70e_Accompanying_Persons_before_June' type='checkbox' id='70e_Accompanying_Persons_before_June' value='<?php echo $formproc->SafeDisplay('70e_Accompanying_Persons_before_June') ?>' />
    70 €</div>
</td><td style="padding-left:20px;">

<div class='container2'>
    <label for='100e_Accompanying_Persons_after_June' ></label><br/>
    <input name='100e_Accompanying_Persons_after_June' type='checkbox' id='100e_Accompanying_Persons_after_June' value='<?php echo $formproc->SafeDisplay('100e_Accompanying_Persons_after_June') ?>' />
    100 €</div>
<div class="clear"></div>
</td></tr>
<tr><td align="left" valign="middle">

<div class='container3'><label>Residents/Students<font color="#800000">*</font></label></div>
</td><td>
<div class='container2'>
    <label for='70e_Residents_Students_before_June' ></label><br/>
    <input name='70e_Residents_Students_before_June' type='checkbox' id='70e_Residents_Students_before_June' value='<?php echo $formproc->SafeDisplay('70e_Residents_Students_before_June') ?>' />
    70 €</div>

	</td><td style="padding-left:20px;">

<div class='container2'>
    <label for='100e_Residents_Students_after_June' ></label><br/>
    <input name='100e_Residents_Students_after_June' type='checkbox' id='100e_Residents_Students_after_June' value='<?php echo $formproc->SafeDisplay('100e_Residents_Students_after_June') ?>' />
    100 €</div>
<div class="clear"></div>
</td></tr></table>


	 			  		 <table><tr ><td colspan="2" style="padding-bottom:10px;">
                            <b><font color="#800000">*</font> Conference Fee  includes:</b>
							</td></tr><tr><td align="left" valign="top">
                              <font color="#800000">&#X25CE;</font> conference kit<br>
<!--                              <font color="#800000">&#X25CE;</font> abstract book<br>-->
                              <font color="#800000">&#X25CE;</font> coffee breaks<br><br>
							  </td><td align="left" valign="top">
                               <font color="#800000">&#X25CE;</font> one gala dinner ticket<br>
                               <font color="#800000">&#X25CE;</font> luncheons<br><br>
                           </td>
							<tr><td colspan="2" style="padding-bottom:10px;">
                           <b><font color="#800000">**</font> Accompanying  Persons Program Fee includes:</b>
                            </td></tr>
							<tr><td align="left" valign="top">
                              <font color="#800000">&#X25CE;</font> coffee breaks<br>
                              <font color="#800000">&#X25CE;</font> one gala dinner ticket
							  </td><td align="left" valign="top">
                              <font color="#800000">&#X25CE;</font> luncheons
                            </td></tr></table>
                        
                      
<br>

<div style="background-color:#800000; ">
<p style=" font-weight:bold;">2. ACCOMODATION AND SOCIAL PROGRAM</p>
</div>
<div class="clear"></div>

<table style="text-align:center;"><tr><td  align="left" valign="middle">
<div class='container5'><label>Participants/Accompanying <br>Persons/Residents/Students</label></div>
</td><td>
<div class='container4'>
    <label for='100e_Accomodation_Social_before_Jne' ><font color="yellow">Before June 30, 2015</font></label><br/>
    <input name='100e_Accomodation_Social_before_Jne' type='checkbox' id='100e_Accomodation_Social_before_Jne' value='<?php echo $formproc->SafeDisplay('100e_Accomodation_Social_before_Jne') ?>' />100 €</div>

</td><td>
<div class='container4' style="padding-left:5px;">
    <label for='120e_Accomodation_Social_after_June' ><font color="yellow">After June 30, 2015</font></label><br/>
    <input name='120e_Accomodation_Social_after_June' type='checkbox' id='12e_Accomodation_Social_after_June' value='<?php echo $formproc->SafeDisplay('120e_Accomodation_Social_after_June') ?>' />120 €</div>
<div class="clear"></div>
</td></tr><tr><td align="left" valign="middle">
<div class='container5'><label>Guided Ohrid Tour & DINNER <br>at National Macedonian Restaurant</label></div>
</td><td colspan="2">
<div class='container4'>
    <label for='30e_Ohrid_Tour_Dinner' ></label><br/>
    <input name='30e_Ohrid_Tour_Dinner' type='checkbox' id='30e_Ohrid_Tour_Dinner' value='<?php echo $formproc->SafeDisplay('30e_Ohrid_Tour_Dinner') ?>' />30 €</div>

<div class="clear"></div>
</td></tr><table>
<br>
 <table><tr ><td colspan="2" style="padding-bottom:10px;">
                            <b><font color="#800000">*</font> Participants/Accompanying  Persons/Students <strong>accommodation fee</strong> includes: </b>
							</td></tr><tr>
							<td colspan="2" align="left" valign="top">
                              <font color="#800000">&#X25CE;</font> accommodation for 3 days (breakfasts, diners)<br>
                              <font color="#800000">&#X25CE;</font> welcome cocktail<br><br>
                              </td></tr>
							<tr><td colspan="2"  style="padding-bottom:10px;">
                           <b><font color="#800000">**</font> Participants/Accompanying  Persons/Students <strong>social program </strong>fee includes:</b>
                            </td></tr>
							<tr><td align="left" valign="top">
                              <font color="#800000">&#X25CE;</font> dinner at National Macedonian Restaurant  (optional)<br>
                              <font color="#800000">&#X25CE;</font> tour to Ohrid city
							  </td><td align="left" valign="top">
                              <font color="#800000">&#X25CE;</font> tickets to all historical museums in Ohrid<br>
							  <font color="#800000">&#X25CE;</font> surely of attendance
                            </td></tr></table>
<br>

                    <p id="tekst"><strong>Please note:</strong> <span >Any College student with a letter of approval from faculty advisor may attend the conference at the special rate.</span></p>    
                    </div>

<br />



<div align="center">
    <input type='submit' name='Submit' value='Submit' style="background-color:#800000; color:white;" />
</div>


<div class="clear"></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");
	
	

    frmvalidator.addValidation("email","email","Please provide a valid email address");
	

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("phone","req","Please provide your phone number");

// ]]>
</script>           

<div>
<br>
<div style="background-color:#800000; ">
<p style="font-size:large; font-weight:bold; text-align:center;">PAYMENT</p>
</div>	
<table border="0" cellpadding="0" cellspacing="0">
 <tr>
                <td colspan="4" ><blockquote>
				
                    <div align="left" id="tekst"><strong>Correspondent bank details (:56:):</strong><br />
                      DEUTSCHE BUNDESBANK  ZENTRALE<br />
                      Address: Wilhelm  Epstein strasse 14, Frankfurt am Main, GERMANY SWIFT BIC: MARK DE FF<br />
                      <strong>Bank details (:57:):</strong><br />
                      NATIONAL BANK OF THE  REPUBLIC OF MACEDONIA<br />
                      Address: Bul  &quot;Kuzman Josifovski Pitu&quot; br. 1<br />
                      1000 Skopje,  MACEDONIA<br />
                      SWIFT BIC: NBRM MK 2X<br />
                      <strong>Final beneficiary (:59:):</strong><br />
                      IBAN: MK07 1007 0100  0011 422<br />
                      <strong>Name: </strong> Faculty of veterinary medicine - Skopje </div>
                </blockquote></td>
              </tr>
              <tr >
                <td colspan="4" style="height:40px; padding-left:10px;">
				
<br>
<div style="background-color:#800000; ">
<p style="font-size:large; font-weight:bold; text-align:center;">GENERAL CONDITIONS</p>
</div>				

				</td>
              </tr>
              <tr>
                <td height="157" colspan="4">
                    <blockquote id="tekst">
                      <p align="justify">&raquo; All payments must be made in <strong>Euros</strong>.<br />
                        &raquo; Please write <strong>“</strong><strong>DAYS OF VETERINARY  MEDICINE 2015</strong><strong>” </strong>and <strong>your full name</strong> on the money transfer. Also, please send us the transfer BANK copy by fax, (transfer order is not valid).<br />
						&raquo; Bank transfer charges must be paid by the participant. 
                      </p>
                      <p align="justify"><strong>CONFERENCE CANCELLATION / REFUND POLICY</strong><br />
                       &raquo; All cancellations made <strong>before June 15st</strong> will be subject to a penalty of 100 €.<br />
                        &raquo; All cancellations made <strong>after June 15st</strong> will be subject to a penalty of the total amount paid. </p>
                    </blockquote></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4"><div align="center"><span class="style10" id="tekst">Please send us copy of the receipt of yout Bank Transfer to avoid any possible mistake on the following mail:</span></div>
                <p style="text-align:center; color:#FFFF00" ><a href="mailto: dvm2015@fvm.ukim.edu.mk"><b>dvm2015@fvm.ukim.edu.mk</b></a></p></td>
              </tr>
              <tr>
                <td height="24" colspan="4">&nbsp;</td>
              </tr>
        
             
              </table>
			  
			  </center>
</div>

     
  </div> <!-- end of post body -->
                            
            </div> <!-- end of a post -->
			
 <div class="cleaner"></div> 
  
    
    </div> <!-- templatemo_content -->
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10371466; 
var sc_invisible=1; 
var sc_security="2938b04a"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web counter"
href="http://statcounter.com/free-hit-counter/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/10371466/0/2938b04a/1/"
alt="web counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>
</html>
