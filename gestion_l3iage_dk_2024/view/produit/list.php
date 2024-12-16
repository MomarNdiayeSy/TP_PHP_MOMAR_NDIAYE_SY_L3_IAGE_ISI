<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Produits</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 20px;
        }

        .container {
            margin-top: 30px;
        }

        .table th, .table td {
            text-align: center;
        }

        .btn-actions {
            margin: 0 5px;
        }

        a.btn-actions {
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        a.btn-actions.edit {
            background-color: #ffc107;
        }

        a.btn-actions.delete {
            background-color: #dc3545;
        }

        .btn-actions:hover {
            opacity: 0.8;
        }

        .add-product-link {
            margin-bottom: 20px;
            font-size: 18px;
            display: inline-block;
        }

        .add-product-link a {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .add-product-link a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Lien vers la page d'ajout -->
        <div class="add-product-link">
            <a href="?controller=produit&&action=add">Ajouter un Produit</a>
        </div>

        <!-- Tableau des produits -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Libelle</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($p = pg_fetch_assoc($produits)) { ?>
                    <tr>
                        <!-- <td><?= $p['id'] ?></td> -->
                        <td><?= $p['libelle'] ?></td>
                        <td><?= $p['qt'] ?></td>
                        <td><?= $p['pu'] ?></td>
                        <td><?= $p['categorie'] ?></td>
                        <td>
                            <a href="?controller=produit&&action=delete&id=<?= $p['id'] ?>" class="btn-actions delete">Supprimer</a>
                            <a href="?controller=produit&&action=edit&id=<?= $p['id'] ?>" class="btn-actions edit">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
