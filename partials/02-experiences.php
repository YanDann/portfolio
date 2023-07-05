<?php
require 'config/functions.php'; 

$buttonName = $_POST['xp'] ?? 'EDF ENR';
$experiences = [
    'EDF ENR',
    'C.R.V.M',
    'Ayctor',
    'Defta',
];

?>

<section class="experiences flex">
    <div class="titleSection flex">
        <h2><span>02.</span> Mes expériences</h2>
        <div class="lineParag"></div>
    </div>

    <div class="flex">
        <form action="" method="post" class="listExperiences flex">
            <button name="xp" id="edfenr" value="EDF ENR" <?= isSelected('EDF ENR', $buttonName); ?>>EDF ENR</button>
            <button name="xp" id="crvm" value="C.R.V.M" <?= isSelected('C.R.V.M', $buttonName); ?>>C.R.V.M</button>
            <button name="xp" id="ayctor" value="Ayctor" <?= isSelected('Ayctor', $buttonName); ?>>Ayctor</button>
            <button name="xp" id="defta" value="Defta" <?= isSelected('Defta', $buttonName); ?>>Defta</button>
        </form>
        <div class="sectionContent">
            <?= experienceToShow($experiences, $buttonName); ?>
        </div>
    </div>
</section>