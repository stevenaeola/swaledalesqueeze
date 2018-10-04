<?php
function overview(){
   print "<h1>Welcome</h1>
The Swaledale Squeeze is a convivial weekend of concertina playing, 
meeting friends, a concert, a ceilidh, sessions, Black Sheep bitter,
walks, the comfort of <a
href='http://www.yha.org.uk/find-accommodation/yorkshire-dales-south-pennines/hostels/grinton-lodge/index.aspx'>Grinton
Lodge</a> and fantastic scenery – what  
more could a conertina player ask for?  Everything is centred on <a href='http://www.yha.org.uk/find-accommodation/yorkshire-dales-south-pennines/hostels/grinton-lodge/index.aspx'>Grinton Lodge</a> (a former shooting lodge), now a Youth Hostel, based just outside Reeth, in the picturesque setting of Swaledale in the Yorkshire Dales.";
}
 

function rhcontent(){

box("<h1>Concertina weekend 18-20 May 2018</h1>
<p>We are delighted to announce that our guest tutors for this year are
<ul>

<li><b>John Spiers (Anglo)</b></li>
<li><b>Michael Jary (English)</b></li>
<li><b>Iris Bishop (Duet)</b></li>
</ul>
They join our dedicated band of regular tutors: <b>Alex Wade</b> (English), <b>Harry Scurfield</b> (Anglo), <b>Paul Walker</b> (English/Anglo), <b>Carolyn Wade</b> (Band) and <b>Dave Ball</b> (Band/English). </p>
");
/*
    box("<h2>Supported by </h2>
        <p>IrishArts Foundation and culture ireland</P>
        <p><img width='30%' src='images/IAFLogo.jpg'></img>
        <img width = '50%' src='images/culture_ireland_logo.jpg'></img></p>
        ");
*/
box("
Use the navigation links on the left hand side to find out 
ore about the <a href='course.php'>tutors and course details</a>, <a href='accommodation.php'>accommodation</a> and <a href='booking.php'>booking</a>
");
 box("<img src='images/friendly_concertina.jpg' alt='friendly concertina' height='313' align='center'/>   ");
}

function lhcontent(){
	 
makeLinks(links());
}
include "template.php";
?>
