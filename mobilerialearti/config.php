<!-- file i krijuar config.php sherben per konfigurimin apo lidhjen me server dhe databaze ne projektin aktual te krijuar mobilerialearti, pra nese projekti jone e ka ne qellim regjistrimin e nje perdoruesi ose klienti dhe kyqjen e tij ne panelin e punes me te dhenat e shtypura, atehere duhet te lidhet projekti jone ose webaplikacioni me serverin dhe databazen perkatese per komunikim dhe procesim, ne e kemi krijuar nje databaze me emrin mobilerialearti e cila ka dy tabela per bartjen dhe ruajtjen e te dhenave, ndersa kemi serverin apache qe ofron adresen localhost, kur lidhja eshte e suksesshme, webaplikacion / server / databaze procesimi i te dhenave behet poashtu me sukses, ne rast se lidhja deshton, ska procesim te te dhenave. -->

<?php // eshte etiketa hapese e gjuhes PHP

//te krijohen variabla te cilat i referohen te dhenave te shtypura per komunikim dhe lidhje
//keto variabla bartin te dhenat e serveri dhe databazes andaj duhet te jene te sakta
//krijimi i variables ne php behet me shprehjen var ose shenjen e dollarit $

$server = "localhost"; //serveri localhost i cili gjendet ne paisjen tone lokale
$user = "root"; //root eshte perdoresu default me te drejtat e plota ne databaza
$password = ""; //perdoruesi root nuk ka fare fjalekalim rrjedhimisht eshte bosh
$database = "mobilerialearti"; //inicializimi ose lidhja me databazen e krijuar

//deklarata per ta funksionalizuar projektin me te dhenat e shtypura me lart, pra bene lidhjen me server, perdoreusin e databazes dhe me databaze
$conn = mysqli_connect($server, $user, $password, $database);

//kushtezimi i cili tregon se ka deshtu lidhja me te dhenat e lartecekura
if (!$conn)
{
    die("<script>alert('Dicka shkoj gabim, te lutem provo perseri!!!')</script>");
}

?> <!-- etiketa mbyllese e gjuhes PHP -->

