# TP Php

## Tutoriel d'installation

### Xampp

* Tout d'abord, installez Xampp sur votre ordinateur.
* Lors de l'installation cochez les casses "Apache" et "MySQL".
* Lancez xampp
* Lorsque cela est fait configurez le port MySQL sur le port 3306: Vous pouvez faire cela depuis le menu config et "Ports and services settings".
* Lancez les services MySQL et Apache en cliquant sur "Start"

### Clone du dépot

* Enfin, dirigez vous dans le dossier xampp qui vient d'être créé lors de l'installation puis suivez le chemin suivant Xampp/htdocs/
* Ouvrez le dossier htdocs dans votre editeur de texte.
* Ouvrez un terminal et faites la commande suivante "git clone git@github.com:Akram-abdl/projet.git"

### Base de données

* Ouvrez votre localhost dans le port que vous utilisez et ouvrez phpmyadmin
* Cliquez sur "nouvelle base de données" et allez dans la section import
* Sélectionnez le fichier .sql disponible dans le dossier "projet" et éxécutez

## Utilisation

* Toujours dans le localhost allez à l'adresse suivante http://localhost:PORT/projet/index.php
* Vous voilà dans le menu de connexion remplissez les informations et cliquez sur "Envoyer"
* Dans la page principale vous avez accés aux profils des autres utilisateurs et avoir plus d'informations en cliquant sur leur profil
* En cliquant sur un profil vous pouvez changer ses informations simplement en entrant les nouvelles données dans le formulaire
* Sur le menu si vous êtes un admin ou une entreprise vous avez la possibilité de publier une offre
* Pour cela entrez votre text dans la zone de texte et cliquez sur "Envoyer"
* En cliquant sur home dans le menu vous revenez à la page d'accueil et si vous appuyez sur "Se déconnecter" vous vous déconnectez de votre compte
