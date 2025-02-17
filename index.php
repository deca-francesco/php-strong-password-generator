<?php
// prendo la lunghezza della password se c'è, altrimenti null
$passwordLength = $_GET["passwordLength"] ?? null;

// se la lunghezza esiste genero subito la password, altrimenti null
$password = $passwordLength ? generatePassword($passwordLength) : null;

function generatePassword()
{
    // prendo la lunghezza della password da fuori 
    global $passwordLength;

    // controllo se la lunghezza esiste, altrimenti interrompo
    if (!$passwordLength || $passwordLength < 8 || $passwordLength > 16) {
        return;
    }

    // tutto insieme nella milestone 1
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    // rimane in questo scope
    $password = "";

    // genero una password casuale di lunghezza $passwordLength
    for ($i = 0; $i < $passwordLength; $i++) {
        // ad ogni iterazione aggiungo a password un carattere preso da $charaters 
        // accedo a $characters come un array, all'indice casuale (tra 0 e la lunghezza di $characters -1 perché parto da 0)
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    // ritorno solo il valore
    return $password;
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>PHP password generator</title>
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
            <h1>Strong password generator</h1>
            <h3>Genera la tua password sicura</h3>
        </div>
    </header>
    <main>
        <div class="container">

            <form action="" class="card bg-white p-2">
                <div class="row row-cols-2 mb-3">
                    <div class="col">
                        <label for="passwordLength">Lunghezza password:</label>
                    </div>
                    <div class="col">
                        <input type="number" name="passwordLength" id="passwordLength" class="w-50" min="8" max="16" value="<?php echo $passwordLength ?? null ?>">
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Genera password</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='./index.php'">Annulla</button>
                </div>
            </form>

            <?php if ($passwordLength !== null && ($passwordLength < 8 || $passwordLength > 16)): ?>
                <div class="alert alert-danger mt-3">
                    <strong>Errore: lunghezza non valida!</strong>
                </div>
            <?php endif; ?>

            <?php if ($password && $passwordLength >= 8 && $passwordLength <= 16): ?>
                <div class="alert alert-success mt-3">
                    <strong>Ecco la tua password di <?php echo $passwordLength ?> caratteri:</strong> <?php echo $password; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <footer>

    </footer>

</body>

</html>