<?php

    $titrePage = "Curriculum vitae - Mathéo Batelier - Étudiant";
    // Partie de gauche du CV
    $prenomNom = "MATHÉO BATELIER";
    $dateDeNaissance = "8 décembre 2004";
    $adresse = "6 clos du bois taillis, <br> 76350 OISSEL";
    $telephone = "06.38.17.69.64";
    $email = "contact@matheobatelier.fr";

    $listHobbies = array("Voyager", "Football", "Basketball", "Tennis");
    $listReseaux = array("Linkedin: Mathéo BATELIER", "Github: Skitroz");

    $titrePrincipal = "Recherche d'alternance développeur web";
    $titre = "PROFIL";

    $sousTitre1 = "Date de naissance";
    $sousTitre2 = "Adresse";
    $sousTitre3 = "Téléphone";
    $sousTitre4 = "E-mail";
    $sousTitre5 = "Mes Hobbies";

    // Partie de droite du CV
    $titreDroite1 = "EXPÉRIENCE PROFESSIONNELLE";
    $titreDroite2 = "FORMATIONS";
    $titreDroite3 = "COMPÉTENCES";

    $sousTitreDroite1 = "Web & Multimédia";
    $sousTitreDroite2 = "Mes aptitudes";
    $sousTitreDroite3 = "Langages";

    $listWeb = array("Conception de sites web", "Édition vidéo", "Suite adobe", "Figma");
    $listAptitude = array("À l'écoute", "Organisé", "Travail en équipe");
    $listLangage = array("HTML5 & CSS3", "PHP", "mySQL", "Javascript", "WordPress");

    $competences = array(
        "date" => "Avril-Juin 2023",
        "titre" => "Stage - L'humain entre vos mains",
        "Descriptif1" => "Création du site WordPress",
        "Descriptif2" => "Maquette"
    );
    $competences2 = array(
        "date" => "2022",
        "titre" => "Cheer Hope",
        "Descriptif1" => "Refonte du site WordPress",
        "Descriptif2" => "Maquette",
        "Descriptif3" => "Charte graphique",
        "Descriptif4" => "Communication pour la campagne 2023"
    );
    $competences3 = array(
        "date" => "2019",
        "titre" => "Ariel Industrie",
        "Descriptif1" => "Stage de découverte 3ème sur le <br>métier d'électricien"
    );
    $formation = array(
        "date" => "2022 - 2025",
        "titre" => "Normandie Web School à ROUEN",
        "Descriptif1" => "Préparation de mon bachelor <br>Titre RNCP niveau 6 bac+3"
    );
    $formation2 = array(
        "date" => "2020 - 2022",
        "titre" => "Institution du Sacré-Coeur à ROUEN",
        "descriptif1" => "Obtention du Baccalauréat général option <br>mathématiques et sciences économiques et <br>sociales",
    );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="curriculum vitae de Mathéo Batelier étudiant à la normandiewebschool">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="img/ico" href="img/favicon.ico">
    <title><?php echo $titrePage; ?></title>
