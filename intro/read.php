<?php

// Le fichier boot.php contient la configuration et la connection à la base de données
require __DIR__ . '/boot.php';

use App\Repository\UserRepository;

// Créer une instance de la classe \App\Repository\UserRepository

// Utiliser cette instance pour récupérer l'utilisateur à afficher.
// L'identifiant de l'utilisateur à afficher peut être récupéré dans la variable globale $_GET['id']
// Contrôler la valeur de l'identifiant (nombre entier supérieur à zéro).
// Si l'identifiant n'est pas valide (c'est sans doute qu'un lien est mal formatté dans un autre fichier PHP),
// rediriger l'internaute ou afficher une message d'erreur.

// Plus bas dans le code HTML, afficher le détail de l'utilisateur
// ou le message d'erreur si l'utilisateur est introuvable

?>
<!doctype html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Administration</title>
</head>
<body>

<?php include 'includes/topbar.php'; ?>

<div class="container-fluid">
    <div class="row">

        <?php include 'includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Liste des utilisateurs</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <!-- Lien vers la page "Modifier l'utiliateur" -->
                    <!-- Ajouter l'identifiant de l'utilisateur dans l'attribut 'href' du lien -->
                    <a href="update.php?id=" class="btn btn-warning">
                        Modifier
                    </a>
                    &nbsp;
                    <!-- Lien vers la page "Supprimer l'utiliateur" -->
                    <!-- Ajouter l'identifiant de l'utilisateur dans l'attribut 'href' du lien -->
                    <a href="delete.php?id=" class="btn btn-danger">
                        Supprimer
                    </a>
                </div>
            </div>

            <!-- Si l'utilisateur est introuvable, afficher le message d'erreur si dessous -->
            <div class="alert alert-danger">
                Utiliateur introuvable
            </div>

            <!-- Sinon, afficher le détail de l'utilisateur -->
            <table class="table">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>2</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>john.doe@example.org</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <th>Date de naissance</th>
                    <!-- Voir page Astuces (Tips) de la documentation -->
                    <td>01/01/2000</td>
                </tr>
                <tr>
                    <th>Actif</th>
                    <td>Oui</td>
                </tr>
                </tbody>
            </table>

        </main>
    </div>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>

