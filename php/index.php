<?php
include 'includes/header.php';
?>

<content class="container-fluid mh-100 text-center">
    <h1>Mana galvenā Bootstrap lapa</h1>
    <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>

    <div class="tab" style="background-color: crimson;">
        <button class="tablinks" onclick="openTab(event, 'Photos')">Mana fotogrāfija</button>
        <button class="tablinks" onclick="openTab(event, 'Abtme')">Par mani</button>
        <button class="tablinks" onclick="openTab(event, 'Competencies')">Manas kompetences</button>
        <button class="tablinks" onclick="openTab(event, 'Hobbies')">Mani hobiji</button>
    </div>

    <div id="Photos" class="tabcontent">
        <h3>Mana fotogrāfija</h3>
        <p> <img src="../images/ddd.jpg" class="img-fluid"> </p>
    </div>

    <div id="Abtme" class="tabcontent">
        <h3>Par mani</h3>
        <button class="accordion">1.Fakts</button>
        <div class="panel">
            <p>Mani sauc Oļegs Grustāns.</p>
        </div>

        <button class="accordion">2.Fakts</button>
        <div class="panel">
            <p>Man ir 18 gadi, mana dzīmšanas diena ir 20.martā.</p>
        </div>

        <button class="accordion">3.Fakts</button>
        <div class="panel">
            <p>Esmu pabeidzīs Lāču pamatskolu un tagad esmu 3.kursā Daugavpils tehnoloģiju un tūrisma tehnikumā
                students.</p>
        </div>

        <button class="accordion">4.Fakts</button>
        <div class="panel">
            <p>Man patīk spēlēt datospēles un klausīties mūziku.</p>
        </div>

        <button class="accordion">5.Fakts</button>
        <div class="panel">
            <p>Es mīlu savu mammu.</p>
        </div>
    </div>

    <div id="Competencies" class="tabcontent">
        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all'),active()"> Radīt visas</button>
            <button class="btn" onclick="filterSelection('first'),active()"> 1.Kurss</button>
            <button class="btn" onclick="filterSelection('second'),active()"> 2.Kurss</button>
            <button class="btn" onclick="filterSelection('third'),active()"> 3.Kurss</button>
            <button class="btn" onclick="filterSelection('fourth'),active()"> 4.Kurss</button>
        </div>

        <div class="container">
            <div class="filterDiv first">Pascal</div>
            <div class="filterDiv first">UML</div>
            <div class="filterDiv second">Java</div>
            <div class="filterDiv first second third fourth">Word</div>
            <div class="filterDiv first second third fourth">PowerPoint</div>
            <div class="filterDiv third">HTML</div>
            <div class="filterDiv second third">JavaScript</div>
            <div class="filterDiv third">CSS</div>
            <div class="filterDiv third">SQL</div>
            <div class="filterDiv fourth">AndroindStudio</div>
            <div class="filterDiv first second third fourth">Windows</div>
            <div class="filterDiv fourth">PHP</div>
        </div>
    </div>

    <div id="Hobbies" class="tabcontent">
        <h3>Mani hobiji</h3>

        <div class="loader text-center"></div>

        <div class="container" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="container" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">


        <img id="myImg" src="../images/wallpaperflare.com_wallpaper.jpg" alt="Dota 2" style="width:100%;max-width:300px"
            onclick="activeModal()">
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

        <div class="main text-center">
            <h2>Dota 2</h2>
            <p>Dota 2 is a 2013 multiplayer online battle arena (MOBA) video game by Valve. The game is a sequel to
                Defense of the Ancients (DotA), a community-created mod for Blizzard Entertainment's Warcraft III:
                Reign of Chaos.
                Dota 2 is played in matches between two teams of five players, with each team occupying and
                defending their own separate base on the map. Each of the ten players independently controls a
                powerful character known as a "hero" that all have unique abilities and differing styles of play.
                During a match players collect experience points and items for their heroes to defeat the opposing
                team's heroes in player versus player combat. A team wins by being the first to destroy the other
                team's "Ancient", a large structure located within their base.</p>
        </div>
    </div>

</content>


<?php
include 'includes/footer.php';
?>

</body>

</html>