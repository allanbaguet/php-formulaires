<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-2/public/assets/css/style.css">
    <title>Exercice 5</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary d-flex">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Les formulaires</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav fs-4">
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-1/exercice1.php">Exercice 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-2/exercice2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-3/index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-4/index.php">Exercice 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/exercice-5/index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-6/index.php">Exercice 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-7/index.php">Exercice 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-8/index.php">Exercice 8</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center p-5">Exercice 5</h1>
                <p class="text-center fs-4">
                    Créer un formulaire sur la page <strong>index.php</strong> avec : <br>
                    Une liste déroulante pour la civilité (Mr ou Mme) <br>
                    Un champ texte pour le nom <br>
                    Un champ texte pour le prénom <br>
                    Ce formulaire doit rediriger vers la page <strong>index.php</strong>. <br>
                    Vous avez le choix de la méthode.
                </p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <!-- Ici, l'action codée en php permet de renvoyer sur la page courante en protégeant notre code du hacking. -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div>
                        <select name="civility" class="form-control">
                            <!--Préférer mettre des nombres en value dans la balise option du select pour éviter les erreurs-->
                            <option selected disabled>Veuillez sélectionner une option</option>
                            <!--selected permet d'afficher cette option par défaut
                            disabled empêche l'utilisateur de sélectionner cette option-->
                            <option value="Mr">M</option>
                            <option value="Mrs">Mme</option>
                        </select>
                    </div>

                    <div>
                        <input class="mt-3 form-control" type="text" name="lastname" id="lastname"
                            placeholder="Entrez votre nom">
                    </div>
                    <div>
                        <input class="mt-3 form-control" type="text" name="firstname" id="firstname"
                            placeholder="Entrez votre prénom">
                    </div>
                    <button class="mt-3 btn btn-primary" type="submit">Envoyer !</button>
                </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>