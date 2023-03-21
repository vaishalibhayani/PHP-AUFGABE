<?php

$vorname=$_POST["vname"];
$Nachname=$_POST["nname"];
$password=$_POST["password"];
$cmassword=$_POST["cmassword"];
$email=$_POST["email"];
$handynummer=$_POST["handynummer"];
$firmename=$_POST["firmename"];
$stadt=$_POST["stadt"];
$postleitzahl=$_POST["postleitzahl"];
$geburtstag=$_POST["geburtstag"];
$geschlecht=$_POST["geschlecht"];

if($password == $cmassword)
{
    echo "ich heiße " .$vorname."</br>";
    echo "Mein Nachname ist " .$Nachname."</br>";
    echo "Mein Email-address ist " .$email."</br>";
    echo "Mein handynummer ist " .$handynummer."</br>";
    echo "Ich arbeite bei " .$firmename."</br>";
    echo "Ich wohne in  " .$stadt."</br>";
    echo "Mein postleitzahl ist " .$stadt."</br>";
    echo "Mein Geburtstag datum ist " .$geburtstag."</br>";
    echo "Mein geschlecht ist " .$geschlecht."</br>";
}else
{
    echo "Passwort und Bestätigung stimmen nicht überein.";
}
?>
