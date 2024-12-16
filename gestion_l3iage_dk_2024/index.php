<?php
// Récupérer le contrôleur demandé ou définir 'produit' comme contrôleur par défaut
$controller = $_GET["controller"] ?? 'produit';

// Vérifier si le contrôleur est valide
if (!in_array($controller, ['produit', 'categorie', 'user'])) {
    die("Erreur : Contrôleur inconnu !");
}

// Inclure le fichier du contrôleur correspondant
require_once "./controller/{$controller}Controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de Gestion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40;
            color: #fff;
            height: 100vh;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
            font-weight: bold;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Barre latérale -->
    <div class="sidebar">
        <h4 class="p-3">Tableau de bord</h4>
        <a href="index.php?controller=produit" class="<?= $controller == 'produit' ? 'active' : '' ?>">Gestion des Produits</a>
        <a href="index.php?controller=categorie" class="<?= $controller == 'categorie' ? 'active' : '' ?>">Gestion des Catégories</a>
        <a href="index.php?controller=user" class="<?= $controller == 'user' ? 'active' : '' ?>">Gestion des Utilisateurs</a>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <?php
        // Gestion des actions dynamiques
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            $action = $_GET['action'];

            // Actions pour le contrôleur actuel
            switch ($controller) {
                case 'produit':
                    switch ($action) {
                        case 'add':
                            pageAdd();
                            break;
                        case 'delete':
                            remove();
                            break;
                        case 'save':
                            save();
                            break;
                        case 'edit':
                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                getProduit($_GET['id']);
                            } else {
                                echo "Erreur : ID manquant pour l'édition !";
                            }
                            break;
                        case 'update':
                            update();
                            break;
                        default:
                            echo "Erreur : Action inconnue pour les produits !";
                    }
                    break;

                case 'categorie':
                    switch ($action) {
                        case 'add':
                            pageAdd();
                            break;
                        case 'delete':
                            remove();
                            break;
                        case 'save':
                            save();
                            break;
                        case 'edit':
                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                getCategorie($_GET['id']);
                            } else {
                                echo "Erreur : ID manquant pour l'édition !";
                            }
                            break;
                        case 'update':
                            update();
                            break;
                        default:
                            echo "Erreur : Action inconnue pour les catégories !";
                    }
                    break;

                case 'user':
                    switch ($action) {
                        case 'add':
                            pageAdd();
                            break;
                        case 'delete':
                            remove();
                            break;
                        case 'save':
                            save();
                            break;
                        case 'edit':
                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                getUser($_GET['id']);
                            } else {
                                echo "Erreur : ID manquant pour l'édition !";
                            }
                            break;
                        case 'update':
                            update();
                            break;
                        default:
                            echo "Erreur : Action inconnue pour les utilisateurs !";
                    }
                    break;

                default:
                    echo "Erreur : Contrôleur inconnu !";
            }
        } else {
            // Si aucune action n'est spécifiée, appeler la fonction `index()`
            index();
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
