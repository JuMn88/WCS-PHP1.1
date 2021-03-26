<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);

    $errors = [];

    if (empty($data['user_lastname'])) {
        $errors[] = 'Votre nom de famille';
    }

    if (empty($data['user_firstname'])) {
        $errors[] = 'Votre prénom';
    }

    if (empty($data['user_mail'])) {
        $errors[] = 'Votre adresse e-mail';
    }
    if (!filter_var($data['user_mail'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Votre adresse e-mail dans un format valide';
    }

    if (empty($data['user_phone'])) {
        $errors
        [] = 'Votre numéro de téléphone';
    }

    if (empty($data['user_message'])) {
        $errors[] = 'Votre message';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($errors == []) { ?>
        <p>Merci <?php echo $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] ?> de nous avoir contacté à propos de “<?php echo $_POST['user_subject'] ?>”.
        Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_mail'] ?> ou par téléphone au <?php echo $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande : 
        <?php echo $_POST['user_message'] ?>
        </p>
    <?php } else { ?>
        <p>Votre formulaire est incomplet. Merci de remplir correctement les champs suivants:
            <ul>
                <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </p>
    <?php } ?>
</body>
</html>