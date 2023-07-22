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
        <article id="detail-oeuvre">
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
                    echo '<div id="img-oeuvre">';
                    echo '<img src="' . $foundPainting['image'] . '" alt="' . $foundPainting['alt'] . '">';
                    echo '</div>';
                    echo '<div class="contenu-oeuvre">';
                    echo '<h1>' . $foundPainting['title'] . '</h1>';
                    echo '<p class="description">' . $foundPainting['paragraph-description'] . '</p>';
                    echo '<p class="description-complete">' . $foundPainting['paragraph-complete'] . '</p>';
                    echo '</div>';
                } else {
                    echo 'Artwork not found.';
                }
            }
            ?>
        </article>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>