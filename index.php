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

<!-- HEADER -->

    <?php include('header.php'); ?>
    
    <main>
        <div id="liste-oeuvres">
            <?php include('oeuvres.php'); ?>

            <?php foreach ($oeuvres as $oeuvre) : ?>

        
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre['numero']; ?>">
                <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <p class="description"><?php echo $oeuvre['auteur']; ?></p>
                </a>
            </article>

            <?php endforeach ?>
            
            <!--
                
            <article class="oeuvre">
                <a href="oeuvre-15.php">
                    <img src="img/steve-johnson-3.png" alt="Blaue Gelbe Muster">
                    <h2>Blaue Gelbe Muster</h2>
                    <p class="description">Adelheid Von Schreiber</p>
                </a>
            </article> -->
        </div>
    </main>

    <?php include('footer.php'); ?>

</body>
</html>