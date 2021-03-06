<!DOCTYPE html>
<meta charset=utf-8>
<html>
<head>
  <title>OMW - Contact</title>
  <link REL="StyleSheet" TYPE="text/css" HREF="../styles.css">
  <link rel="stylesheet" type="text/css" href="../lightbox/dist/css/lightbox.css" media="screen">
  <link rel="stylesheet" href="../jquery-ui/jquery-ui.css">
  <script src="../jquery-ui/external/jquery/jquery.js"></script>
  <script src="../jquery-ui/jquery-ui.js"></script>

</head>




<body>

<table class="title" id="pages" border="0" border-collapse="collapse">
<tr>
<td>Contact</td>
</tr>
</table>




<div id="maincontent">
<p>Want to tell me about some awesome orthographical curio you've just discovered? To inform me of the existence of a giant prehistoric fish I don't know about? To report poor <a href="https://xkcd.com/1015/" target="_blank">kerning</a>? To ask me where to buy the awesome swing chair depicted on the first page (hint: <a href="https://www.pier1.com/Swingasan%C2%AE---Circles/2664201,default,pd.html" target="_blank">here</a>)? Please feel to get in touch using the form below! Limericks (PG please) are encouraged. 
</p>


<?php
if (!isset($_POST['name']))    /* display the contact form */
{
?>
<form  action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="action" value="submit">
<input name="name" type="text" value="Your Name" size="30"/>
<input name="email" type="text" value="Your Email" size="30"/>
<input name="subject" type="text" value="Subject" size="30"/>
<textarea name="message" value="Your message" rows="7" cols="30"></textarea>
<input type="submit" value="Submit"/>
</form>
<?php
}

else                /* send the submitted data */
{
$to = "olivia.waring@gmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$enquiry = "Name: $name\n\n";
$enquiry .= "Email Address: $email\n\n";
$enquiry .= "Message: $message\n\n";
$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
if (($name=="")||($email=="")||($message==""))
{
echo "All fields are required, please fill <a href=\"\">the form</a> again.";
}
else{      
$subject="Message sent using your contact form";
mail($to, $subject, $enquiry, $headers);
echo "Message sent! Thank you! :)";
}
}

?>
<table class="copyright" border="0" border-collapse="collapse">
<tr>
<td>This website was designed and built by Olivia M. Waring using HTML, CSS, and JavaScript, © 2015-2018. She's pretty certain that copyright sign is meaningless in this context, but she's including it because it looks cool.</td>
</tr>
</table>
</div>

<div id="posters">
<table class="menu" id="pages" border="0" border-collapse="collapse">
<col width="20">
<col background-color="#9ACD32" width="180" border-radius="4px">

<!--<tr>
<td></td>
<td text-align="center" height="220px">
images could go here
</td>
</tr>-->

<tr>
<td></td>
<td class="col2" border-radius="20px"><a href="..">Home</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../About">About</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../SciTech">Science and Technology</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../LangLing">Languages and Linguistics</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../PerfArts">Performing Arts</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../Journalism">Armchair<br>Journalism</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../BitsBobs">Bits and Bobs</a></td>
</tr>
<tr>
<td align="center"><img src="../eggplant.jpg" width=30></td>
<td class="current">Contact</td>
</tr>

</table>

</div>

<script>
$(function() {

    var $sidebar   = $("#posters"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    
});
</script>

<script type="text/javascript" src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>