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
  <div class="container mt-5">
    <h1>Kontakti</h1>
    <div class="card-group">

      <div class="card">
        <img src="../images/grimstroke.png" class="card-img-top" alt="Darbinieks 1 attēls">
        <div class="card-body">
          <h4 class="card-title">Oļegs Grustāns</h4>
          <p class="card-text">
            deadinside✓emo✓drain✓epileptic✓paranoid✓toxic✓bipolar✓depressed✓tilted✓antisocial✓broken✓agressive✓psycho✓apathetic✓broken-hearted✓
          </p>
          <a href="darbs1.php" class="btn btn-primary">Skatīt darbu</a>
        </div>
      </div>

      <div class="card">
        <img src="../images/spectre.png" class="card-img-top" alt="Darbinieks 2 attēls">
        <div class="card-body">
          <h4 class="card-title">Daniels Viļčinskis</h4>
          <p class="card-text">Shut up and let me die in peace</p>
          <a href="darbs2.php" class="btn btn-primary">Skatīt darbu</a>
        </div>
      </div>

      <div class="card">
        <img src="../images/naga_siren.png" class="card-img-top" alt="Darbinieks 3 attēls">
        <div class="card-body">
          <h4 class="card-title">Vladislavs Miklaševskis</h4>
          <p class="card-text">у меня на твиче ник fanatcurseda, но я не фанат курседа (talent,rejected by society)
          </p>
          <a href="darbs3.php" class="btn btn-primary">Skatīt darbu</a>
        </div>
      </div>

      <div class="card">
        <img src="../images/nevermore.png" class="card-img-top" alt="Darbinieks 4 attēls">
        <div class="card-body">
          <h4 class="card-title">Ņikita Jakovļevs</h4>
          <p class="card-text">Fortnite/Valorant schizopathic god</p>
          <a href="darbs4.php" class="btn btn-primary">Skatīt darbu</a>
        </div>
      </div>
    </div>
    <?php
// Pārbauda, ​​vai lietotājs ir atteicies
if (isset($_GET['do']) && $_GET['do'] == 'logout') {
    unset($_SESSION['admin']);
    session_destroy();
}

include 'config.php';

echo '<div class="container mt-5">';
echo '<h2 class="text-center">Reģistrētie lietotāji</h2>';

// tabula
echo '<table class="table table-striped table-bordered">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Username</th>';
echo '<th>Email</th>';
echo '<th>Password</th>';
echo '<th>Birthday</th>';
echo '<th>Year</th>';
echo '<th>Group</th>';
echo '<th>Technologies</th>';
echo '<th>Actions</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Veidojam vaicājumu
if ($result = mysqli_query($conn, 'SELECT id, login, email, password, birthday, year, `group`, technologies FROM reg_user ORDER BY id')) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . htmlspecialchars($row['login']) . '</td>';
        echo '<td>' . htmlspecialchars($row['email']) . '</td>';
        echo '<td>' . htmlspecialchars($row['password']) . '</td>';
        echo '<td>' . htmlspecialchars($row['birthday']) . '</td>';
        echo '<td>' . htmlspecialchars($row['year']) . '</td>';
        echo '<td>' . htmlspecialchars($row['group']) . '</td>';
        echo '<td>' . htmlspecialchars($row['technologies']) . '</td>';
        echo '<td>';
        echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Rediģēt</a> ";
        echo "<button class='btn btn-danger btn-sm' onclick='confirmDelete(" . $row['id'] . ")'>Dzēst</button>";
        echo '</td>';
        echo '</tr>';
    }
    mysqli_free_result($result);
} else {
    echo '<tr><td colspan="9" class="text-center">Nav datu</td></tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';

// Skripts dzēšanas apstiprināšanai
echo "
<script>
function confirmDelete(id) {
    if (confirm('Vai tiešām vēlaties dzēst šo lietotāju??')) {
        window.location.href = '?delete_id=' + id;
    }
}
</script>
";

// Lietotāju dzēšanas apstrāde
if (isset($_GET['delete_id'])) {
    $delete_id = (int)$_GET['delete_id'];
    mysqli_query($conn, "DELETE FROM reg_user WHERE id = $delete_id");
}

// Savienojuma slēgšana
mysqli_close($conn);
?>

    <!-- Saiti uz lapu, kas ļauj lietotājam izrakstīties -->
    <a href="kontakti.php?do=logout">Iziet</a>
  </div>
  <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
</content>

<?php
include 'includes/footer.php';
?>
</body>

</html>