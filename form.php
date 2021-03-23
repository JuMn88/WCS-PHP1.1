<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname">
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="user_phone">
        </div>
        <div>
            <label for="subject">Sujet :</label>
            <select id="subject" name="user_subject">
                <option value="la météo">Le temps qu'il fait</option>
                <option value="la covid">La COVID</option>
                <option value="Fabrice de la compta">Un collègue problématique</option>
                <option value="la cantine">La Cantoche</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>

</body>
</html>