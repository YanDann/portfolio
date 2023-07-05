<?php

function isSelected(string $value, string $selected): string
{
    return ($selected === $value) ? 'style="border-left: 2px #64ffda solid; background-color: #112240;; color: #64ffda;"' : '';
}

function experienceToShow(array $experiences, string $value)
{ ?>
    <?php foreach ($experiences as $experience) { ?>
    <?php if ($experience === $value && $value === 'EDF ENR') { ?>
        <p>Ici je vais écrire le paragraphe de mon expérience à EDF ENR en tant que déssinateur de plan, je faisais les travaux de pose des panneaux photovoltaïques pour toutes les toitures de France.</p>
    <?php } else if ($experience === $value && $value === 'C.R.V.M') { ?>
        <p>Ce paragraphe racontera mon aventure au C.R.V.M, mes premiers pas au CNRS en tant que Designer UI / UX, où j'ai eu l'occasion de développer une application mobile pour la nuit europpeènne des chercheurs.</p>
    <?php } else if ($experience === $value && $value === 'Ayctor') { ?>
        <p>Paragraphe explicitant mon aventure à Paris dans la startup Ayctor, où j'ai pu développer une visite virtuelle d'un bien immobilier encore non existant pour COGEDIM.</p>
    <?php } else if ($experience === $value && $value === 'Defta') { ?>
        <p>Paragraphe sur mon travail en tant qu'opérateur CAO affecté au service maintenance de l'usine DEFTA.</p>
<?php }
    }
}
