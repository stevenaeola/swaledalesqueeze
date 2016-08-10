<?php
function overview(){
   print "<h1>Swaledale 2016 Details</h1>
The Swaledale Squeeze is a convivial weekend of concertina playing, 
meeting friends, a concert, a ceilidh, sessions, Black Sheep bitter,
walks, the comfort of <a
href='http://www.yha.org.uk/find-accommodation/yorkshire-dales-south-pennines/hostels/grinton-lodge/index.aspx'>Grinton
Lodge</a> and fantastic scenery – what  
more could a conertina player ask for?  Everything is centred on <a href='http://www.yha.org.uk/find-accommodation/yorkshire-dales-south-pennines/hostels/grinton-lodge/index.aspx'>Grinton Lodge</a> (a former shooting lodge), now a Youth Hostel, based just outside Reeth, in the picturesque setting of Swaledale in the Yorkshire Dales.";
}
 

function rhcontent(){
   box("<h1>Concertina weekend 20-22 May 2016</h1>
<p>The guest tutors for the 2016 squeeze are Brian Peters (Anglo),
Iris Bishop (Duet) and 
Alex Wade (English), with additional workshops from Paul McCann (Duet)
and Rob Say (English). Our regular tutors are Harry Scurfield (Anglo), Paul Walker (English/Anglo), Carolyn Wade (Band)  and Dave Ball (Band/English).</p>
");
	box("<h1>Details</h1>
<p>
You can look at
<ul><li><a href='LetterToParticipants.pdf'>Letter to participants</a></li>
<li><a href='SwaledaleProgramme2016.pdf'>Programme and timetable</a></li>
<li><a href='SwaledaleWorkshopDetails2016.pdf'>Workshop details</a></li>
</p>

");
	
}

function lhcontent(){
	 
makeLinks(links());
}
include "../template.php";
?>
