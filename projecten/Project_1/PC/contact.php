<?php 
 $naam = htmlspecialchars($_POST['naam']);
 $email = htmlspecialchars($_POST['email']);
 $onderwerp = htmlspecialchars($_POST['onderwerp']);
 $bericht = htmlspecialchars($_POST['bericht']);

 if (!$naam) {
 echo "U heeft geen naam ingevuld!";
 exit; }

 if (!$email) {
 echo "U heeft geen e-mailadres ingevuld!";
 exit; }

 if (!$bericht) {
 echo "U heeft geen bericht ingevuld!";
 exit; }

 else {

 $tijd = time("Europe/Amsterdam");
 $datum = strftime("%d/%m/%y %H:%M", $tijd);
 $ip = getenv("REMOTE_ADDR");
 $message = "" . $naam . " met het e-mailadres " . $email . "  stuurde via contact formulier op de Website het volgende $onderwerp: 
 ___________________________________
 " . $bericht . "
 ------------------------------------";

 $mailadres = "filmpje-bioscoop@hotmail.nl";
 $message = str_replace ("<br>","\n", $message);
 mail("$mailadres", "Bericht van www.filmpje.nl",
 $message, "From: " . $email . "");

 echo "Uw bericht is met succes verzonden. We helpen u zo snel mogelijk."; 
 }
 ?>