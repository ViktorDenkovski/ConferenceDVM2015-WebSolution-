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
$formproc->AddRecipient('nakov.mkd@gmail.com'); //<<---Put your email address here


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
<title>Days of Veterinary Medicine 2013</title>

 <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='Scripts/gen_validatorv31.js'></script>
      
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-size: 42px;
}
body {
	background-color: #eee;
}
a:link {
	text-decoration: none;
}
a:hover {
	color: #013C96;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body,td,th {
	font-family: Times New Roman;
	font-size: 11pt;
	margin:0; padding:0;
}
a {
	
	font-size: 11pt;
	font-weight: bold;
	color: #000000;
}
.style14 {font-size: 18px; font-style: italic; color: #FFFFFF;}
.style18 {font-size: 18pt}
.style19 {font-size: 18}
.style21 {
	font-style: italic;
	color: #FFF2DF;
	font-family: "Times New Roman";
	font-size: 16px;
	font-weight: bold;
}
-->
</style>

<style type="text/css">
<!--
p.MsoNormal {
margin:0pt;
margin-bottom:.0001pt;
text-autospace:none;
font-size:10.0pt;
font-family:"Times New Roman","serif";
}
-->
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
-->
</style>
</head>

<body>

<table width="690" border="0"  cellspacing="0">
  
  <tr>
  
   
          <td width="690"  valign="top">
		  <p align="center" class="style34">Thank you for your registration.</p>
   

        </td>
        </tr>
    </table>    
    
   
 
  

<p class="style22">&nbsp;</p>
</body>
</html>
