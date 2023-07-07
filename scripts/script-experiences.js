// ['Identidiant', 'Nom entreprise' , 'Titre ', 'Durée', 'Paragraphe explicatif', 'Lien vers leur site']
allXp = [
    ['EDFENR', 'EDF ENR', 'Dessinateur de plan ', 'Septembre 2022 - Fevrier 2023', 'Ceci est mon paragraphe expliquant ce que j\'ai fais dans ce job', 'https://www.edfenr.com/'],
    ['Freelance', 'Home', 'Freelance ','Mars 2021 - Juillet 2022', 'Mon projet perso d\'agence immobilière 2.0', '#'],
    ['C.R.V.M', 'C.R.V.M', 'Designer UI/UX ', 'Juillet 2020 - Janvier 2021', 'Projet Mistral, nuit europpéènne des chercheurs', 'https://www.crvm.eu/'],
    ['Ayctor', 'Ayctor', 'Infographiste 3D ', 'Juillet 2017 - Septembre 2017', 'Création d\'un prototype de visite virtuelle d\'un bien immobilier encore non existant', 'https://ayctor.com/'],
    ['Defta', 'Defta', 'Opérateur CAO ', 'Juin 2014 - Juillet 2014', 'Explication de mon passage dans l\'industrie', 'https://www.defta.eu/'],
];

function experiences(experience){
    // 'style="border-left: 2px #64ffda solid; color: #64ffda;"'

    // Parcours du tableau + injection d'information
    for (i=0; allXp.length; i++){
        if (allXp[i][0] === experience) {
            console.log(allXp[i]);
            document.getElementById("entreprise-xp-script").innerHTML = allXp[i][1];
            document.getElementById("entreprise-xp-script").href = allXp[i][5];
            document.getElementById("h2-xp-script").innerHTML = allXp[i][2];
            document.getElementById("h3-xp-script").innerHTML = allXp[i][3];
            document.getElementById("p-xp-script").innerHTML = allXp[i][4];
            return allXp[i];
        }

        switch(experience){
            case 'EDFENR':
                const button = document.getElementById("b1");
                button.style.backgroundColor = red;
                break;
            
        }
    }
}