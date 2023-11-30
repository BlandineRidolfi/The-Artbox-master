<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head> 
<body>

<?php include('header.php'); ?>

<main>

    <?php include('oeuvres.php'); ?>

    <?php 
    $id = isset($_GET['id']) && array_key_exists($_GET['id'], $oeuvres) ? $_GET['id'] : null; 
    ?>

    <article id="detail-oeuvre">
    <?php if ($id !== null) : ?>
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$id]['image']; ?>" alt="<?php echo $oeuvres[$id]['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$id]['titre']; ?></h1>
            <p class="description"><?php echo $oeuvres[$id]['auteur']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvres[$id]['description']; ?>
            </p>
        </div>
    </article>

    <?php else : ?>

        <article id="detail-oeuvre">

            <h1>Désolée, la page que vous demandez n'existe pas</h1>

        </article>

    <?php endif; ?>

</main>

<?php include('footer.php'); ?>

</body>
</html>