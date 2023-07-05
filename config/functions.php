<?php

function isSelected(string $value, string $selected): string
{
    return ($selected === $value) ? 'style="border-left: 2px #64ffda solid; color: #64ffda;"' : '';
}

function experienceToShow(array $experiences, string $value)
{ ?>
    <?php foreach ($experiences as $experience) { ?>
        <?php if ($experience === $value && $value === 'EDF ENR') { ?>
            <h2 class="experiencesH2">Dessinateur de plan <span>@ </span><a href="https://www.edfenr.com/" target="_blank">EDF ENR</a></h2>
            <h3>Septembre 2022 - Fevrier 2023</h3>
            <p>Ici je vais écrire le paragraphe de mon expérience à EDF ENR en tant que déssinateur de plan, je faisais les travaux de pose des panneaux photovoltaïques pour toutes les toitures de France.</p>
        <?php } else if ($experience === $value && $value === 'Freelance') { ?>
            <h2 class="experiencesH2">Freelance <span>@ Home</span></h2>
            <h3>Mars 2021 - Juillet 2022</h3>
            <p>Je vais raconter mon histoire en tant que Designer Freelance, mon projet de visite virtuelle de bien immobilier orienté VR. Une solution d'agence immobilière 2.0.</p>
        <?php } else if ($experience === $value && $value === 'C.R.V.M') { ?>
            <h2 class="experiencesH2">Designer UI / UX <span>@ </span><a href="https://www.crvm.eu/" target="_blank">C.R.V.M</a></h2>
            <h3>Juillet 2020 - Janvier 2021</h3>
            <p>Ce paragraphe racontera mon aventure au C.R.V.M, mes premiers pas au CNRS en tant que Designer UI / UX, où j'ai eu l'occasion de développer une application mobile pour la nuit europpeènne des chercheurs.</p>
        <?php } else if ($experience === $value && $value === 'Ayctor') { ?>
            <h2 class="experiencesH2">Infographiste 3D <span>@ </span><a href="https://ayctor.com/" target="_blank">Ayctor</a></h2>
            <h3>Juillet 2017 - Septembre 2017</h3>
            <p>Paragraphe explicitant mon aventure à Paris dans la startup Ayctor, où j'ai pu développer une visite virtuelle d'un bien immobilier encore non existant pour COGEDIM.</p>
        <?php } else if ($experience === $value && $value === 'Defta') { ?>
            <h2 class="experiencesH2">Opérateur CAO <span>@ </span><a href="https://www.defta.eu/" target="_blank">Defta</a></h2>
            <h3>Juin 2014 - Juillet 2014</h3>
            <p>Paragraphe sur mon travail en tant qu'opérateur CAO affecté au service maintenance de l'usine DEFTA.</p>
<?php }
    }
}
