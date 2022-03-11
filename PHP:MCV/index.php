<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Animaux & co</title>
</head>

<body>
    <h1>Bienvenue sur Animaux & Co !</h1>
    <form>
      <button type="submit" formaction="./controllers/getAll.php">Cliquez sur moi</button>
      <button type="submit" formaction="./views/addOne.php">Ajouter un animal</button>
      <button type="submit" formaction="./views/single.php">Afficher un animal</button>
      <button type="submit" formaction="./views/updateOne.php">Modifier un animal</button>
      <button type="submit" formaction="./views/deleteOne.php">Supprimer un animal</button>
    </form>

</body>
</html>