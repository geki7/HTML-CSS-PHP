<?php
$putanja = dirname($_SERVER['REQUEST_URI']);



?>



<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Ivan Gadžić">
    <meta name="keywords" content="FOI">
    <meta name="description" content="17.03.2023.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <title>Početna stranica</title>
    <link rel="stylesheet" href="css/igadzic.css">
</head>

<body>
    <header>
        <div class="navbar">
            <a href="#"><img class="opcenito-ikona" src="materijali/logoelektricni.png" alt="logoelektricni.png"></a>
            <div class="dropdown">
                <button class="dropbtn">Izbornik
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <?php

                    include "meni.php";

                    ?>
                </div>
            </div>
            <?php
            if(isset($_SESSION['korisnik'])){ echo "<button>Odjava</button>";}
            ?>
            <div>
            
                <input type="text" id="search-input" placeholder="Pretrazi...">
                <ul id="search-results" style="background-color: aliceblue;"></ul>
            </div>
        </div>
    </header>
    <div class="slide-container">
        <div class="slideshow-container">
            <img src="materijali/porsche.png" alt="porsche.png" class="slideshow-image active">
            <img src="materijali/rimacnevera.png" alt="rimacnevera.png" class="slideshow-image">
            <img src="materijali/tesla.png" alt="tesla.jpg" class="slideshow-image">
            <img src="materijali/elektricni.png" alt="elektricni.png" class="slideshow-image">
            <img src="materijali/audietron.png" alt="audietron.png" class="slideshow-image">
        </div>
    </div>

    <hr>
    <div id="pocetni">
        <div id="pocetniclanak">
            <div class="pocetni_clanak_prvi">
                <h3><a href="https://hr.wikipedia.org/wiki/Automobil" target="_blank">Automobi, što je to?</a></h3>
                <p class="pocetniclanaktekst">
                    Automobil je motorno vozilo s karoserijom raznih oblika postavljenom na dvjema osovinama s četirima kotačima, a većinom se koristi za prijevoz putnika. Osim sjedala za vozača može imati najviše osam sjedala.
                </p>
            </div>
            <div class="pocetni_clanak_drugi">
                <h3><a href="https://automobili.hr/novosti/zanimljivosti/japanski-automobili-nekad-i-danas" target="_blank">Japanski automobili</a></h3>
                <p class="pocetniclanaktekst">
                    Japanski su automobili na cesti i na stazi bili u stanju “uzeti mjeru” čak i najrazvikanijim automobilima iz ostatka svijeta. U domeni utrkivanja su zbog svojih iznimnih sposobnosti često bili zabranjivani (što je npr. bio slučaj s Nissanovim tehno-čudovištem u obliku modela Skyline GT-R R32, kojem je svojevremeno zabranjen pristup natjecanjima na teritoriju Australije).
                </p>
            </div>
            <div class="pocetni_clanak_treci">
                <h3><a href="https://www.audi.hr/" target="_blank">Audi</a></h3>
                <p class="pocetniclanaktekst">
                    Audi je njemački proizvođač automobila sa sjedištem u Ingolstadtu. Od 1964., Audi je marka unutar Volkswagen grupe.August Horch (1868. – 1951.), je 1899. osnovao marku Horch i počeo s proizvodnjom automobila, ali je u uskoro izbačen iz svoje kompanije pa je 1909. godine osnovao novu. Međutim, više nije imao pravo na korištenje svog obiteljskog imena pa je svoje prezime Horch preveo na latinski jezik. Riječ audi je imperativ od audire (na hrvatskom čuti), što i znači „Čuj!“ ili na njemačkom „Horch!“.
                </p>
            </div>
        </div>
    </div>
    <hr>
    <div class="o_autoru">
        <h2>Autor</h2>
        <ul>
            <li id="okvir_slike_autora"><img id="slika_mene" src="materijali/slika_mene.JPG" alt="slika-mene"></li>
            <li>Ivan Gadžić</li>
            <li>igadzic@student.foi.hr</li>
            <li>Rođen u Vinkovcima i trenutno student FOI-a</li>
            <li>0016140379</li>
        </ul>
    </div>


    <footer class="podnozje">
        <p>copyright &copy; <a href="mailto:igadzic@student.foi.hr" target="_blank" rel="noopener noreferrer">Ivan Gadžić</a>, 2023.</p>
        <a href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2022/zadaca_01/igadzic/index.php" target="_blank"><img class="ikonaHTML" src="materijali/HTML5.png" alt="Validacija.png"></a>
        <a href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2022/zadaca_01/igadzic/css/igadzic.css" target="_blank"><img class="ikonaCSS" src="materijali/CSS3.png" alt="CSS3Validacija.png"></a>
    </footer>

    <script src="javascript/jquery.js"></script>

</body>

</html>