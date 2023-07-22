<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

    <?php include('header.php'); ?>
    <?php include('oeuvres.php'); ?>

    <main>
        <div id="liste-oeuvres">
            <?php foreach ($paintings as $painting): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $painting['id']; ?>">
                        <img src="<?php echo $painting['image']; ?>">
                        <h2>
                            <?php echo $painting['title']; ?>
                        </h2>
                        <p class="description">
                            <?php echo $painting['paragraph-description']; ?>
                        </p>
                    </a>
                </article>
            <?php endforeach; ?>
            <!-- <article class="oeuvre">
                <a href="oeuvre.php?id=1">
                    <img src="img/clark-van-der-beken.png" alt="Dodomu">
                    <h2>Dodomu</h2>
                    <p class="description">Mia Tozerski</p>
                </a>
            </article> -->
        </div>
    </main>

    <?php include('footer.php'); ?>
</body>

</html>