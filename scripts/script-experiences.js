// ['Identidiant', 'Nom entreprise' , 'Titre ', 'Durée', 'Paragraphe explicatif', 'Lien vers leur site']
allXp = [
    ['EDFENR', 'EDF ENR', 'Dessinateur de plan ', 'Septembre 2022 - Fevrier 2023', 'Ceci est mon paragraphe expliquant ce que j\'ai fais dans ce job', 'https://www.edfenr.com/'],
    ['Freelance', 'Home', 'Freelance ', 'Mars 2021 - Juillet 2022', 'Mon projet perso d\'agence immobilière 2.0', '#'],
    ['C.R.V.M', 'C.R.V.M', 'Designer UI/UX ', 'Juillet 2020 - Janvier 2021', 'Projet Mistral, nuit europpéènne des chercheurs', 'https://www.crvm.eu/'],
    ['Ayctor', 'Ayctor', 'Infographiste 3D ', 'Juillet 2017 - Septembre 2017', 'Création d\'un prototype de visite virtuelle d\'un bien immobilier encore non existant', 'https://ayctor.com/'],
    ['Defta', 'Defta', 'Opérateur CAO ', 'Juin 2014 - Juillet 2014', 'Explication de mon passage dans l\'industrie', 'https://www.defta.eu/'],
];

function experiences(experience) {
    // Recupération d'un tableau de bouton compris dans la div class="xp-menu"
    const buttons = document.querySelectorAll("div.xp-menu > button");

    switch (experience) {
        case 'EDFENR':
            // Desactive les autres boutons
            buttons.forEach(element => element.style.borderLeftColor = "");
            buttons.forEach(element => element.style.color = "");
            // Activation du bouton
            document.getElementById('b1').style.borderLeftColor = "#64ffda";
            document.getElementById('b1').style.color = "#64ffda";
            document.getElementById('b1').style.transition = "500ms";
            break;
        case 'Freelance':
            buttons.forEach(element => element.style.borderLeftColor = "");
            buttons.forEach(element => element.style.color = "");

            document.getElementById('b2').style.borderLeftColor = "#64ffda";
            document.getElementById('b2').style.color = "#64ffda";
            document.getElementById('b2').style.transition = "500ms";
            break;
        case 'C.R.V.M':
            buttons.forEach(element => element.style.borderLeftColor = "");
            buttons.forEach(element => element.style.color = "");

            document.getElementById('b3').style.borderLeftColor = "#64ffda";
            document.getElementById('b3').style.color = "#64ffda";
            document.getElementById('b3').style.transition = "500ms";
            break;
        case 'Ayctor':
            buttons.forEach(element => element.style.borderLeftColor = "");
            buttons.forEach(element => element.style.color = "");

            document.getElementById('b4').style.borderLeftColor = "#64ffda";
            document.getElementById('b4').style.color = "#64ffda";
            document.getElementById('b4').style.transition = "500ms";
            break;
        case 'Defta':
            buttons.forEach(element => element.style.borderLeftColor = "");
            buttons.forEach(element => element.style.color = "");

            document.getElementById('b5').style.borderLeftColor = "#64ffda";
            document.getElementById('b5').style.color = "#64ffda";
            document.getElementById('b5').style.transition = "500ms";
            break;
    }

    // Parcours du tableau + injection d'informations
    for (i = 0; allXp.length; i++) {
        if (allXp[i][0] === experience) {
            console.log(allXp[i]);
            document.getElementById("entreprise-xp-script").innerHTML = allXp[i][1]; // nom entreprise
            document.getElementById("entreprise-xp-script").href = allXp[i][5]; // lien vers site
            document.getElementById("h2-xp-script").innerHTML = allXp[i][2]; // poste occupé
            document.getElementById("h3-xp-script").innerHTML = allXp[i][3]; // dates
            document.getElementById("p-xp-script").innerHTML = allXp[i][4]; // description
            return allXp[i];
        }
    }
}