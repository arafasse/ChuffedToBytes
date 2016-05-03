<!DOCTYPE html>
<meta charset=utf-8>
<html>
<head>
  <title>Contact</title>
  <link REL="StyleSheet" TYPE="text/css" HREF="../styles.css">
  <link rel="stylesheet" type="text/css" href="../lightbox/dist/css/lightbox.css" media="screen">


</head>




<body>

<table class="title" id="pages" border="0" border-collapse="collapse">
<tr>
<td>Contact</td>
</tr>
</table>




<div class="wrapper">
<p class="less"><span class="y">Want to tell me about some awesome orthographical curio you've just discovered? To inform me of the existence of a giant prehistoric fish I don't know about? To report poor <a href="https://xkcd.com/1015/" target="_blank">kerning</a>? To ask me where one can purchase the stupendous swing chair depicted on the homepage (hint: <a href="https://www.pier1.com/Swingasan%C2%AE---Circles/2664201,default,pd.html" target="_blank">here</a>)? Please feel to get in touch using the form below! Limericks (PG please) are encouraged. 
</span>
</p>


<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
?>

    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit" style="font-family:'Trebuchet MS';"> 
    Your name:<br> 
    <input name="Name" type="text" value="" size="70"/><br> 
    Your email:<br> 
    <input name="Email" type="text" value="" size="70"/><br> 
    Your message:<br> 
    <textarea name="Message" rows="15" cols="70"></textarea><br> 
    <input type="submit" value="Say hi!"/> 
    </form> 

<?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['Name']; 
    $email=$_REQUEST['Email']; 
    $message=$_REQUEST['Message']; 
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
</div>

<div id="posters">

   <a data-lightbox="veggies" data-title="Morocco, May 2014" href="images/camels.jpg">
   <img class="displayed" src="images/camels.jpg" width=150 style="border:10px; border-style:solid; border-color:#9ACD32;"></a>
   <br>
   <a data-lightbox="veggies" data-title="China, June 2010" href="images/jumping.jpg">
   <img class="displayed" src="images/jumping.jpg" width=150 style="border:10px; border-style:solid; border-color:#9ACD32;"></a>
   <br>
   <a data-lightbox="veggies" data-title="Words of Wisdom from Ozawa-sensei, August 2012" href="images/ozawa.jpg"><img class="displayed" src="images/ozawa.jpg" width=150 style="border:10px; border-style:solid; border-color:#9ACD32;"></a>
   <br>
   <a data-lightbox="veggies" data-title="Teatime in Oxford, Fall 2012" href="images/tea.jpg"><img class="displayed" src="images/tea.jpg" width=150 style="border:10px; border-style:solid; border-color:#9ACD32;"></a>
   <br>

   
</div>

<table class="menu" id="pages" border="0" border-collapse="collapse">
<col width="50">
<col width="50">
<col width="50">
<col width="50">
<col width="50">
<col width="50">
<col width="50">
<col width="50">
<tr class="row2">
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td align="center"><img src="../eggplant.jpg" width=30></td>
</tr>
<tr class="row1">
<td><a href="../index.html">Home</a></td>
<td><a href="../About/about.html">About</a></td>
<td><a href="../SciTech/scitech.html">Science and Technology</a></td>
<td><a href="../LangLing/langling.html">Languages and Linguistics</a></td>
<td><a href="../PerfArts/perfarts.html">Performing Arts</a></td>
<td><a href="../Journalism/journalism.html">Armchair<br>Journalism</a></td>
<td><a href="../BitsBobs/bitsbobs.html">Bits and Bobs</a></td>
<td class="current">Contact</td>
</tr>

</table>

<br>
<br>

<table class="copyright" border="0" border-collapse="collapse">
<tr>
<td>This website was designed and built by OMW using HTML, CSS, and JavaScript, © 2015. She's pretty certain that copyright sign is meaningless in this context, but she's including it because it makes her feel more legit. Hosted by NearlyFreeSpeech.NET.</td>
</tr>
</table>

<script type="text/javascript" src="../lightbox/dist/js/lightbox-plus-jquery.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67683591-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>