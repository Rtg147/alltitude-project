<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## A propos 

Ce projet a été élaboré avec Laravel, Vue.js, Vue Router ainsi qu'axios. Il permet un ajout simple d'utilisateurs à la base de données utilisant le modèle Elquent de laravel ainsi que le paradigme data driven de vuejs passant des props aux enfants et des évènements au parents.

## Partie Front-end
Le code source frontend se trouve à `/resources/js` il est compilé avec webpack et pointe la version compilé sur `public`
La structure des composants est la suivante :
``` bash
├── app.js
├── components
│   ├── Home.vue
│   ├── MainUserManagementApp.vue
│   ├── NewUser.vue
│   ├── NotFound.vue
│   └── UsersListDisplay.vue
└── routes.js
```
Le page `app.js`contient la base de notre application celle-ci héberge `Home.vue`qui en l'état actuel des lieux semble superflu au vu de la simplicité de l'application en l'état mais ci celle-ci venait à évoluer `Home`est la page d'accueil pour celle-ci. Au sein du composant `Home`nous avons `MainUserManagementApp.vue`qui est le composant principal contenant la logique métier de notre applicaton. `MainUserManagementApp.vue` contient:
``` bash
├── MainUserManagementApp.vue
│   ├── NewUser.vue
│   ├── NotFound.vue
│   └── UsersListDisplay.vue
└── routes.js
```
où `NewUser.vue`contient la logique métier de l'ajout d'utilisateur, `NotFound.vue` est la page 404, `UsersListDisplay.vue` le composant contenant la liste.

## Partie api
Pour la partie laravel le controleur se trouve sur `app/Http/ControllersUserControler` et nos routes dans `routes/api.php`. Notre modèle est dans `app/Models/Users` ainsi que nos factories : `database/factories/userFactory.php` et notre migration : `database/migrations/2021_04_05_194141_create_add_users_table`
