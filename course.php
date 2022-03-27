<?php
function overview(){
   print "<h1>Course Details</h1>";
}
   

function rhcontent(){
         box("<h1>Dates for 2020: 15-17 May</h1><p>Booking will be open in early spring 2020</p>");
   box("<h1>Tutors</h1>
<p>The guest tutors for the 2019 squeeze were 
<ul>
<li><b>Jody Kruskal (USA) on Anglo</b></li>
<li><b>Simon Thoumire (Edinburgh) on English</b></li>
<li><b>Tim Laycock (Dorset) on Duet</b></li>
</ul>

 Our regular tutors are  <b>Alex Wade</b> (English), <b>Harry Scurfield</b> (Anglo), <b>Paul Walker</b> (English/Anglo), <b>Carolyn Wade</b> (Band)  and <b>Dave Ball</b> (Band/English). Together they provide workshops covering a whole range of concertina playing for different abilities, systems and styles.
</p>");

  box("<h1>Timetable</h1>
<p>
The weekend starts on Friday evening with informal sessions including the Dotty session, with written music provided for the tunes. Saturday includes teaching workshops in the morning and afternoon, an informal tea-time concert and a ceilidh in the evening in Reeth, with the band for the ceilidh and the 'spots' provided by participants. There are more workshops on Sunday morning before the farewell concert on Sunday afternoon, again in Reeth, featuring spots from the tutors and their workshop groups. </p>");

box("<p> You can see the <a href='2019/SwaledaleProgramme2019.pdf'>2019 timetable</a></p>");



  box("<h1>Other features</h1>
<p>
On Friday afternoon there is a walk around Swaledale for those who wish to join it. We also have Chris Algar's (Barleycorn Concertinas) emporium. Families and friends are welcome too - they may enjoy the area's many craft shops, tearooms and outstanding walks and are welcome to bring other musical instruments for joining in sessions or the ceilidh band. 
</p>");

 }

function lhcontent(){
	 makeLinks(links());
}

include "template.php";
?>
