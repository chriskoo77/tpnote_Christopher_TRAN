# Système de Réservations Symfony

## Description

Ce projet implémente un système de gestion des réservations pour une salle d'événements. Les utilisateurs peuvent créer et consulter leurs réservations, et les administrateurs ont un accès complet.

## Prérequis

- PHP 8.0+
- Symfony 5.3+
- Composer
- MySQL ou PostgreSQL

## Installation

1. Clonez le projet :
    ```bash
    git clone https://github.com/votre-repository.git
    cd votre-repository
    ```

2. Installez les dépendances :
    ```bash
    composer install
    ```

3. Configurez la base de données dans le fichier `.env` :
    ```
    DATABASE_URL="mysql://root:password@127.0.0.1:3306/reservation_db"
    ```

4. Créez la base de données et appliquez les migrations :
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5. Démarrez le serveur Symfony :
    ```bash
    symfony server:start
    ```

## Routes disponibles

- `/admin` : Accessible uniquement aux administrateurs.
- `/profile` : Accessible aux utilisateurs authentifiés pour voir et modifier leurs informations personnelles.
- `/reservations` : Accessible aux utilisateurs authentifiés pour gérer leurs réservations.

## Tests

1. Installez PHPUnit :
    ```bash
    composer require --dev phpunit
    ```

2. Exécutez les tests :
    ```bash
    vendor/bin/phpunit
    ```

