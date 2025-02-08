<?php
// Iekļauj konfigurācijas failu, lai piekļūtu datubāzei
include 'config.php';
//pārbauda vai forma ir iesniegta
if (isset($_POST['submit'])) {
    //iegūst ievadītas vērtības
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $date = $_POST['date'];
    $curse = $_POST['c1'];
    $group = $_POST['Group'];
    if (isset($_POST['web_tech'])) {
        $web_tech = $_POST['web_tech'];
        $web_tech_list = implode(", ", $web_tech);
    } else {
        $web_tech_list = "Nav";
    }

    // SQL pieprasījums, lai izveidotu jaunu lietotāja ierakstu datubāzē
    $sql = "INSERT INTO reg_user (login, email, password, birthday, year, `group`, technologies ) VALUES
   ('$name', '$email', '$password', '$date' , '$curse' , '$group' , '$web_tech_list')";

    // Izpilda SQL pieprasījumu un pārbauda, vai tas ir veiksmīgs
    if ($conn->query($sql) === TRUE) {
        echo '<br>Jaunais ieraksts tika izveidots veiksmīgi';
    } else {
        // Kļūdas ziņojums
        echo "Kļūda: " . $sql . "<br>" . $conn->error;
    }
}
/* Aizvērt savienojumu */
mysqli_close($conn);


?>

<?php
include 'includes/header.php';
?>

<content class="container-fluid mh-100">
    <h1>Darbs 3</h1>

    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Lietotājvārds:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-pasts:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Parole:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Dzimšanas diena:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="curse" class="form-label">Atzīmējiet kursu:</label>
            <div>
                <input type="radio" name="c1" value="1.kurss"> 1.kurss
                <input type="radio" name="c1" value="2.kurss"> 2.kurss
                <input type="radio" name="c1" value="3.kurss"> 3.kurss
                <input type="radio" name="c1" value="4.kurss"> 4.kurss
            </div>
        </div>
        <div class="mb-3">
            <label for="Group" class="form-label">Izvēlējiet grupu:</label>
            <select class="form-control" id="Group" name="Group" required>
                <option value="" disabled selected>PR-11</option>
                <option value="PR-11">PR-11</option>
                <option value="PR-21">PR-21</option>
                <option value="PR-31">PR-31</option>
                <option value="PR-41">PR-41</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="WEB" class="form-label">Atzīmējiet WEB tehnoloģijas:</label>
            <div>
                <input type="checkbox" name="web_tech[]" value="HTML"> HTML
                <input type="checkbox" name="web_tech[]" value="CSS"> CSS
                <input type="checkbox" name="web_tech[]" value="JavaScript"> JavaScript
                <input type="checkbox" name="web_tech[]" value="PHP"> PHP
                <input type="checkbox" name="web_tech[]" value="AJAX"> AJAX
                <input type="checkbox" name="web_tech[]" value="JSON"> JSON
            </div>
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Reģistrēties" />
        <br>
        <a href="authorisation.php">Pieslēgties savā kontā </a>
    </form>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>

</content>


<?php
include 'includes/footer.php';
?>

</body>

</html>