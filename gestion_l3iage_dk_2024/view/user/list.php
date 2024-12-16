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

        .add-user-link {
            margin-bottom: 20px;
            font-size: 18px;
            display: inline-block;
        }

        .add-user-link a {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .add-user-link a:hover {
            background-color: #218838;
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


    <h1>Liste des utilisateurs</h1>
    <div class="container">   
    <div class="add-user-link">
        <a href="index.php?controller=user&action=add" class="btn-actions">Ajouter un utilisateur</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th>Id</th> -->
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = pg_fetch_assoc($users)) { ?>
                    <tr>
                        <!-- <td><?= $user['id'] ?></td> -->
                        <td><?= $user['nom'] ?></td>
                        <td><?= $user['prenom'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td>
                            <a href="index.php?controller=user&action=edit&id=<?= $user['id'] ?>" class="btn-actions edit">Modifier</a>
                            <a href="index.php?controller=user&action=delete&id=<?= $user['id'] ?>" class="btn-actions delete">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
