# ecf-backend-api-vgames

## Contexte

La Gizmondo est une console de jeux vidéo portable faisant également office d'appareil photo, GPS, lecteur audio/vidéo... Elle fut fabriquée de 2005 à 2008 par Tiger Telematics.

### Spécifications techniques
- CPU : Samsung 400 MHz ARM9
- GPU : NVIDIA GoForce 3D 4500
- Mémoire graphique: 1.2MB 128-bit SRAM 
- RAM: 128 MB 16-bit DDR 200Mhz
- ROM: 64 MB 
- Affichage : écran TFT couleur de 2,8 pouces 
- Palette graphique : 65 536 couleurs
- Résolution : 240×320 pixels
- Son : stéréo
- Autonomie : 4h en mode jeu, 3h en mode film, 12h en mode audio et 100h en veille.
- Dimensions : 138 × 82 × 32 mm
- Poids : 150g
- Autres : bluetooth 2, lecteur MP3, système de localisation GPS, lecteur de cartes mémoire SD, SMS/MMS, appareil photo numérique.

## Préparation.

1. Faites un FORK du dépôt du votre compte Github.

2. Cloner le dépôt en local et positionner vous dans le répertoire `symfony` avec votre terminal

3. Installer les dépendances : `composer install`

4. Mettre à jour les dépendances : `composer update`

5. Démarrer le serveur web : `php -S localhost:3000 -t public`

Accéder à l'api à implémenter : [http://localhost:3000/api/](http://localhost:3000/api/) 

Accéder à la page web à analyser: [http://localhost:3000/gizmondo.html](http://localhost:3000/gizmondo.html)


## Travail à réaliser

Dans le dossier public, vous trouverez une page web `gizmondo.html` qui liste les jeux de la console Gizmondo.

Votre travail consiste à créer les entités de l'API qui permet de faire fonctionner la page web en créant l'api correspondante (les appels API sont dans `/public/assets/GizmondoRepository`).

Vous ne devez, en aucun cas, modifier le code HTML, CSS ou JS présent dans le dossier `public`.

**2 entités sont attendues :** 
- Gizmondo (Endpoint = `GET /api/gizmondos/`)
- Publisher (Endpoints = `GET /api/publishers/` && ` GET /api/publishers/{id}`)

Vous ne devez implémenter que les opérations `GET`.

Les données du jeu d'essai sont disponibles sous forme d'insertions SQL dans le répertoire `_docs` du projet (faites correspondre vos entités avec la structure attendue).


### Ajouter un jeu Gizmondo

Dans l'api, ajouter l'opération `POST` à l'entité Gizmondo permettant l'ajout d'un jeu non répertorié.

L'opération doit échouer si l'une des conditions suivantes n'est pas respectée : 

- Les noms du jeu et du développeur font plus de 5 caractères.
- L'année est égale à l'une des valeur suivante : 2005, 2006, 2007, 2008
- Le nom du jeu n'est pas encore répertorié
- Le Publisher associé existe dans la base de données


# Restitution 

COMMIT + PUSH

Fournir le lien de votre dépôt à l'évaluateur
