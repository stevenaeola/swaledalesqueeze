<?php
function overview(){
   print "<h1>Course Details</h1>
";
}
   

function rhcontent(){
   box("<h1>Tutors</h1>
<p>The guest tutors for this year's squeeze are Brian Peters (Anglo),
Iris Bishop (Duet) and 
Alex Wade (English), with additional workshops from Paul McCann (Duet)
and Rob Say (English). Our regular tutors are Harry Scurfield (Anglo), Paul Walker (English/Anglo), Carolyn Wade (Band)  and Dave Ball (Band/English). Together they provide workshops covering a whole range of concertina playing for different abilities, systems and styles.
</p>");

  box("<h1>Timetable</h1>
<p>
The weekend starts on Friday 20th May. We have two informal sessions including the Dotty session, with written music provided for the tunes. Saturday includes teaching workshops in the morning and afternoon, an informal tea-time concert and a ceilidh in the evening at Reeth Memorial Hall, with the band for the ceilidh and the 'spots' provided by participants. There are more workshops on Sunday morning before the farewell concert on Sunday afternoon, again in Reeth Memorial Hall, featuring spots from the tutors and their workshop groups. More details on the exact timings and workshop titles will follow.
</p>");

  box("<h1>Other features</h1>
<p>
On Friday afternoon there is a walk around Swaledale for those who wish to join it. We also have Dave Elliott's concertina clinic and Chris Algar's (Barleycorn Concertinas) emporium on Saturday. Families and friends are welcome too - they may enjoy the area's many craft shops, tearooms and outstanding walks and are welcome to bring other musical instruments for joining in sessions or the ceilidh band. 
</p>");
 }


function lhcontent(){
	 makeLinks(links());
}

include "template.php";
?>
