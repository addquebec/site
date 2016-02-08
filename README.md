# Site de l'ADD Québec

## Prérequis

- php 5.3+
- [composer](https://getcomposer.org/)


## Installation

- Clonez ce repo git
- Roulez la commande `composer install` (il faurdra la rouler à chaque mise-à-jour)
- Copiez le fichier .env.template vers .env et ajustez pour votre environnement


## Développement local

    cd www
    php -s localhost:3001


## Déploiement

- Ajouter le `remote` du serveur : `git remote add production addquebec@addquebec.ca:/home/addquebec/src`
- Pousser le code : `git push production master`
