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
                            <form action="user.php" method="get">
                                <div class="form-group mb-3">
                                    <label for="civilité" name="gender" class="form-label mt-4">Civilité</label>
                                    <select class="form-select" id="civilité">
                                        <option>Mr</option>
                                        <option>Mme</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="lastname">Nom :</label>
                                    <input type="text" class="form-control" value="Baguet" name="lastname" id="lastname" placeholder="Entrez votre nom">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="firstname">Prénom :</label>
                                    <input type="text" class="form-control" value="Allan" name="firstname" id="firstname" placeholder="Entrez votre prénom">
                                </div>
                                <div class="d-flex justify-content-center m-3">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
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