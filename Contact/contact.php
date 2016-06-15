<!DOCTYPE html>
<meta charset=utf-8>
<html>
<head>
  <title>Contact</title>
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




<div class="wrapper">
<p class="less"><span class="y">Want to tell me about some awesome orthographical curio you've just discovered? To inform me of the existence of a giant prehistoric fish I don't know about? To report poor <a href="https://xkcd.com/1015/" target="_blank">kerning</a>? To ask me where to buy the awesome swing chair depicted on the first page (hint: <a href="https://www.pier1.com/Swingasan%C2%AE---Circles/2664201,default,pd.html" target="_blank">here</a>)? Please feel to get in touch using the form below! Limericks (PG please) are encouraged. 
</span>
</p>


<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
?>

<form action="action_page.php" method="get">
Name:<br>
<input type="text" name="fullname">
<br>
Email address:<br>
<input type="text" name="email">
<br>
<br>
<textarea rows="12" cols="150"></textarea>
<br>
<input type="submit" value="Say hi!">
</form>

<?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("olivia.waring@gmail.com", $subject, $message, $from); 
        echo "Message sent - thank you! :)"; 
        } 
    }   
?> 

<br>

<table class="copyright" border="0" border-collapse="collapse">
<tr>
<td>This website was designed and built by Olivia M. Waring using HTML, CSS, and JavaScript, © 2015. She's pretty certain that copyright sign is meaningless in this context, but she's including it because it looks cool.</td>
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
<td class="col2" border-radius="20px"><a href="../index.html">Home</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../About/about.html">About</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../SciTech/scitech.html">Science and Technology</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../LangLing/langling.html">Languages and Linguistics</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../PerfArts/perfarts.html">Performing Arts</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../Journalism/journalism.html">Armchair<br>Journalism</a></td>
</tr>
<tr>
<td></td>
<td class="col2"><a href="../BitsBobs/bitsbobs.html">Bits and Bobs</a></td>
</tr>
<tr>
<td align="center"><img src="../eggplant.jpg" width=30></td>
<td class="current">Contact</td>
</tr>

</table>



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