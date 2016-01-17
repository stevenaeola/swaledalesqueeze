<?php
function overview(){
   print "<h1>Contact</h1>
";
}
   

function rhcontent(){
box("<h1>Email</h2>
<script language='javascript'>
<!--
var part1 = 'steven';
var part2 = 'swaledalesqueeze.org.uk';
var part3 = 'steven' + '@' + 'swale' + 'dalesqueeze.org.uk';
document.write('<a href=\"mai' + 'lto:' + part1 + '@' + part2 + '\">');
document.write(part3 + '</a>');
// -->
</script>
");

box("<h1>Facebook <img src='images/f_logo.png' width ='20'/></h1>
<p>Join the <a href='http://www.facebook.com/groups/120126508017956/'>Swaledale Squeeze</a> facebook group</p>");
}

function lhcontent(){
	 makeLinks(links());
}

include "template.php";
?>
