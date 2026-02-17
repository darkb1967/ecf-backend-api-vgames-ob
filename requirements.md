- connexion a github avec mon compte

- fais un fork du depot demander

- aller dans l'endroit ou je vais cloner le dépot et git clone l'adresse du nouveau dépot: https://github.com/darkb1967/ecf-backend-api-vgames-ob.git

- Changement des mots de passe et port dans docker-compose.yml pour correspondre a ce qui est demandé dans readme.md

- ouvrir le terminal et créez le contenair docker compose up -d (en détacher)

- une fois créé aller dans docker desktop cliquer sur exec tapez "bash" et vous etes dans le répertoire:root@afe7fde6bf3d:/var/www/html#

- installer symfony:
composer create-project symfony/skeleton:"8.0.*" .

- voir si l'install s'est bien passé:http://localhost:9005/

- installer les dépendance: composer require api, composer require symfony/apache-pack

- modifier les fichiers api_platform. 
    - route: # prefix: /api.
    - packages: formats: json: ['applcation/json']. + petit extra "bienvenue dans.."

- Ouvrir le fichier `myapi/.env`, Commenter la ligne `DATABASE_URL="postgre.....
et ajouter en dessous la ligne suivante : `DATABASE_URL="mysql://userxx:userxx@db:3306/db_xx?serverVersion=11.8.5-MariaDB&charset=utf8mb4"`

- pour les entité installer : composer require symfony/maker-bundle --dev

- faire les entity pour Gizmodo et Publisher

- attribut gizmodo: game, year, dev

- attribut publisher: name

- php bin/console make:migration, -php bin/console doctrine:migrations:migrate

- Dans l'api, l'opération `POST` pour ajouter quelques jeux du jeu d'essai. ajouter les "publisher" avant.

- fais une relation entre gizmodo et publisher Manytoone

- modification de la migration pour mettre default 0

- saisir dans l'api en post quelques données de publisher et ensuite gizmodo avec le chemin pour le publisher /publisher/1

- dernier commit pout test et lien github: https://github.com/darkb1967/ecf-backend-api-vgames-ob.git


