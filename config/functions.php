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

/**
 * Permet de valider des valeurs dans un tableau
 */
function validArray(array $data, array $valid): bool{
    foreach ($data as $item){
        if (!in_array($item, $valid)){
            return false;
        }
    }
    return true;
}

/**
 * Permet d'afficher cehcked si une valeur est dans un tableau
 */
function checked(string $value, array $array): string{
    return in_array($value, $array) ? 'checked' : '';
}

function showErrors(string $value, array $errors) {
    if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            <p class="m-0"><?= $errors[$value]; ?></p>
        </div>
    <?php } 
}

