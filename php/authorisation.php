<?php
// Начало сессии
session_start();

// Подключение к базе данных
require_once('config.php');

// Проверка, если пользователь уже авторизован
if (isset($_SESSION['admin']) || isset($_SESSION['session_username'])) {
    header("Location: " . (isset($_SESSION['admin']) ? "kontakti.php" : "darbs4.php"));
    exit;
}

// Определение данных администратора
$admin = 'admin';
$pass = 'qwerty';

// Проверка отправки формы
if (isset($_POST['submit'])) {
    // Проверка логина администратора
    if ($admin == $_POST['user'] && $pass == $_POST['pass']) {
        $_SESSION['admin'] = $admin;
        header("Location: kontakti.php");
        exit;
    }

    // Проверка учетных данных пользователя
    if (!empty($_POST['user']) && !empty($_POST['pass'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = md5($_POST['pass']); // Использование md5 для соответствия сохраненному паролю

        // Подготовка и выполнение запроса
        $sql = "SELECT * FROM reg_user WHERE login = '$username' AND password = '$password'";
        $query = mysqli_query($conn, $sql);

        if ($query && mysqli_num_rows($query) > 0) {
            $_SESSION['session_username'] = $username;
            header("Location: darbs4.php");
            exit;
        } else {
            echo '<p>Nepareizs username vai password!</p>';
        }
    } else {
        echo '<p>Nepieciešami visi lauki!</p>';
    }
}
?>

<?php
include 'includes/header.php';
?>

<content class="container-fluid mh-100 text-center">
    <h1>Autorizācijas lapa</h1>
    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Lietotājvārds:</label>
            <input type="text" class="form-control" id="username" name="user" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Parole:</label>
            <input type="password" class="form-control" id="password" name="pass" required>
        </div>
        <button type="submit" class="btn btn-primary" id="reg" name="submit">Ielogoties</button>
        <br>
    </form>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
</content>
</div>

<?php
include 'includes/footer.php';
?>
</body>

</html>