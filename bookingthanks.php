<?php
function overview(){
   print "<h1>Thanks for your booking</h1>
An email confirmation has been sent to you";
}

function rhcontent(){
date_default_timezone_set("Europe/London");

$stuff="Submitted ".date('l dS \of F Y h:i:s A')."\n";
ob_start();
print_r($_POST);
$stuff.=ob_get_contents();
ob_end_clean();

$ouremail = "steven@swaledalesqueeze.org.uk";
mail($ouremail, "Swaledale booking", $stuff, "From: $ouremail");

extract($_POST);

$balance = $cost - 25;
$message = <<<EOT
_Thanks for your booking request._

We can confirm your place on the Swaledale Squeeze once we have received your deposit of £25.

You can either pay by bank transfer (please put your name as reference)

Sort code: 20-37-13 Account number: 50302767

Or send a cheque payable to Swaledale Squeeze at: 

    Steven Bradley
    Annfield House
    Front Street
    Langley Park
    Durham
    DH7 9XE

If you wish you can pay the full amount of £${cost} now or pay the deposit now and the balance of £${balance} by 1st May 2017.

Once I receive your deposit I'll let you know.

Thanks from Steven
EOT;

box( Markdown($message));

mail($_POST['email'], "Swaledale Squeeze: thanks for booking", $message, "From: $ouremail");


  box("We've also sent these instructions to your email address. Thanks again.");
}


include "template.php";
?>
