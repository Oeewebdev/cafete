<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body {
            background-color: black;
        }

        .bg-image {
            background-image: url(image/delivery-3670118_1280.jpg);
            background-size: cover;
            height: 600px;
        }

        .nos_produits {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="image/online-shop-logo-design-vector.jpg" alt="" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item text-center">
                            <a class="nav-link active" aria-current="page" href="index.html">ACCUEIL</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="utilisateur/connexion.php">PRODUITS</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>



        <div class="conntainer bg-dark-subtle text-center">
            <br>
            <br>
            <div class="row">
                <div class="col align-self-center ">
                    <h2 style="text-decoration: underline;">A Propos</h2>
                    <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eveniet ducimus
                            reiciendis quo est earum in neque vitae atque facere.</strong></p>
                </div>
                <div class="col">
                    <img src="image/delivery-3670118_1280.jpg"
                        style="border-radius: 25px; box-shadow: 6px 6px 25px rgba(0, 0, 0, 0.5);" class="img-thumbnail"
                        alt="...">
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- <div class="conntainer bg-primary-subtle text-center">
            <div class="row">
                <div class="col align-self-center ">
                    <h2 style="text-decoration: underline;">A Propos</h2>
                    <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eveniet ducimus
                            reiciendis quo est earum in neque vitae atque facere.</strong></p>
                </div>
                <div class="col">
                    <img src="image/ecommerce-3082813_1280.jpg" class="img-thumbnail" alt="...">
                </div>

            </div>
        </div> -->


        <!--produits-->
        <div class="container text-center bg-light">
            <br><br>
            <h2 class="nos_produits" style="color: darkorange;">Nos Produits</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php
                    //connexion bd
                    try {
                        $bdd = new PDO('mysql:host=localhost;dbname=bd_commerce', 'root', '');
                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }

                    //reponse bd
                    $reponse = $bdd->query("SELECT * FROM produits");

                   

                    //img:src="data:image/jpeg;base64,"

                    ?>
            <!--product_row-->
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <!-- <a href="image/café.jpg"> -->
                        <img src="data:image/jpg;base64,<?= base64_encode($product['image_url']) ?>" width="100%" alt="Product" title="image" />
                        <!-- </a> -->
                        <br>
                        <br>
                        <p><strong>CAFE, 500 FRANC</strong></p>
                    </div>
                    <div class="col">
                        <img src="image/sucre.jpg" alt="café" width="100px" height="196.17px">
                        <br>
                        <br>

                        <p><strong>SUCRE, 2000 FRANC</strong></p>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="row text-center">
                    <?php
                    //connexion bd
                    try {
                        $bdd = new PDO('mysql:host=localhost;dbname=bd_commerce', 'root', '');
                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }

                    //reponse bd
                    $reponse = $bdd->query("SELECT * FROM produits");

                   

                    //img:src="data:image/jpeg;base64,"

                    ?>
                    <div class="col">
                        <img src="image/lait.jpg" alt="café" width="170px">
                        <br>
                        <br>
                        <p><strong>CAFE, 500 FRANC</strong></p>
                    </div>
                    <div class="col">
                        <img src="image/miel.png" alt="café" width="170px">
                        <br>
                        <br>

                        <p><strong>SUCRE, 2000 FRANC</strong></p>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="container-fluid">
                <div class="col-12 bg-dark-subtle text-center" style="height:70px;">
                    <h3 style="color:darkorange;">CONTACT : 78.48.00.00</h3>
                    <p style="color:darkorange;"><em>@copyright 2023</em></p>
                </div>
            </div>
            <br>
        </div>



        <script src="Bootstrap/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>

</html>