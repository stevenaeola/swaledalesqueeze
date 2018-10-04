<?php
function overview(){
   print "<h1>Course Details</h1>";
}
   

function rhcontent(){
   box("<h1>Tutors</h1>
<p>The guest tutors for the 2018 squeeze are <b>Iris Bishop</b> (duet)
<b>Michael Jary</b> (English) and <b>John Spiers</b> (Anglo). Our regular tutors are  <b>Alex Wade</b> (English), <b>Harry Scurfield</b> (Anglo), <b>Paul Walker</b> (English/Anglo), <b>Carolyn Wade</b> (Band)  and <b>Dave Ball</b> (Band/English). Together they provide workshops covering a whole range of concertina playing for different abilities, systems and styles.
</p>");

  box("<h1>Timetable</h1>
<p>
The weekend starts on Friday 18th May. We have two informal sessions including the Dotty session, with written music provided for the tunes. Saturday includes teaching workshops in the morning and afternoon, an informal tea-time concert and a ceilidh in the evening in Reeth, with the band for the ceilidh and the 'spots' provided by participants. There are more workshops on Sunday morning before the farewell concert on Sunday afternoon, again in Reeth, featuring spots from the tutors and their workshop groups. </p>");

/*
You can download more details on the <a href='2016/SwaledaleProgramme2016.pdf'>exact timings</a> and <a href='2016/SwaledaleWorkshopDetails2016.pdf'>workshop details</a>.</p>");
*/


  box("<h1>Other features</h1>
<p>
On Friday afternoon there is a walk around Swaledale for those who wish to join it. We also have Dave Elliott's concertina clinic and Chris Algar's (Barleycorn Concertinas) emporium. Families and friends are welcome too - they may enjoy the area's many craft shops, tearooms and outstanding walks and are welcome to bring other musical instruments for joining in sessions or the ceilidh band. 
</p>");

 }

function lhcontent(){
	 makeLinks(links());
}

include "template.php";
?>
