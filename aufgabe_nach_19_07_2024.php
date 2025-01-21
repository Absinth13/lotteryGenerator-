<?php 

// Aufgabe 1: Über ein Formular soll es möglich sein eine PLZ und einen Ort einzugeben.
// Wird das Formular abgeschickt, soll folgender Satz angezeigt werden:
// "Die PLZ XXXXX gehört zu YYYYYYYYY."
// XXXXX und YYYYYYYYY sollen durch die eigegebene PLZ und den Ort ersetzt werden.

// echo'<pre>';
// print_r ($_POST); 
// echo '</pre>';
// ?>


<form action="" method="post">
<input type="text" name="plz" placeholder="PLZ"><br>
<input type="text" name="ort" placeholder="Ort"><br>
<input type="submit" name="senden" vale="send">

</form>
//<?php 

// if(isset($_POST["senden"])){
//     $plz = trim ($_POST["plz"]);
//     $ort = trim($_POST["ort"]);
//     echo "Die PLZ $plz gehört zu $ort."
// } -->

//  






// Aufgabe 2a: 
// Legen Sie ein Array an mit sieben Obstsorten. Mischen Sie das Array zufällig durch. 
// Geben Sie alle sieben Obstsorten untereinander aus.  
// Nutzen Sie dafür die foreach-Schleife.

$obst = ['Melone', 'Apfel','Birne','Kiwi', 'banane','Anana','Nektarine' ];
shuffle($obst);

foreach($obst as $value){
    echo $value . '<br>';
}



echo '<hr>';
// Aufgabe 2b:
// Prüfen Sie, ob in dem Array eine "Birne" enthalten ist und geben eine passende Meldung aus.
$obst = ['Melone', 'Apfel','Birne','Kiwi', 'banane','Anana','Nektarine' ];

if(in_array('Birne', $obst)){
    echo 'Birne im Array erhalten';
}else {
    'Birne nicht im Array enthalten';
}
echo '<hr>';


// Aufgabe 3: 
// Schreiben Sie einen Lottozahlen-Generator. Es sollen 6 verschiedene Lottozahlen im 
// Bereich von 1 - 49 angezeigt werden.
// Optionale Erweiterung:
// Sortieren Sie die Lottozahlen der Größe nach aufsteigend.


// $lotto =["13","37","36","01","08","22"];
// sort($lotto);
// echo'<pre>';
// print_r($lotto);
// echo '</pre>';


//resultado
// (
//     [0] => 01
//     [1] => 08
//     [2] => 13
//     [3] => 22
//     [4] => 36
//     [5] => 37
// ) 

$zahlen = range(1,49);
shuffle($zahlen);
for($i = 0; $i<6; $i++){
    $lotto [] = $zahlen [$i];
}

sort($lotto);
foreach($lotto as $value){
    echo $value . '';
}