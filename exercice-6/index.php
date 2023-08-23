<?php

    $error = array(); // ou $error = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!empty($_POST['lastname'])) {
            $lastname = $_POST['lastname'];
        } else {
            $error['lastname'] = 'Votre nom n\'est pas renseigné';
        }
        
        if (!empty($_POST['firstname'])) {
            $firstname = $_POST['firstname'];
        } else {
            $error['firstname'] = 'Votre prénom n\'est pas renseigné';
        }
        
        if (!empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $error['gender'] = 'Votre civilité n\'est pas renseigné';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-2/public/assets/css/style.css">
    <title>Exercice 6</title>
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
                        <a class="nav-link" href="/exercice-5/index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/exercice-6/index.php">Exercice 6</a>
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
                <h1 class="text-center p-5">Exercice 6</h1>
                <p class="text-center fs-4">
                    Avec le formulaire de l'exercice 5, Si des données sont passées en <strong>POST</strong> ou en <strong>GET</strong>, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. <br>

                    N'utiliser qu'une seule page.
                </p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
        <?php if ($_SERVER['REQUEST_METHOD'] != 'POST' || !empty($error) ) { ?>
                    <!-- Ici, l'action codée en php permet de renvoyer sur la page courante en protégeant notre code du hacking. -->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div>
                            <select name="gender" class="form-control">
                                <!--Préférer mettre des nombres en value dans la balise option du select pour éviter les erreurs-->

                                <!--selected permet d'afficher cette option par défaut
                                disabled empêche l'utilisateur de sélectionner cette option-->
                                <option selected disabled>Votre civilité</option>
                                <!-- Ici dans la ternaire on regarde si la variable existe et qu'elle est égale à la valeur courante de l'option
                                Dans ce cas, on selectionne l'option concernée -->
                                <option value="Mr" <?= (isset($gender) && $gender=='Mr') ? 'selected' : ''?>>M</option>
                                <option value="Mrs" <?= (isset($gender) && $gender=='Mrs') ? 'selected' : ''?>>Mme</option>
                            </select>
                        </div>

                        <div class="error">
                            <!-- L'usage de htmlentities permet de convertir certains caractères en entités html -->
                            <?= htmlentities($error['gender'] ?? '', ENT_QUOTES, 'UTF-8')?>
                        </div>

                        <div>
                            <input class="mt-3 form-control" type="text" name="lastname" id="lastname"
                                placeholder="Entrez votre nom" value="<?=htmlentities($lastname ?? '', ENT_QUOTES, 'UTF-8')?>">
                        </div>

                        <div class="error">
                            <?= htmlentities($error['lastname'] ?? '', ENT_QUOTES, 'UTF-8')?>
                        </div>

                        <div>
                            <input class="mt-3 form-control" type="text" name="firstname" id="firstname"
                                placeholder="Entrez votre prénom" value="<?=htmlentities($firstname ?? '', ENT_QUOTES, 'UTF-8')?>">
                        </div>

                        <div class="error">
                            <?= htmlentities($error['firstname'] ?? '', ENT_QUOTES, 'UTF-8')?>
                        </div>
                        

                        <button class="mt-3 btn btn-primary" type="submit">Envoyer !</button>
                    </form>
                <?php } else { ?>
                    <?= $gender.' '.$firstname.' '.$lastname?>
                <?php } ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>