<head>
    <style>
        form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 20px auto;
        }

        form label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 16px;
        }

        form input:focus, form select:focus {
            border-color: #80bdff;
            outline: none;
        }

        form button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
        }

    </style>
</head>

<form action="?controller=produit&&action=save" method="POST">
    <label for="">Libelle</label>
    <input type="text" name="libelle"><br>

    <label for="">Quantité</label>
    <input type="text" name="quantite"><br>

    <label for="">Prix Unitaire</label>
    <input type="text" name="prix"><br>

    <label for="">Catégorie</label>
    <select name="idcat">
        <?php while($c = pg_fetch_assoc($categories)) { ?>
            <option value="<?= $c['id'] ?>"><?= $c['libelle'] ?></option>
        <?php } ?>
    </select><br>

    <button type="submit">Ajouter</button>
</form>
