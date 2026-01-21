
# Projet de Construction BTP - Laravel & React

## Description
Ce projet est une application de gestion pour une entreprise de construction BTP. Il est développé avec **Laravel** pour le backend et **React** pour le frontend. Le projet vise à fournir une plateforme où les services, projets réalisés, articles, membres et témoignages de l'entreprise sont présentés de manière visuelle et dynamique. Chaque section est équipée d'une fonctionnalité permettant de modifier, supprimer, ajouter et mettre à jour les éléments via un espace administrateur.

## Fonctionnalités principales

### 1. Services de l'entreprise
- Affichage des services proposés avec une image pour chaque service.
- Un bouton "Lire la suite" sous chaque image permettant d'afficher plus d'informations sur chaque service.

### 2. Projets réalisés
- Affichage des projets de construction réalisés par l'entreprise.
- Chaque projet est présenté avec une description et une image.
- Possibilité de visualiser les détails du projet en cliquant dessus.

### 3. Articles
- Une section permettant à l'entreprise de publier des articles relatifs à l'industrie du BTP.
- Possibilité d'ajouter, modifier ou supprimer des articles via l'interface administrateur.

### 4. Membres de l'entreprise
- Affichage de la liste des membres avec leurs rôles et descriptions.
- Possibilité d'ajouter, de modifier ou de supprimer des membres dans l'espace administrateur.

### 5. Témoignages
- Section où les clients peuvent laisser leurs témoignages.
- Interface pour l'administration permettant de gérer les témoignages (ajout, suppression, modification).

### 6. Espace Administrateur
- Un tableau de bord sécurisé où l'administrateur peut gérer les services, projets, articles, membres et témoignages.
- Interface utilisateur permettant des opérations CRUD (Créer, Lire, Mettre à jour, Supprimer) sur chaque élément.

### 7. Gestion des mails
- Utilisation de **Mailtrap** pour la configuration des mails afin de tester l'envoi d'emails en environnement de développement.

## Technologies utilisées

### Backend
- **Laravel**
- **Intervention\Image** (pour la gestion des images)
- **Mailtrap** (pour la gestion des emails)

### Frontend
- **React**

## Prérequis
Avant de commencer l'installation, assurez-vous d'avoir les outils suivants installés sur votre machine :

- **PHP 8.x**
- **Composer** (gestionnaire de dépendances PHP)
- **Node.js** et **npm** (gestionnaire de paquets Node.js)
- **MySQL** ou un autre SGBD compatible
- **Compte Mailtrap** (pour la gestion des emails)

## Installation

### Backend (Laravel)
1. Clonez le dépôt du backend :
   ```bash
   git clone https://github.com/votre-repository/backend.git
   cd backend

Installez les dépendances via Composer :
composer install

Copiez le fichier .env.example et renommez-le en .env :
cp .env.example .env

Configurez votre base de données dans le fichier .env.
Générer la clé d'application :
php artisan key:generate

Exécutez les migrations :
php artisan migrate

Lancez le serveur de développement :
php artisan serve

Frontend (React)
Clonez le dépôt du frontend :
git clone https://github.com/2kgelab1321/construction-backend.git
cd frontend

Installez les dépendances via npm :
npm install

Lancez le serveur de développement :
npm start

Configuration des emails (Mailtrap)
Créez un compte sur Mailtrap.
Récupérez les informations de configuration SMTP.
Ajoutez-les dans votre fichier .env :
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls

Contributions
Les contributions sont les bienvenues ! Veuillez suivre les étapes suivantes pour contribuer à ce projet :
Fork ce repository.
Créez une nouvelle branche :
git checkout -b feature/feature-name

Faites vos modifications.
Committez vos changements :
git commit -am 'Add new feature'

Push vers votre fork :
git push origin feature/feature-name

Ouvrez une pull request.
Licence
Ce projet est sous licence MIT. Consultez le fichier LICENSE pour plus de détails.
