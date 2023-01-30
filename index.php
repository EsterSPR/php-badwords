<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Badwords</title>
</head>
<body>
    <form action="./badword.php" method="POST">
        <textarea name="bigtext" id="bigtext" cols="30" rows="3" placeholder="Testo non censurato"></textarea>
        <input type="text" name="badword" placeholder="Parola da censurare">
        <button type="submit">Invia </button>
    </form>
</body>
</html>