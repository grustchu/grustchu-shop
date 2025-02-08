<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="utf-8">
    <title>Tika ievaditi dati</title>
    <link rel="icon" type="image/x-icon" href="../images/logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../css/mystyle.css" rel="stylesheet">
    <script src="../js/myscrypts.js" defer></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="bg-danger text-white text">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.php" class="text-white text-decoration-none">
                    <img src="../images/hska.png" alt="Logo" height="40" width="40" class="me-2">
                    Mana Bootstrap vietne
                </a>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="darbsDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Darbs
                                    </a>
                                    <ul class="dropdown-menu " aria-labelledby="darbsDropdown">
                                        <li><a class="dropdown-item " href="darbs1.php">Darbs 1</a></li>
                                        <li><a class="dropdown-item " href="darbs2.php">Darbs 2</a></li>
                                        <li><a class="dropdown-item " href="darbs3.php">Darbs 3</a></li>
                                        <li><a class="dropdown-item " href="darbs4.php">Darbs 4</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="atteli.php">Attēli</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="kontakti.php">Kontakti</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <content class="container-fluid mh-100">
        <?php
        echo "<h2> Tika ievadīti dati </h2>";
        $name = $_POST['username'];
        echo "<p> Lietotāja vārds: <b>" . $name . "</b></p>";
        $email = $_POST['email'];
        echo "<p> Lietotāja E-pasts: <b>" . $email . "</b></p>";
        $password = $_POST['password'];
        echo "<p> Lietotāja parole: <b>" . $password . "</b></p>";
        $date = $_POST['date'];
        echo "<p> Lietotāja dzimšanas datums: <b>" . $date . "</b></p>";
        $curse = $_POST['c1'];
        echo "<p> Lietotāja kurss: <b>" . $curse . "</b></p>";
        $group = $_POST['Group'];
        echo "<p> Lietotāja grupa: <b>" . $group . "</b></p>";
        if (isset($_POST['web_tech'])) {
            $web_tech = $_POST['web_tech'];
            echo "<p> Izvēlētās WEB tehnoloģijas: <b>" . implode(", ", $web_tech) . "</b></p>";
        } else {
            echo "<p> Izvēlētās WEB tehnoloģijas: <b>nav izvēlētas</b></p>";
        }
        ?>
        <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
    </content>


    <footer class="mt-auto bg-danger text-white text-center">
        Oļegs Grustāns - © 2023
    </footer>
</body>

</html>