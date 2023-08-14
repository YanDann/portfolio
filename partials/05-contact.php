<?php

$email = $_POST['email'] ?? null;
if (isset($email)) {
    $name = strstr($email, '@', true);
}

$message = $_POST['message'] ?? null;
$carac = 15;

$subject = $_POST['subject'] ?? null;
$subjectTab = [
    'Proposition de stage',
    'Proposition d\'emploi',
    'Demande de projet',
];

$errors = [];

if (!empty($_POST)) {
    if (empty($email)) {
        $errors['email'] = "L'email est obligatoire.";
        $validEmail = "invalid";
    } else if (!validEmail($email)) {
        $errors['email'] = "L'email est invalide";
        $validEmail = "invalid";
    }

    if (!isset($subject)) {
        $errors['subject'] = "Vous devez choisir un sujet.";
        $validSubject = "invalid";
    }

    if (strlen($message) < $carac) {
        $errors['message'] = "Le message doit faire au moins $carac carractères.";
        $validMessage = "invalid";
    }

    if (empty($errors)) {
        $success = "Bonjour $name, votre " . strtolower($subject) . " a bien été envoyée et sera prise en compte dans les plus bref délais.";

        mail("mcn.julien@gmail.com", $subject, $message);
    }
}

?>

<section class="experiences flex" data-aos="fade-left" data-aos-duration="2000">
    <div class="titleSection flex">
        <h2><span>05.</span> Me contacter</h2>
        <div class="lineParag"></div>
    </div>

    <?php if (isset($success)) { ?>
        <span><?= $success; ?></span>
    <?php } ?>


    <div class="contactContent">
        <form method="post">
            <label for="email">Email</label>
            <?php showErrors('email', $errors); ?>
            <input class="<?= $validEmail; ?>" type="text" id="email" name="email" placeholder="name@gmail.com" value="<?= $email; ?>">

            <label for="subject">Sujet</label>
            <?php showErrors('subject', $errors); ?>
            <select class="<?= $validSubject; ?>" name="subject" id="subject">
                <option selected disabled>Choisissez un sujet</option>
                <?php for ($i = 0; $i < count($subjectTab); $i++) { ?>
                    <option <?= $subject == $subjectTab[$i] ? 'selected' : '' ?> value="<?= $subjectTab[$i]; ?>">
                        <?= $subjectTab[$i]; ?>
                    </option>
                <?php } ?>
            </select>

            <label for="message">Message</label>
            <?php showErrors('message', $errors); ?>
            <textarea class="<?= $validMessage; ?>" name="message" id="message" cols="30" rows="10" placeholder="Ecrivez votre message"><?= $message; ?></textarea>

            <button type="submit" class="submitButton">Envoyer</button>
        </form>
    </div>
</section>