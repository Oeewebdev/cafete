<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <style>
        h3 {
            color: white;
        }
    </style>

    <title>connexion</title>
</head>

<body style="background-color:black;">




    <div class="container">

        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les valeurs des champs email et password
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Vérifier le format de l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // afficher un message d'erreur
                echo "<h3>Adresse email invalide. Veuillez entrer une adresse email valide.</h3>";
            } elseif (empty($password)){
                //  afficher un message d'erreur
                echo "<h3>Mot de passe manquant. Veuillez entrer votre mot de passe.</h3>";
            } else {
                // Les champs sont valides, rediriger vers la page dashboard.php
                header("Location: dashboard.php");
                exit();
            }
        }
        ?>

        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="image/online-shop-logo-design-vector.jpg" alt="" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item text-center">
                            <a class="nav-link active" aria-current="page" href="#">ACCUEIL</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">PRODUITS</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <!--connexion_form-->
        <div class="container p-3 text-center bg-light">

            <h1 style="color:darkorange;">connexion</h1>
            <hr style="color:orange">
            <br><br>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                    <div class="col">
                        <label for="email" class="form-label" style="color:black;">Email
                            address</label><br>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter email" name="email"> <!--required-->
                    </div>

                </div><br>
                <div class="row">
                    <div class="col">
                        <label for="password" class="form-label" style="color:black;">Password</label><br>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password" name="password">
                    </div>

                </div><br>
                <button type="submit" class="btn btn-outline-warning">Se connecter</button>

            </form>

            <br>
            <br>
            <!--footer-->
            <div class="container-fluid">
                <div class="col-12 bg-dark-subtle text-center" style="height:70px;">
                    <h3 style="color:darkorange;">CONTACT : 78.48.00.00</h3>
                    <p style="color:darkorange;"><em>@copyright 2023</em></p>
                </div>
            </div>

        </div>
    </div>





    <script src="Bootstrap/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>

</html>