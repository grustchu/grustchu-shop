<?php
session_start();
if (!isset($_SESSION['session_username']) && !isset($_SESSION['admin'])) {
    // Если ни пользователь, ни администратор не авторизованы, перенаправляем на index.php
    header("Location: index.php");
    exit;
}
?>

<?php
include 'includes/header.php';
?>

<content class="container-fluid mh-100">
    <h1>Darbs 1</h1>

    <form>
        <div class="mb-3">
            <label for="position1" class="form-label">Who is considered one of the classic hard carries in Dota
                2?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q1" value="a"> Anti-Mage
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q1" value="b"> Crystal Maiden
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q1" value="c"> Pudge
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q1" value="d"> Nature's Prophet
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="position2" class="form-label">Which hero is known for its global presence with the ability
                to teleport anywhere on the map?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q2" value="a"> Faceless Void
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q2" value="b"> Spectre
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q2" value="c"> Nature's Prophet
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q2" value="d"> Lifestealer
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="position3" class="form-label">Which support hero is known for healing allies with spells
                like "Shadow Wave" and "Shallow Grave"?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q3" value="a"> Crystal Maiden
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q3" value="b"> Dazzle
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q3" value="c"> Lion
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q3" value="d"> Witch Doctor
                    </label>
                </div>
            </div>
        </div>

        <div class="question">
            <div class="mb-3">
                <label for="heroCount" class="form-label">How many heroes are in Dota 2?</label>
                <input type="number" class="form-control" id="heroCount" name="heroCount" required>
            </div>
        </div>

        <div class="question">
            <div class="mb-3">
                <label for="fullName" class="form-label">What is the full name of the game Dota 2?</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="results" class="form-label">Results</label>
            <input type="text" class="form-control" id="results" name="results" readonly style="width: 4%;">
        </div>

        <div class="mb-3">
            <label for="progress" class="form-label">Progress</label>
            <div class="progress" style="height: 20px">
                <div class="progress-bar" role="progressbar" style="width: 0%;" id="progress" value="0%"></div>
            </div>
        </div>

        <div>
            <input type="button" onclick="submitQuiz()" value="Submit" class="btn" />
        </div>
    </form>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
</content>

<?php
include 'includes/footer.php';
?>
</body>

</html>