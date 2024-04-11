<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alledrogo</title>
    <link rel="stylesheet" href="styless.css">
</head>

<body>
    <header class="flex-container topnav">
        <img src="img/image3.jpeg" alt="logo" id="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="Wyszukaj produkt">
            <input type="submit" name="Szukaj">
        </form>
        <div>   
        <a href="cart.php" id="cart">Koszyk</a>
            <a href="login.html">Dodaj produkt</a>
</div>
    </header>

    <main class="flex-container-wrap">
        <div class="card text-center">
            <h3>nazwa oferty</h3>
            <p>Cena: 100pln</p>
        </div>
        <?php
        include "display_products.php";
        ?>
    </main>
</body>

</html>