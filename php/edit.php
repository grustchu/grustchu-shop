<?php
session_start();
// Pārbauda, vai sesijā nav saglabāta 'admin' vērtība (lietotājs nav pieslēdzies)
if (!$_SESSION['admin']) {
    // Ja lietotājs nav pieslēdzies, tiek novirzīts uz Register.php
    header("Location: index.php");
    exit;
}
?>

<?php
include 'includes/header.php';
?>

<content class="container-fluid mh-100">
    <?php
    include 'config.php';

    // Получение ID пользователя
    $user_id = $_GET['id'];

    // Получение данных пользователя из базы данных
    $result = mysqli_query($conn, "SELECT login, email, birthday, year, `group`, technologies FROM reg_user WHERE id = $user_id");
    $row = mysqli_fetch_assoc($result);

    // Инициализация переменных данными из базы
    $login = $row['login'];
    $email = $row['email'];
    $date = $row['birthday'];
    $curse = $row['year'];
    $group = $row['group'];
    $technologies = $row['technologies'];

    // Если форма отправлена, обновляем данные пользователя
    if ($_POST) {
        $login = $_POST['login'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $curse = $_POST['curse'];
        $group = $_POST['group'];
        $technologies = $_POST['technologies'];

        mysqli_query($conn, "UPDATE reg_user SET login = '$login', email = '$email', birthday = '$date', year = '$curse', `group` = '$group', technologies = '$technologies' WHERE id = $user_id");
        header("Location: kontakti.php");
        exit;
    }

    mysqli_close($conn);
    ?>

    <h1>Rediģēt Lietotāju</h1>
    <form method="post">
        <input type="text" id="login" name="login" value="<?php echo $login; ?>" required>
        <label for="login">Lietotāja Vārds</label><br>

        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
        <label for="email">E-pasts</label><br>

        <input type="date" id="date" name="date" value="<?php echo $date; ?>" required>
        <label for="date">Dzimšanas diena</label><br>

        <input type="text" id="curse" name="curse" value="<?php echo $curse; ?>" required>
        <label for="curse">Kurss</label><br>

        <input type="text" id="group" name="group" value="<?php echo $group; ?>" required>
        <label for="group">Grupa</label><br>

        <input type="text" id="technologies" name="technologies" value="<?php echo $technologies; ?>" required>
        <label for="technologies">Tehnologijas</label><br>

        <input type="submit" value="Atjaunot">
    </form>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
</content>

<?php
include 'includes/footer.php';
?>
</body>

</html>