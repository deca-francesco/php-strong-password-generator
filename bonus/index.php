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

            <form action="./result.php" class="card bg-white px-2 py-3">
                <div class="row row-cols-2 mb-3">
                    <div class="col">
                        <label for="passwordLength">Lunghezza password (min 8, max 16):</label>
                    </div>
                    <div class="col">
                        <input type="number" name="passwordLength" id="passwordLength" class="w-50" min="8" max="16" required>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 mb-3">
                    <div class="col">
                        <label for="allowRepeats">Permetti ripetizioni?</label>
                    </div>
                    <div class="col">
                        <div><input type="radio" name="allowRepeats" value="true" checked> Sì</div>
                        <div><input type="radio" name="allowRepeats" value="false"> No</div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 mb-5">
                    <div class="col">
                        <label>Caratteri consentiti:</label>
                    </div>
                    <div class="col d-flex flex-column">
                        <div><input type="checkbox" name="uppercase" value="true" checked> Lettere Maiuscole</div>
                        <div><input type="checkbox" name="lowercase" value="true" checked> Lettere Minuscole</div>
                        <div><input type="checkbox" name="numbers" value="true" checked> Numeri</div>
                        <div><input type="checkbox" name="symbols" value="true"> Simboli</div>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Genera password</button>
                    <a href="./index.php" class="btn btn-secondary">Annulla</a>
                </div>
            </form>

        </div>
    </main>
    <footer>

    </footer>

</body>

</html>