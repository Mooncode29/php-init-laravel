# Laravel - Simplon

Ce repo vous guidera pour apprendre les bases de Laravel à travers la création d'une app qui n'a rien à voir avec Twitter.

Installation
---
1. Cloner le repo `git clone https://github.com/amouillard/twotter`
2. Installer les dépendances `composer install` (si composer pas installé : https://getcomposer.org/download/)
3. Lancer le serveur local avec `php artisan serve`

Step 0
---

https://laravel.com/docs/5.3/routing

Ouvrir le fichier `routes/web.php`
Créer une route GET nommée 'about', sur l'url '/about'

Dans le navigateur, on doit pouvoir cliquer sur le bouton "about" et être redirigé vers la page "about" (déjà créée)


Step 1
---

https://laravel.com/docs/5.3/eloquent

Ouvrir le fichier `routes/web.php`
Dans le GET sur '/', ajouter les données de tous les Twoots (`Model::all()`)

Dans le navigateur, on doit voir un premier twoot qui était déjà ajouté en base de données.

Step 2
---

Ouvrir le fichier `routes/web.php`
Faire fonctionner la logique de création d'un twoot
Vérifier qu'on peut créer, voir et supprimer des twoots !

Step 3
---

Ajouter sur chaque nouveau twoot créé ' bla bla'.
Si on crée un twoot disant "Hello, world !" il doit s'afficher "Hello, world ! bla bla"

Bonus validation
---

Trouver un moyen d'empêcher la création d'un twoot vide.
https://laravel.com/docs/5.3/validation

Bonus timestamp de création
---

https://laravel.com/docs/5.3/eloquent-mutators#date-mutators

Dans le fichier `app.blade.php`, changer le "Créé il y a pas longtemps" par une date relative à la date actuelle ("8 minutes ago" ...)
Toutes les resources eloquent (comme $twoot dans l'exemple) contiennent deux attributs created_at et updated_at qui sont des instances Carbon !

Bonus vue pleine page
---

Créer une nouvelle vue "twoot.blade.php"
Quand l'utilisateur va sur l'url "/twoots/:twoot_id", renvoyer le text du twoot en grand dans une balise <h1>.