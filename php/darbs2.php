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

<content class="container-fluid mh-100"
    style="background-image: url('../images/bg3.jpg'); background-repeat: repeat; color: white;">
    <h1>Darbs 2</h1>
    <!-- Test Questions Form -->

    <form>
        <div class="mb-3">
            <label for="question1" class="form-label">Kāds ir Minecraft izturīgākais materiāls?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q1" value="a"> Akmens
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q1" value="b"> Dzelzs
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q1" value="c"> Dimants
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q1" value="d"> Zelts
                    </label>
                </div>
            </div>
            <div id="q1s" class="alert alert-success" style="display:none"></div>
            <div id="q1d" class="alert alert-danger" style="display:none"></div>
        </div>

        <div class="mb-3">
            <label for="question2" class="form-label">Kurš dzīvnieks nodrošina vilnu, lai izveidotu gultu?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q2" value="a"> Kaķis
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q2" value="b"> Aita
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q2" value="c"> Cūka
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q2" value="d"> Zirgs
                    </label>
                </div>
            </div>
            <div id="q2s" class="alert alert-success" style="display:none"></div>
            <div id="q2d" class="alert alert-danger" style="display:none"></div>
        </div>

        <div class="mb-3">
            <label for="question3" class="form-label">Kādi bloki ir nepieciešami, lai izveidotu portālu uz elli?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q3" value="a"> Dimanti
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q3" value="b"> Dzelzs
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q3" value="c"> Obsidiāns
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q3" value="d"> Zelts
                    </label>
                </div>
            </div>
            <div id="q3s" class="alert alert-success" style="display:none"></div>
            <div id="q3d" class="alert alert-danger" style="display:none"></div>
        </div>

        <div class="mb-3">
            <label for="question4" class="form-label">Kāds ir Minecraft galvenā priekšnieka vārds?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q4" value="a"> Enderpūķis
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q4" value="b"> Krīperis
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q4" value="c"> Endermens
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q4" value="d"> Zombijs
                    </label>
                </div>
            </div>
            <div id="q4s" class="alert alert-success" style="display:none"></div>
            <div id="q4d" class="alert alert-danger" style="display:none"></div>
        </div>

        <div class="mb-3">
            <label for="question5" class="form-label">No kāda kritiena augstuma jūs varat izglābties no nāves,
                izmantojot ūdens spaini?</label>
            <div class="question">
                <div>
                    <label>
                        <input type="radio" name="q5" value="a"> Nav ierobežots
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q5" value="b"> 50 bloki
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q5" value="c"> 100 bloki
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="q5" value="d"> 150 bloki
                    </label>
                </div>
            </div>
            <div id="q5s" class="alert alert-success" style="display:none"></div>
            <div id="q5d" class="alert alert-danger" style="display:none"></div>
        </div>

        <input type="button" onclick="submitQuiz2()" value="Submit" class="btn" />
    </form>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>
</content>

<?php
include 'includes/footer.php';
?>
</body>

</html>