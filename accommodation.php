<?php
function overview(){
   print "<h1>Accommodation</h1>Grinton lodge is excellent for our purposes and we are made to feel very welcome.  Most people stay in the Youth Hostel in bunk rooms, but others camp in tents or camper vans or stay in local B&B acommodation. Camping pods are also available as an interesting alternative.";
}

function rhcontent(){
  box("<h1>For everybody</h1>
<p>
All of the workshop sessions take place in the Youth Hostel. Coffee and tea are povided in break times. Kegs of the local Black Sheep Ale are available for self-service with an honesty box and other alcoholic drinks are available to buy from the Youth Hostel. You are welcome to bring your own alcohol to the ceilidh but not to consume at Grinton Lodge.
</p>"
);
   box("<h1>Youth Hostel bunks</h1>
<p>Most people stay in the Youth Hostel itself, in comfortable bunk rooms with provided bedding. Meals (breakfast, lunch and dinner) are included for all those in bunks, with an optional Friday evening meal at 7.00.</p>
");

   box("<h1>Camping</h1>
<p>
There is a camping field next to the Youth Hostel which is suitable for tents, although access by car to the camping field is difficult. (Actually, getting in is quite easy, but getting out can be tricky, particularly if the grass is wet.) Camper vans can stay in the courtyard or car park of the Youth Hostel with access to a toilet, but no electric hook-up. Campers are  welcome to use the self-catering kitchen in the hostel.
</p>");

  box("<h1>Pods</h1>
<p>
There are a some self-catering pods in the grounds of the hostel, which are a bit like wooden teepees. Previously these had very few facilities but now have beds and bedding provided.
</p>
");

 box("<h1>Bed and breakfast</h1>
<p>
There is a range of bed and breakfast accommodation in the area which you would need to book independently. We are also offering lunch as an option for those not staying in the youth hostel.
</p>");
}


include "template.php";
?>
