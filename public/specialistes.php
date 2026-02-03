<?php
require_once "..\bdd\connexion.php";


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Uni'Voix - Spécialistes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="font-family: 'Candara'">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm navbar-light bg-light border-color border border-danger border-3">
    <div class="container">
        <a class="navbar-brand" href="#">Uni'voix</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="#accueil" >Spécialistes</a></li>

                <li class="nav-item"><a class="nav-link" href="#services">Forum</a></li>

                <li class="nav-item"><a class="nav-link" href="#temoignages">Aides</a></li>

                <li class="nav-item"><a class="nav-link" href="#contact">Numéros</a></li>
            </ul>
        </div>
    </div>


</nav>

<!-- HERO -->
<section class="bg-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold mb-3">Les Spécialistes</h1>
        <p class="text-muted">
            Sur cette page, nous proposons des professionels de santé prets a vous aider.        </p>
    </div>
</section>

<!-- test bouton filtre-->
<a href="#" class="btn btn-univoix">Filtres ></a>


<!-- Medecins -->
<section class="bg-univoix py-5">
    <div class="container">
        <div class="row g-4 text-center">

            <!-- Medecin 1 -->
            <div class="col-md-4">
                <h5 class="section-title">Medecin 1</h5>
                <p>
                    Nom - Prenom - Spécialité
                </p>
                <a href="#" class="btn btn-univoix">Prendre contact</a>
            </div>

            <!-- Medecin 2 -->
            <div class="col-md-4">
                <h5 class="section-title">Medecin 2</h5>
                <p>
                    Nom - Prenom - Spécialité
                </p>
                <a href="#" class="btn btn-univoix">Prendre contact</a>
            </div>

            <!-- Medecin 3 -->
            <div class="col-md-4">
                <h5 class="section-title">Medecin 3</h5>
                <p>
                    Nom - Prenom - Spécialité
                </p>
                <a href="#" class="btn btn-univoix">Prendre contact</a>
            </div>

            <!-- Medecin 4 -->

            <div class="col-md-4">
                <h5 class="section-title">Medecin 4</h5>
                <p>
                    Nom - Prenom - Spécialité
                </p>
                <a href="#" class="btn btn-univoix">Prendre contact</a>
            </div>

            <!-- Medecin 5 -->

            <div class="col-md-4">
                <h5 class="section-title">Medecin 5</h5>
                <p>
                    Nom - Prenom - Spécialité
                </p>
                <a href="#" class="btn btn-univoix">Prendre contact</a>
            </div>

            <!-- Medecin 6 -->

            <div class="col-md-4">
                <h5 class="section-title">Medecin 6</h5>
                <p>
                    Nom - Prenom - Spécialité
                </p>
                <a href="#" class="btn btn-univoix">Prendre contact</a>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<footer class="py-3 text-center">
    © 2026 — Luca Regi, Nassim Kharfouche, Prosper Fajnzyn — Tous droits réservés
</footer>

</body>
</html>