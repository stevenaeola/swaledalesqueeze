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

box("<h1>Cancelled: Concertina weekend 15-17 May 2020 </h1>
<p>Sadly we feel that we have little option but to cancel this year's event, due the ongoing situation with coronavirus
</p>
");

/*
box("
Use the navigation links on the left hand side to find out 
ore about the <a href='course.php'>tutors and course details</a>, <a href='accommodation.php'>accommodation</a> and <a href='booking.php'>booking</a>
");
*/

box("<img src='images/friendly_concertina.jpg' alt='friendly concertina' height='313' align='center'/>   ");

}


function lhcontent(){
	 
makeLinks(links());
}

include "template.php";
?>
