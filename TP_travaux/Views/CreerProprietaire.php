<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Proprietaire</title>
    <?php include_once "../include/include.php"?>
    <?php include_once "../include/include1.php"?>
</head>
<body>
    <?php include_once "../include/header.php"?>
    <?php include_once "../controllers/getListeProprietaires.php"?>
    <div class="text-center"><h1>Enregistrer les contacts</h1><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h2 class="text-center">Veuillez saisir les differents Parametres</h2>
            <form action="../controllers/enregistrerProprietaire.php" method="POST">
                <section class="row" style="margin: 15px;">
                    <div class="col-sm-6">
                        <label class="form-label">Num du Proprietaire</label>
                        <input name="numProprietaire" type="number" class="form-control" required>

                        <label for="">Nom</label>
                        <input type="text" name="nomProprietaire" class="form-control" required>

                        <label class="form-label">Prenom</label>
                        <input type="text" name="prenomProprietaire" class="form-control" required>

                        <label class="form-label">Adresse 1</label>
                        <input type="text" name="adresse1Proprietaire" class="form-control" required>

                        <label class="form-label">Adresse 2</label>
                        <input type="text" name="adresse2Proprietaire" class="form-control">
                        <!-- <label class="form-label">Code Postal</label>
                        <input type="text" name="codePostalProprietaire" class="form-control" required> -->
                    </div>
                    <div class="col-sm-6">
                        <!-- <label class="form-label">Ville</label>
                        <input type="text" name="villeProprietaire" class="form-control" required> -->

                        <label for="">Numero telephone 1</label>
                        <input type="text" name="numTel1Proprietaire" class="form-control" required>

                        <!-- <label for="">Numero telephone 2</label>
                        <input type="text" name="numTel2Proprietaire" class="form-control"> -->

                        <!-- <label class="form-label">CA Cumule</label>
                        <input type="number" name="caCumuleProprietaire" class="form-control" required> -->

                        <label class="form-label">Email</label>
                        <input type="email" name="emailProprietaire" class="form-control" required>
                    </div>
                </section>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><br>
                        <button type="submit" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Enregistrer</button>
                    </div>
                    <div class="col-4"></div>
                </div>
            </form>
            
        </div> 
        <div class="col-2"></div>
    </div>
    <br>

    <script>
        $('table tr td').click(function() {
        var nom = $(this).data('nom');
        var numero = $(this).data('numero');
        var email = $(this).data('email');

        // Afficher le numéro et l'adresse email
        alert(nom + ' : ' + numero + ' : ' + email);
        });
    </script>

    <div class="mx-3">
        <h2 class="text-center"> Liste de contacts</h2>

        <div style="display:inline-flex ;display: flex; justify-content: center;align-items: center;" >
            <div>
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Num</th>
                                    <th>Nom</th>
                                    <!-- <th>Prenom</th>
                                    <th>Adresse 1</th>
                                    <th>Adresse 2</th>
                                    <th>Numero Tel1</th>
                                    <th>Email</th>
                                </tr> -->

                                <?php
                                $proprietaires = getListeProprietaires();
                                for ($i = 0; $i < count($proprietaires); $i++)  {
                                    echo "<tr>";
                                    // echo "<th scope =\"row\">".$proprietaires[$i]->getNumlocation()."</th>";
                                    echo "<td scope = \"row\">" .$proprietaires[$i]->getnumProprietaire()."</td>";

                                    echo "<td data-nom=".$proprietaires[$i]->getNomproprietaire()." scope = \"row\">" .$proprietaires[$i]->getNomproprietaire()."</td>";

                                    // echo "<td data-prenom=".$proprietaires[$i]->getPrenomproprietaire()." scope = \"row\">" .$proprietaires[$i]->getPrenomproprietaire()."</td>";

                                    // echo "<td data-adr1=".$proprietaires[$i]->getAdresse1proprietaire()." scope = \"row\">" .$proprietaires[$i]->getAdresse1proprietaire()."</td>";

                                    // echo "<td data-adr2=".$proprietaires[$i]->getAdresse2proprietaire()." scope = \"row\">" .$proprietaires[$i]->getAdresse2proprietaire()."</td>";

                                    // echo "<td data-numtel=".$proprietaires[$i]->getNumtel1proprietaire()." scope = \"row\">" .$proprietaires[$i]->getNumtel1proprietaire()."</td>";

                                    // echo "<td data-maila=".$proprietaires[$i]->getEmailproprietaire()." scope = \"row\">" .$proprietaires[$i]->getEmailproprietaire()."</td>";
                                
                                }            
                                ?>
                            </thead>
                    </table>
            </div>

            <div style="">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Prenom</th>
                            <th>Adresse 1</th>
                            <th>Adresse 2</th>
                            <th>Numero Tel1</th>
                            <th>Email</th>
                        </tr>

                        <?php
                        $proprietaires = getListeProprietaires();
                        for ($i = 0; $i < count($proprietaires); $i++)  {
                            echo "<tr>";
                            // echo "<th scope =\"row\">".$proprietaires[$i]->getNumlocation()."</th>";
                            // echo "<td scope = \"row\">" .$proprietaires[$i]->getnumProprietaire()."</td>";

                            // echo "<td data-nom=".$proprietaires[$i]->getNomproprietaire()." scope = \"row\">" .$proprietaires[$i]->getNomproprietaire()."</td>";

                            echo "<td data-prenom=".$proprietaires[$i]->getPrenomproprietaire()." scope = \"row\">" .$proprietaires[$i]->getPrenomproprietaire()."</td>";

                            echo "<td data-adr1=".$proprietaires[$i]->getAdresse1proprietaire()." scope = \"row\">" .$proprietaires[$i]->getAdresse1proprietaire()."</td>";

                            echo "<td data-adr2=".$proprietaires[$i]->getAdresse2proprietaire()." scope = \"row\">" .$proprietaires[$i]->getAdresse2proprietaire()."</td>";

                            echo "<td data-numtel=".$proprietaires[$i]->getNumtel1proprietaire()." scope = \"row\">" .$proprietaires[$i]->getNumtel1proprietaire()."</td>";

                            echo "<td data-maila=".$proprietaires[$i]->getEmailproprietaire()." scope = \"row\">" .$proprietaires[$i]->getEmailproprietaire()."</td>";
                        }            
                        ?>
                    </thead>
                </table>
            </div>
        </div>

        </table>
    </div>
</body>

</html>