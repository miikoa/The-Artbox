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
        <div class="oeuvre">
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $foundPainting = null;
                        foreach ($paintings as $painting) {
                            if ($painting['id'] == $id) {
                                $foundPainting = $painting;
                                break;
                            }
                        }
                        if ($foundPainting) {
                            echo '<img src="' . $foundPainting['image'] . '" alt="' . $foundPainting['alt'] . '">';
                        }
                    }
                    ?>
                </div>
                <div id="contenu-oeuvre">
                    <?php
                    if ($foundPainting) {
                        echo '<h1>' . $foundPainting['title'] . '</h1>';
                        echo '<p class="description">' . $foundPainting['paragraph-description'] . '</p>';
                        echo '<p class="description-complete">' . $foundPainting['paragraph-complete'] . '</p>';
                    } else {
                        echo 'Artwork not found.';
                    }
                    ?>
                </div>
            </article>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>
<!-- This is the layout copied from the oeuvre source code
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/pawel-czerwinski-3.png" alt="Aashaaheen Baadal">
        </div>
        <div id="contenu-oeuvre">
            <h1>Aashaaheen Baadal</h1>
            <p class="description">Anaisha Devi</p>
            <p class="description-complete">
                Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection
            </p>
        </div>
    </article>
</main> -->

<!-- This is the layout copied from the main page source code
<article class="oeuvre">
                <a href="oeuvre-1.html">
                    <img src="img/clark-van-der-beken.png" alt="Dodomu">
                    <h2>Dodomu</h2>
                    <p class="description">Mia Tozerski</p>
                </a>