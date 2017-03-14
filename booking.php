<?php
function overview(){
   print "<h1>Booking</h1>
If you want to book on to the Swaledale Squeeze then fill in the form on this page, or download the <a href='2017/SwaledaleBooking2017.pdf'>paper version</a>.";
}

function rhcontent(){
  extract($_POST);

  $priceList = "<table class='prices'>";
  $priceList .="<tr><th>Accommodation Type</th><th>Adults</th><th>Non-players</th><th>Children</th></tr>\n";
  $accomForm = "";
  foreach(accomPrices() as $accom => $accomDetails){
     $title = $accomDetails['title'];
     $accomForm .= "<input class='calculate' type='radio' name='accom' value='$accom'/> $title<br/>\n";
     $priceList .= "<tr>";
     foreach($accomDetails as $thing => $accomPrice){
        $priceList .= "<td>$accomPrice";
	$priceList .= "</td>";
     }
     $priceList .= "</tr>\n";
  }
  $priceList .= "</table>\n";
  
  box("<h1>Prices</h1>
<p>All prices are in pounds per person</p>
$priceList
");

  box("
You can use this form to book: the total cost is calculated for you in the middle of the page.
<form action='bookingthanks.php' method='post'>

<input type='hidden' name='cost' id='cost'/>
<table>
<tr><td>Number of people*</td><td>
<input class='calculate' type='text' size='2' name='adults' value='$adults'/> Adults<br/>
<input class='calculate' type='text' size='2' name='nonplayers' value='$nonplayers'/> Adults (non-players)<br/>
<input class='calculate' type='text' size='2' name='children' value='$children'/> Children<br/>
</td></tr>


<tr><td>Accommodation type*</td><td>
$accomForm </td></tr>
<tr><th>Total cost</th><th>£<span id='costdisplay'></th></tr>
<tr><td>Name(s)*</td><td><input type='text' name='name' size='50' value='$name'></td></tr>
<tr><td>Email*</td><td><input type='text' name='email' size='50'  value='$email'></td></tr>
<tr><td>Postcode*</td><td> <input type='text' name='postcode' size='20'  value='$postcode'></td></tr>
<tr><td>Telephone</td><td> <input type='text' name='tel' size='20'  value='$tel'></td></tr>
<tr><td>Car registration</td><td><input type='text' name='car' size='20'  value='$car'></td></tr>
<tr><td>Type of concertina</td><td>
<input type='radio' name='ctype' value='english'> English<br/>
<input type='radio' name='ctype' value='anglo'> Anglo<br/>
<input type='radio' name='ctype' value='duet'> Duet<br/>
</td></tr>
<tr><td>System (if Duet) e.g. McCann, Crane</td><td><input name='system' size='20' value='$system'> </td></tr>

<tr><td>Special dietary requirements</td><td><textarea cols='50' rows='2'
name='special'>$special</textarea></td></tr>
<tr><td>Comments</td><td><textarea cols='50' rows='2'
name='comments'>$special</textarea></td></tr>
</table>
* required fields<br/>
<input type='submit' value='Make Booking'/>
</form>
");
?>
<script type='text/javascript'>

function calcCost(){

<?php
   print "var prices = " .json_encode(accomPrices()) .";\n"
?>
    var adults = Number($('[name=adults]').val());
    if(!adults){
       adults = 0;
    }
    var children = Number($('[name=children]').val());
    if(!children){
	children = 0;
    }   
    var nonplayers = Number($('[name=nonplayers]').val());
    if(!nonplayers){
	nonplayers = 0;
    }
    var people = adults + children + nonplayers;
    if(people == 0){
    	return "";
    }
/*
    var otley = $('[name=otleyconcert]').val();
    var otleyCost = 0;
    if(otley>0){
       otleyCost = otley*8;
    }
*/
//    alert("adults " + adults + " children " + children + " nonplayers " + nonplayers + " people " + people);
    var accom = $('input:radio[name=accom]:checked').val();
    var accomCost;
//    alert("accom " + accom + " prices " + prices[accom]['adults']);
    accomCost = adults*prices[accom]['adults']
              + children*prices[accom]['children']
              + nonplayers*prices[accom]['nonplayers'];
/*
var podCost;
    if(accom == 'pod_large'){
      podCost = 98;
    }
    else if(accom == 'pod_small'){
    		 podCost = 80;
		 }
    else{
      podCost = 0;
    }
    */
//    totalCost = accomCost + podCost + otleyCost;
//    totalCost = accomCost + podCost;
    totalCost = accomCost;
    return totalCost;
}

function validate(){
    var adults = Number($('[name=adults]').val());
    if(!adults){
       adults = 0;
    }
    var children = Number($('[name=children]').val());
    if(!children){
	children = 0;
    }   
    var nonplayers = Number($('[name=nonplayers]').val());
    if(!nonplayers){
	nonplayers = 0;
    }
    var people = adults + children + nonplayers;
    if(people == 0){
    	alert ("Please specify how many people");
	return false;
    }

    var accom = $('input:radio[name=accom]:checked').val();
    if(!accom){
        alert ("Please choose accommodation type");
	return false;
    }

    var email = $('[name=email]').val().trim();;
    var name = $('[name=name]').val();
    var address = $('[name=address]').val();
    if(email.length == 0 || name.length == 0 || address.length ==0){
       alert("Please enter name, email and postcode");
       return false;
    }
    return true;
}

function updateCost(){
   var cost = calcCost();
   $('[name=cost]').val(cost);
   $('#costdisplay').html(cost);
}

$('.calculate').change(updateCost);
$('form').submit(validate);
</script>             

<?php
}


include "template.php";
?>
