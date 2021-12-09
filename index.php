<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLES CSS -->
    <link rel="stylesheet" href="/assets/css/footer/footer.css">
    <link rel="stylesheet" href="/assets/css/navbar/navbar.css">
    <link rel="stylesheet" href="/assets/css/index/index.css">
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- JS AFFICHAGES CLIENT -->
    <script src="/assets/js/index.js"></script>


    <!-- SEO -->
    <meta name="description" content="La fabrick est spécialisé dans les évennements minecraft .. .. ... ">
    <title>La cité des Elfes</title>
</head>

<body>
    <?php
    require './views/nav/navigation.php';
    ?>
    <main>
        <section class="titleWithImage">
            <img src="/assets/img/logo.png" alt="" class="mainLogo">
            <a id="toggleInfos" class="discover">Découvrir</a>
        </section>

        <section class="discoverAll_ptOne" id="hiddenInformations">
            <div class="firstDiscover">
                <h1 class="titleActivities">kécécé une cité ?</h1>
                <p>La cité des sables est un événement orienté PVP créé par le youtubeur Zelvac.<br><br>
                    Le but du jeu est de récupérer le maximum d’émeraudes afin de devenir le roi ou la reine de ladite cité. <br><br>Pour ce faire, plusieurs équipes doivent récolter des ressources et les échanger avec les marchands de la ville contre des émeraudes, le tout sans que leur base ne se fasse piller ou sans qu’ils ne se fassent attaquer en chemin par les autres équipes !
                </p>
                <a target="_blank" rel="noreferrer" href="https://bit.ly/3DwLLti" class="explore">Informations</a>

            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xoOSFxK1Pqw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

        <section class="discoverAll_ptTwo" id="hiddenInformations_PtTwo">
            <img class="logoFab" src="/assets/img/La-FaBrick-Logo-Seulement.png" alt="Le logo de la fabrick">
            <div class="firstDiscover">
                <h1 class="titleActivities">Qui sommes-nous?</h1>

                <p>Nous sommes La FaBrick, un collectif d’organisateurs d’événements combinant les équipes de DiamondRift et d’Obeprod. Le présent événement, La Cité des Elfes, est notre plus gros projet en date : un mélange entre une cité des sables et un jeu de type RPG !
                </p>
                <a target="_blank" rel="noreferrer" href="https://discord.gg/MwE6nW9aCT" class="explore">Discord</a>
            </div>
        </section>

    </main>
    <?php
    require './views/footer/footer.php';

    ?>
</body>

</html>