</head>
<body>
    <main>
        <div id="border-left">
            <div id="gray-border-top">
                <h1><?php echo $titrePrincipal ?></h1>
            </div>
            <div id="border-between">
                <h2><?php echo $prenomNom; ?></h2>
            </div>
            <div id="gray-border-down">
                <h2 id="profil"><?php echo $titre;?></h2>
                <h4 class="sous-titre"><?php echo $sousTitre1;?></h4>
                <p class="text-left"><?php echo $dateDeNaissance;?></p>

                <h4 class="sous-titre"><?php echo $sousTitre2;?></h4>
                <p class="text-left"><?php echo $adresse;?></p>

                <h4 class="sous-titre"><?php echo $sousTitre3;?></h4>
                <p class="text-left"><?php echo $telephone ?></p>

                <h4 class="sous-titre"><?php echo $sousTitre4;?></h4>
                <p class="text-left"><?php echo $email ?></p>

                <h4 class="sous-titre"><?php echo $sousTitre5;?></h4>
                <ul class="liste">
                    <li><?php echo $listHobbies[0];?></li>
                    <li><?php echo $listHobbies[1];?></li>
                    <li><?php echo $listHobbies[2];?></li>
                    <li><?php echo $listHobbies[3];?></li>
                </ul>

                <h4 class="sous-titre">Réseaux</h4>
                <ul class="liste">
                    <li><?php echo $listReseaux[0];?></li>
                    <li><?php echo $listReseaux[1];?></li>
                </ul>
            </div>
        </div>

        <div id="border-right">
            <div id="exp-pro">
                <h2><?php echo $titreDroite1;?></h2>
                <div class="exp">
                    <div class="exp-1">
                        <h4><?php echo $competences["date"];?></h4>
                    </div>
                    <div class="exp-1-1">
                        <h4><?php echo $competences["titre"];?></h4>
                        <ul>
                            <li><?php echo $competences["Descriptif1"];?></li>
                            <li><?php echo $competences["Descriptif2"];?></li>
                        </ul>
                    </div>
                </div>
                <div class="exp">
                    <div class="exp-1">
                        <h4><?php echo $competences2["date"];?></h4>
                    </div>
                    <div class="exp-1-1-2">
                        <h4><?php echo $competences2["titre"];?></h4>
                        <ul>
                            <li><?php echo $competences2["Descriptif1"];?></li>
                            <li><?php echo $competences2["Descriptif2"];?></li>
                            <li><?php echo $competences2["Descriptif3"];?></li>
                            <li><?php echo $competences2["Descriptif4"];?></li>
                        </ul>
                    </div>
                </div>
                <div class="exp">
                    <div class="exp-1">
                        <h4><?php echo $competences3["date"];?></h4>
                    </div>
                    <div class="exp-1-1-2">
                        <h4><?php echo $competences3["titre"];?></h4>
                        <p><?php echo $competences3["Descriptif1"];?></p>
                    </div>
                </div>
            </div>
            <div id="formations">
                <h2><?php echo $titreDroite2 ?></h2>
                <div class="formations">
                    <div class="formations-1">
                        <h4><?php echo $formation["date"];?></h4>
                    </div>
                    <div class="formations-1-1">
                        <h4><?php echo $formation["titre"];?></h4>
                        <p><?php echo $formation["Descriptif1"];?></p>
                    </div>
                </div>
                <div class="formations">
                    <div class="formations-1">
                        <h4><?php echo $formation2["date"];?></h4>
                    </div>
                    <div class="formations-1-1">
                        <h4><?php echo $formation2["titre"];?></h4>
                        <p><?php echo $formation2["descriptif1"];?></p>
                    </div>
                </div>
            </div>
            <div id="competences">
                <h2><?php echo $titreDroite3;?></h2>
                <div id="competences-1">
                    <div class="competences-1-1">
                        <h4><?php echo $sousTitreDroite1?></h4>
                        <ul>
                            <li><?php echo $listWeb[0];?></li>
                            <li><?php echo $listWeb[1];?></li>
                            <li><?php echo $listWeb[2];?></li>
                            <li><?php echo $listWeb[3];?></li>
                        </ul>
                    </div>
                    <div class="competences1-2">
                        <h4><?php echo $sousTitreDroite2;?></h4>
                        <ul>
                            <li><?php echo $listAptitude[0];?></li>
                            <li><?php echo $listAptitude[1];?></li>
                            <li><?php echo $listAptitude[2];?></li>
                        </ul>
                    </div>
                </div>
                <div class="competences-2">
                    <h4><?php echo $sousTitreDroite3;?></h4>
                    <ul>
                        <li><?php echo $listLangage[0];?></li>
                        <li><?php echo $listLangage[1];?></li>
                        <li><?php echo $listLangage[2];?></li>
                        <li><?php echo $listLangage[3];?></li>
                        <li><?php echo $listLangage[4];?></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>