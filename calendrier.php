<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLES CSS -->
    <link rel="stylesheet" href="/assets/css/card/card.css">
    <link rel="stylesheet" href="/assets/css/footer/footer.css">
    <link rel="stylesheet" href="/assets/css/navbar/navbar.css">
    <link rel="stylesheet" href="/assets/css/index/index.css">
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


    <!-- JS AFFICHAGES CLIENT -->


    <!-- SEO -->
    <meta name="description" content="La fabrick est spécialisé dans les évennements minecraft .. .. ... ">
    <title>La cité des Elfes | Le calendrier</title>
</head>

<body>
    <?php
    require './views/nav/navigation.php';
    ?>
    <main>
        <section class="cardPage titleWithImage">
            <h1>Calendrier de l'événement</h1>
            <img src="/assets/img/calendar.png" alt="Calendrier d'élesia" class="mainLogo">
        </section>
        <section class="overlay">

        </section>
    </main>
    <?php
    require './views/footer/footer.php';

    ?>
</body>

</html>