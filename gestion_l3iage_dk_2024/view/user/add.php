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

<h1>Ajouter un utilisateur</h1>
<form method="POST" action="index.php?controller=user&action=save">
    <label>Nom :</label>
    <input type="text" name="nom" required><br>
    <label>Prénom :</label>
    <input type="text" name="prenom" required><br>
    <label>Email :</label>
    <input type="email" name="email" required><br>
    <label>Mot de passe :</label>
    <input type="password" name="password" required><br>
    <button type="submit">Enregistrer</button>
</form>
