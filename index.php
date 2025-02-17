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
                        <input type="number" name="passwordLength" id="passwordLength" min="1" max="10" class="w-100">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Genera password</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>

</body>

</html>