<?php

include "markdown.php";

function accomPrices(){
   return array(
    "bunks_frimeal" =>
       array("title" => "Youth Hostel (including Friday evening meal)",
             "adults" => 170,
             "nonplayers" => 115,
             "children" => 80,
             "childrennonplayers" => 80),
    "bunks_nofrimeal" =>
       array("title" => "Youth Hostel (no Friday evening meal)",
             "adults" => 165,
             "nonplayers" => 105,
             "children" => 80,
             "childrennonplayers" => 70),
    "tent" => 
       array("title" => "Camping (tent)",
             "adults" => 115,
             "nonplayers" => 55,
             "children" => 25,
             "childrennonplayers" => 25),
    "campervan" => 
       array("title" => "Camping (camper van)",
             "adults" => 115,
             "nonplayers" => 55,
             "children" => 25,
             "childrennonplayers" => 25),
/*    "pod_small" => 
       array("title" => "Pod (small)",
             "adults" => 90,
             "nonplayers" => 35,
             "children" => 15,
             "childrennonplayers" => 0),
    "pod_large" => 
       array("title" => "Pod (large)",
             "adults" => 90,
             "nonplayers" => 35,
             "children" => 15,
             "childrennonplayers" => 0),*/
    "alt" => 
       array("title" => "Alternative accommodation (e.g. B&amp;B)",
             "adults" => 90,
             "nonplayers" => 15,
             "children" => 0,
             "childrennonplayers" => 0)
    );
}

function makeLinks($links){
   foreach($links as $link){
      print "<div class='link'><a href='".$link['url']."'>".$link['link']."</a></div>\n";
   }
}

function links(){
   return  array(	
   array("link" =>"Home", "url" => "index.php"),
//   array("link" =>"Course Details", "url" => "course.php"),
//   array("link" =>"Accommodation", "url" => "accommodation.php"),
//   array("link" =>"Booking", "url" => "booking.php"),
   array("link" =>"Contact", "url" => "contact.php"));
}

function box($content){
?>
      <div class="contentTop"></div>
      <div class="contentMain"> 
	<?php print $content; ?>
     </div>
     <div class="contentBottom"></div>
   	<!--End Content Box -->

<?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="fadedtab.css" />
<link rel="shortcut icon"
 href="./images/ssicon.png" />
<title>Swaledale Squeeze</title>
</head>

<body>
		
        <div id="header">
        	<div class="logo"></div>
            <h1>Swaledale Squeeze</h1>
        </div>
<div id="bottomContent">
	<div class="navColumn"> 
    	<div class="overview">
<?php overview(); ?>
</div>
<?php 
makeLinks(links());
?>        
<div id="navBottom"></div>
    </div>
	<div class="contentColumn">
<?php
rhcontent();
?>
    

<div height='200'/>
	<!-- PLEASE LEAVE THIS AT THE END OF YOUR LAST BOX -->
    <h4><a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a> | <a href="http://www.quackit.com">web tutorials</a> | <a href="http://www.htmlcodes.me">html codes</a> | <a href="http://www.free-templates.me">free templates</a></h4>
    <!-- PLEASE LEAVE THIS AT THE END OF YOUR LAST BOX -->




	</div>

</div>
</body>
</html>
