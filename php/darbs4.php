<?php
session_start();
if (!isset($_SESSION['session_username'])) {
    // Если пользователь не авторизован, перенаправляем на index.php
    header("Location: index.php");
    exit;
}
if ($_GET['do'] == 'logout') {
    // Noņem sesijas mainīgo 'admin' un iznīcina sesiju
    unset($_SESSION['session_username']);
    session_destroy();
}
?>

<?php
include 'includes/header.php';
?>

<content class="container-fluid mh-100">

    <div class="container">
        <h1>4.Darbs</h1>
        <?php
        session_start(); // Start the session
        
        include 'config.php';

        // Check if the user is logged in
        if (isset($_SESSION['session_username'])) {
            // Get the login name from session
            $login = $_SESSION['session_username'];

            // Prepare the SQL statement to get the current user's data
            $stmt = $conn->prepare('SELECT id, login, email, password, birthday, year, `group`, technologies FROM reg_user WHERE login = ?');
            $stmt->bind_param('s', $login); // Bind the login parameter
        
            // Execute the query
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if the user exists
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<br>" . "User ID: " . htmlspecialchars($row['id']) . "<br>";
                echo "Login: " . htmlspecialchars($row['login']) . "<br>";
                echo "E-pasts: " . htmlspecialchars($row['email']) . "<br>";
                echo "Parole: " . htmlspecialchars($row['password']) . "<br>";
                echo "Dzimšanas diena: " . htmlspecialchars($row['birthday']) . "<br>";
                echo "Kurss: " . htmlspecialchars($row['year']) . "<br>";
                echo "Grupa: " . htmlspecialchars($row['group']) . "<br>";
                echo "Tehnoloģijas: " . htmlspecialchars($row['technologies']) . "<br>";
            } else {
                echo " Lietotājs nav atrasts.";
            }

            // Free the result and close the statement
            $result->free();
            $stmt->close();
        } else {
            echo " <br>Lietotājs nav pieteicies.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>

        <a href="darbs4.php?do=logout">Iziet</a>

    </div>

    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
</content>

<?php
include 'includes/footer.php';
?>
</body>

</html>