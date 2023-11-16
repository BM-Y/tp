<?php 
require_once 'manager/manager.php';

require_once 'controller/fonctionnalite.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECF terminal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="logo">My Sushis Shop</h1>
    </header>

    <section id="menu">
        <?php 
            $meals = getMeals($pdo);
            foreach($meals as $meal){?>
                <article class="menu-item">
                <img src="img/<?= $meal['picture'] ?>" alt="<?= $meal['name'] ?>">
                <h2><?= $meal['name'] ?></h2>
                <p class="price"><?= $meal['price'] ?></p>
            </article>
            <?php } 
        ?>
    </section>

    <footer>
        <p>&copy; 2023 Menu Japonais</p>
    </footer>
    <script>

    </script>
</body>
</html>