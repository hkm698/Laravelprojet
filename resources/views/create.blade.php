<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .message {
            margin-top: 10px;
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Ajouter un Chat</h2>
    <form method="POST" action="confirmation">

        <label for="nom">Nom du chat :</label><br>
        <input type="text" name="nom" placeholder="Nom du chat" required><br>

        <label for="prix">Prix du chat :</label><br>
        <input type="number" name="prix" placeholder="Prix en euros" required><br>

        <label for="race">Description :</label><br>
        <input type="text" name="des" placeholder="Description" required><br>

        <label for="birth_date">Date de naissance :</label><br>
        <input type="date" name="birth_date" required><br>

        <button type="submit">Ajouter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "thouverez";

        // Création de la connexion
        $conn = new mysql($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }

        // Récupération des données du formulaire
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $birth_date = $_POST['birth_date'];

        // Requête SQL d'insertion
        $sql = "INSERT INTO cats (name, price, desc, birth_date) VALUES ('$name', '$price', '$desc', '$birth_date')";

        // Exécution de la requête et vérification
        if ($conn->query($sql) === TRUE) {
            echo "<div class='message'>Le chat a été ajouté avec succès !</div>";
        } else {
            echo "<div class='message' style='color: red;'>Erreur : " . $sql . "<br>" . $conn->error . "</div>";
        }

        // Fermeture de la connexion
        $conn->close();
    }
    ?>

</div>
</body>
</html>
