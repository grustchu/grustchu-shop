<?php
// Datubāzes servera nosaukums
$servername = "localhost";
// Lietotājvārds, lai pieslēgtos datubāzei
$username = "root";
// Parole, lai pieslēgtos datubāzei (parasti tukša vietējai instalācijai)
$password = "";
// Datubāzes nosaukums, kuru vēlamies izmantot
$dbname = "mydatabase";

// Izveido savienojumu ar MySQL datubāzi
$conn = new mysqli($servername, $username, $password, $dbname);

// Pārbauda savienojumu ar datubāzi
if ($conn->connect_error) {
    // Ja ir kļūda, pārtrauc izpildi un parāda kļūdas ziņojumu
    die("Savienojuma kļūda: " . $conn->connect_error);
} else {
    // Ja savienojums ir izveidots veiksmīgi, parāda ziņojumu
    echo 'Savienojums ir izveidots';
}
?>