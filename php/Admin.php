<?php
// Sāk sesiju
session_start();

// Pārbauda, vai sesijā nav saglabāta 'admin' vērtība (lietotājs nav pieslēdzies)
if (!$_SESSION['admin']) {
    // Ja lietotājs nav pieslēdzies, tiek novirzīts uz Register.php
    header("Location: enter.php");
    exit;
}

// Pārbauda, vai URL parametra 'do' vērtība ir 'logout' (lietotājs vēlas izrakstīties)
if ($_GET['do'] == 'logout') {
    // Noņem sesijas mainīgo 'admin' un iznīcina sesiju
    unset($_SESSION['admin']);
    session_destroy();
}

include 'config.php';
if (
    $result = mysqli_query($conn, 'SELECT id, login, email FROM
reg_user ORDER BY id')
) {
    echo "<br>Reģistrētie lietotāji: <br>";
    /* Vaicājuma rezultatu izvade */
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'] . ". " . $row['login'] . " (" . $row['email'] . ")";
    }
    /* Atbrīvot izmantoto atmiņu */
    mysqli_free_result($result);
}
/* Aizvērt savienojumu */
mysqli_close($conn);
?>


<!-- Saiti uz lapu, kas ļauj lietotājam izrakstīties -->
<a href="admin.php?do=logout">Iziet</a>