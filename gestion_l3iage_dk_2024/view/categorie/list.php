<head>
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

        .add-categorie-link {
            margin-bottom: 20px;
            font-size: 18px;
            display: inline-block;
        }

        .add-categorie-link a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .add-categorie-link a:hover {
            background-color: #0069d9;
        }

        /* Styles pour les tables responsives */
        .table-responsive {
            margin-top: 20px;
            overflow-x: auto;
        }

        /* Amélioration de la visibilité des boutons */
        a.btn-actions.edit, a.btn-actions.delete {
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>

<div class="container">
    <div class="add-categorie-link">
        <a href="?controller=categorie&&action=add" class="btn-actions">Add Catégorie</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Libelle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($c = pg_fetch_assoc($categories)) { ?>
                    <tr>
                        <!-- <td><?= $c['id'] ?></td> -->
                        <td><?= $c['libelle'] ?></td>
                        <td>
                            <a href="?controller=categorie&&action=delete&&id=<?= $c['id'] ?>" class="btn-actions delete">Delete</a>
                            <a href="?controller=categorie&&action=edit&&id=<?= $c['id'] ?>" class="btn-actions edit">Update</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
