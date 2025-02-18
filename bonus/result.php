<?php

require_once "./functions.php";

?>


<!doctype html>
<html lang="en">

<head>
    <title>PHP password generator - result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous" defer></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous" defer></script>
</head>

<body class="bg-dark text-white">
    <header>
        <div class="container mt-5 text-center">
            <h1>Strong password generator - Risultato</h1>
            <?php if ($password && $password !== "err") : ?>
                <h3>Ecco la tua password sicura di <?php echo strlen($password) ?> caratteri con:</h3>
                <h5>
                    <?php echo $allowRepeats ? "<div>- Ripetizioni</div>" : "<div>- Nessuna ripetizione</div>" ?>
                    <?php echo $useUppercase ? "<div>- Maiuscole</div>" : "" ?>
                    <?php echo $useLowercase ? "<div>- Minuscole</div>" : "" ?>
                    <?php echo $useNumbers ? "<div>- Numeri</div>" : "" ?>
                    <?php echo $useSymbols ? "<div>- Simboli</div>" : "" ?>
                </h5>
            <?php endif ?>
        </div>
    </header>
    <main>
        <div class="container">

            <!-- alert di errore -->
            <?php if (!$password) : ?>
                <div class="alert alert-danger mt-3 d-flex justify-content-between align-items-center">
                    <strong>ERRORE: Seleziona almeno un set di caratteri valido!</strong>
                    <a href="./index.php" class="btn btn-outline-danger">Torna indietro</a>
                </div>
            <?php endif; ?>

            <!-- alert di errore dei numeri -->
            <?php if ($password === "err") : ?>
                <div class="alert alert-danger mt-3 d-flex justify-content-between align-items-center">
                    <strong><?php echo "ERRORE: La password non può contenere solo numeri senza ripetizioni per più di 10 caratteri" ?></strong>
                    <a href="./index.php" class="btn btn-outline-danger">Torna indietro</a>
                </div>
            <?php endif; ?>

            <!-- alert con la password -->
            <?php if ($password && $password !== "err") : ?>
                <div class="alert alert-success text-center mt-3">
                    <?php echo "<strong>$password</strong>" ?>
                </div>
                <div class="mt-3 text-center">
                    <!-- ricarico la pagina con gli stessi parametri -->
                    <a href="result.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-primary">Genera Nuova Password</a>
                    <a href="index.php" class="btn btn-secondary">Torna alle opzioni</a>
                </div>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>