<!doctype html>
<html lang="fr" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charles & Virginie EDOU NZE | Homepage">
    <meta name="author" content="Charlers EDOU NZE, Virginie EDOU NZE">
    <title>EDOU NZE | Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="display-5 fw-bold text-body-emphasis">Charles & Virginie EDOU NZE</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Welcome to our portfolio.
                </p>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/charles.jpg" class="d-block mx-lg-auto img-fluid" alt="Portrait de Charles EDOU NZE" loading="lazy">
                </div>
                <article class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Charles EDOU NZE : Ingénieur Etudes et Développement Web, Mobile et IA</h1>
                    <div class="lead">
                        <?php
                        require_once __DIR__ . '/partials/_about_first.html.php';
                        ?>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="https://www.linkedin.com/in/charlesen/" class="btn btn-primary btn-lg px-4 me-md-2">Mon CV</a>
                        <a href="https://www.linkedin.com/in/charlesen/" class="btn btn-outline-secondary btn-lg px-4">Me contacter</a>
                    </div>
                </article>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/virginie.jpg" class="d-block mx-lg-auto img-fluid" alt="Portrait de Virginie EDOU NZE" loading="lazy">
                </div>
                <article class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Virginie EDOU NZE: Spécialiste en Graphisme, Intégration Web et Marketing</h1>
                    <div class="lead">
                        <?php
                        require_once __DIR__ . '/partials/_about_second.html.php';
                        ?>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="https://www.linkedin.com/in/virginie-edou-nze-84976a155/" class="btn btn-primary btn-lg px-4 me-md-2">Mon CV</a>
                        <a href="https://www.linkedin.com/in/virginie-edou-nze-84976a155/" class="btn btn-outline-secondary btn-lg px-4">Me contacter</a>
                    </div>
                </article>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">La satisfaction de nos clients est notre priorité</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">
                        Au plaisir d'échanger avec vous.
                    </p>
                    <p class="fs-5 mb-4">
                        <?= date('Y') ?> &copy; Charles & Virginie EDOU NZE. Tous droits réservés.
                    </p>
                </div>
            </div>
        </div>

        <div class="b-example-divider mb-0"></div>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>