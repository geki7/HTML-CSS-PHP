<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ivan Gadžić">
    <meta name="keywords" content="FOI">
    <meta name="description" content="17.03.2023.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="../css/igadzic.css">
    <title>Multimedija</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="../index.php"><img class="opcenito-ikona" src="../materijali/logoelektricni.png" alt="logoelektricni.png"></a>
            <div class="dropdown">
              <button class="dropbtn">Izbornik
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="../index.php">Početna</a>
                <a href="../autor.php">O Autoru</a>
                <a href="../ostalo/popis.php">Popis</a>
                <a href="../obrasci/obrazac.php">Obrazac</a>
                <a href="../obrasci/autentikacija.php">Autentikacija</a>
                <a href="../era.php">ERA Model</a>
                <a href="../navigacijski.php">Navigacijski dijagram</a>
              </div>
            </div>
          </div>
    </header>

    <section class="multimedija-sekcija">
        <div class="grid-multimedija">
            <h3>Lamborghini Veneno</h3>
            <video controls><source src="../materijali/video1.mp4" type="video/mp4"></video>     
        </div>
        <div class="grid-multimedija">
            <h1>Lexus GS450</h1>
            <video controls><source src="../materijali/video2.mp4" type="video/mp4"></video>   
        </div>
        <div class="grid-multimedija">
            <h3>BMW M5 E60</h3>
            <iframe class="klas" title="prvi" src="https://www.youtube.com/embed/watch?v=jjkkSphnqmU&ab_channel=HayabusaTurbo"></iframe> 
        </div>
        <div class="grid-multimedija">
            <h3>BMW M5 E60 V10 Supercharger</h3>
            <iframe class="drugi" title="prvi" src="https://www.youtube.com/embed/watch?v=1mfmOy5oUXQ&ab_channel=CarAccelerationTV"></iframe> 
        </div>
        <div class="grid-multimedija">
            <h3>Glazba lagana</h3>
            <audio controls><source src="../materijali/zvuk1.mp3" type="audio/mp3"></audio>
        </div>
        <div class="grid-multimedija">
            <h3>Glazba lagana</h3>
            <audio controls><source src="../materijali/zvuk2.mp3" type="audio/mp3"></audio>
        </div>
    </div>
    </section>

    <footer class="podnozje">
        <p>copyright &copy; <a href="mailto:igadzic@student.foi.hr" target="_blank" rel="noopener noreferrer">Ivan Gadžić</a>, 2023.</p>
        <a href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2022/zadaca_01/igadzic/index.php" target="_blank"><img class="ikonaHTML" src="../materijali/HTML5.png" alt="Validacija.png"></a>
        <a href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2022/zadaca_01/igadzic/css/igadzic.css" target="_blank"><img class="ikonaCSS" src="../materijali/CSS3.png" alt="CSS3Validacija.png"></a>
    </footer>

</body>
</html>