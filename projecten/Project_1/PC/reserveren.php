<?php 
 $naam = htmlspecialchars($_POST['naam']);
 $email = htmlspecialchars($_POST['email']);
 $prijsklasse = htmlspecialchars($_POST['prijsklasse']);
 $tijdstip = htmlspecialchars($_POST['tijdstip']);
 $aantal = htmlspecialchars($_POST['aantal']);
 $film = htmlspecialchars($_POST['film']);
 
 if (!$naam) {
 echo "U heeft geen naam ingevuld!";
 exit; }

 if (!$email) {
 echo "U heeft geen e-mailadres ingevuld!";
 exit; }

 else {

 $tijd = time();
 $datum = strftime("%d/%m/%y %H:%M");
 $ip = getenv("REMOTE_ADDR");
 $message = "Er is een reservering plaats gevonden op de website van Filmpje op de $datum.
 ___________________________________
 Reservering: \n \n Naam: " . $naam . "\n E-mail: ".$email." \n Film: ".$film." \n Aantal tickets: ".$aantal." \n Prijsklasse: ".$prijsklasse." \n Tijdstip: ".$tijdstip."
 ------------------------------------";

 $mailadres = "filmpje-bioscoop@hotmail.nl";
 $message = str_replace ("<br>","\n", $message);
 mail("$mailadres", "Reservering van www.filmpje.nl",
 $message, "From: " . $email . "");

 echo "Uw bericht is met succes verzonden. We helpen u zo snel mogelijk."; 
 }
 ?>