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
    </style>
</head>

<body>
    <div class="container bg-light">
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


        <hr>
        <h2>Liste des produits</h2>
        <br>

        <div class="container bg-light text-center">

            <?php

            //connexion base de donnée
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=bd_commerce', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            //requete sql
            $reponse = $bdd->query("SELECT * FROM produits");

            //verification
            if ($reponse->rowCount() > 0) {
                //tableau html 
                echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>LIBELLE</th>";
                echo "<th>PRIX_UNITAIRE</th>";
                echo "</tr>";
                echo "</thead>";

                echo "<tbody>";
                // afficher les valeurs du tableau de la base
                while ($row = $reponse->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["libelle"] . "</td>";
                    echo "<td>" . $row["prix_unitaire"] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";

                // echo "</container>";
            } else {
                echo "aucune valeur trouvée!!";
            }

            /* echo '<tr> <td>.$row["id"].</td> <td>.$row["libelle"].</td>td>.$row["prix_unitaire"]<td/> </tr>';*/

            $connexion = null;

            //$donne= $reponse->fetch();

            /* while ($donne = $reponse->fetch()) {
                echo $donne['libelle'] . ' : ' . $donne['prix_unitaire'] . ' FCFA ', '<br> <br>';
            }

            $reponse->closeCursor();*/
            ?>

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