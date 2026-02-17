Après avoir exécuté la commande `docker compose up` ou 'docker compose up --build', le container est créé et lancé.

# docker compose up -d   
# docker exec -it symfony8-2305-prepa-web bash

1. Accéder au terminal du container web (myapi-symfony-2503-apache2)
2. Se positionner sur le chemin '/var/www/html'
    - Bien vérifier qu'il est vide (le vider si nécessaire)
3. Lancer l'installation de Symfony
    - `composer create-project symfony/skeleton:"8.0.*" .`
    - (Pensez à bien mettre le . à la fin de la commande (. = répertoire courant))
4. Patienter...

L'installation de Symfony est terminée

- Accéder à l'url http://127.0.0.1:8000
- Vous devriez voir la page par défaut de Symfony.

## Installation des dépendances Symfony

```sh
composer require api 
# recipes = no
composer require symfony/apache-pack
``` 

Cette commande va installer les dépendances nécessaires pour un projet d'API Rest.

Une fois les dépendances installées, accéder à l'url [http://localhost:8000/index.php/api/](http://localhost:8000/index.php/api/). Vous devriez voir une page ayant pour titre "Hello API Platform.

Le projet étant destiné à n'accueillir qu'une API, nous allons le configurer pour que l'adresse de base [http://localhost:8000/](http://localhost:8000/) pointe directement sur l'API.

Ouvrir le fichier `myapi/config/routes/api_platform.yaml`

Puis commenter la ligne `prefix: /api` en la prefixant avec un hashtag comme ceci : `# prefix: /api`.

Ouvrir le fichier `myapi/config/packages/api_platform.yaml`
ajouter =>
    formats:
        json: ['applcation/json']

# Configurer et créer la base de données

Ouvrir le fichier `myapi/.env`

Commenter la ligne `DATABASE_URL="postgre.....

et ajouter en dessous la ligne suivante : 

`DATABASE_URL="mysql://user:user@db:3306/db_myapi?serverVersion=11.8.5-MariaDB&charset=utf8mb4"`

Direction le terminal du conteneur Web :

```bash
cd /var/www/html
php bin/console doctrine:database:create
```

## Créer la 1ère entité.


```bash
cd /var/www/html
composer require symfony/maker-bundle --dev
php bin/console make:entity
# attention format property:
    #[ORM\Column(name: "city_name", length: 6)]
    private ?string $cityZipcode = null;

```

## Sauvegarder les changements

```bash
cd /var/www/html
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

# Autres commandes de migrations : 


```bash
# Afficher la version de la migration en cours
php bin/console doctrine:migrations:current   
# Afficher la version de la dernière migration  
php bin/console doctrine:migrations:latest   
# Afficher la liste de toutes les migrations et leurs statuts  
php bin/console doctrine:migrations:list     
# Afficher des informations sur l'état actuel des migrations et autres   
php bin/console doctrine:migrations:status      
```
relation :
 dans migration ajouter default dans la colone:
$this->addSql('ALTER TABLE ville ADD country_id INT NOT NULL DEFAULT 0');
et en base de donnée ajouter 0 comme pays (ou category)