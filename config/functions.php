<?php

function isSelected(string $value, string $selected): string
{
    return ($selected === $value) ? 'style="border-left: 2px #64ffda solid; color: #64ffda;"' : '';
}

/**
 * Permet de valider un email
 */
function validEmail(string $email): bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function showErrors(string $value, array $errors) {
    if (!empty($errors)) { ?>
        <p class="invalid-text"><?= $errors[$value]; ?></p>
    <?php } 
}

