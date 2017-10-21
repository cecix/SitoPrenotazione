<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv=refresh content="7; url=index.html">
<title>Prenotazione</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="css/cssprenotazione.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
</head>
<body>
<body>
<hr />

<p style="font-size:20px; text-align:center;"><?php
if(isset($_POST["submit"]))
{


    $fileHandle = fopen('listaprenotazioni.txt', 'a')
            OR die ("Can't open file\n");
	$nome=$_POST["nome"];
	$cognome=$_POST["cognome"];
    $email=$_POST["email"];
	$telefono=$_POST["telefono"];
    $result = fwrite ($fileHandle, $nome . " ");
	if ($result) {
					$result = fwrite ($fileHandle, $cognome . " - ");}
		if ($result) {
							$result = fwrite ($fileHandle, $email . " - ");} 
			if ($result) {
								$result = fwrite ($fileHandle, $telefono . "  \n");}; 	
    if ($result)
         {
             print '<script type="text/javascript">'; 
             print 'alert("Prenotazione Aggiunta!")'; 
             print '</script>';  
        } else {
            print '<script type="text/javascript">'; 
            print 'alert("Impossibile prenotare!")'; 
            print '</script>';  
        };
    fclose($fileHandle);
}
echo "La prenotazione di $nome $cognome &egrave; stata effettuata con successo. <br  />";
    ?></p>
	<hr />
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Il Duca</a></h1>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h2>Prenotazione confermata</h2>
			<span class="byline">Il Duca propone una cucina di alto livello che mescola sapori e suggestioni diverse, evoluzione della tradizione regionale e sintesi perfetta di antichi sapori e nuove esperienze. Una carta dei vini regionali e nazionali.</span>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; All rights reserved. | Design by Il Duca.</p>
</div>
</body>
</html>
