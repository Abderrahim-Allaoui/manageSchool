<div align="center">

<img src="public/img/header.png" alt="manageSchool" width="820">

# 🏫 manageSchool

**Application de gestion scolaire — Students · Teachers · Admins · Library**
**School management application — Students · Teachers · Admins · Library**

[![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1-777BB4?logo=php&logoColor=white)](https://php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![Vite](https://img.shields.io/badge/Vite-4-646CFF?logo=vite&logoColor=white)](https://vitejs.dev)
[![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?logo=mysql&logoColor=white)](https://mysql.com)

</div>

---

## 🇫🇷 Présentation (Français)

Application web de **gestion scolaire** développée en Laravel 10. Elle permet
d'administrer quatre modules via des opérations CRUD complètes :

| Module | Fonctionnalités |
| --- | --- |
| 🎓 **Élèves** (`students`) | Nom, email, téléphone, section, photo — liste, création, détail, édition, suppression |
| 👨‍🏫 **Enseignants** (`teachers`) | Nom, prénom, email unique, mot de passe — CRUD complet |
| 🛡️ **Administrateurs** (`admins`) | Nom, email, mot de passe, rôle (`admin` / `teacher` / `student`), remember token |
| 📚 **Bibliothèque** (`books`) | Titre, auteur, ISBN, éditeur, année, nombre d'exemplaires — gestion du stock |

L'interface (Blade + Bootstrap 5 + Vite) part d'une page d'accueil en mosaïque :
chaque module est accessible en un clic, avec des pages de listage, de création
et d'édition.

**Projet de formation** — ENSA Kénitra, Génie Logiciel & Systèmes d'Information.

## 🇬🇧 Overview (English)

A **school management** web app built with Laravel 10 — full CRUD over four
domains: students, teachers, administrators and a library catalogue.
Blade templates + Bootstrap 5 (Vite), MySQL database, MVC structure.

**Training project** — ENSA Kénitra, Software Engineering & Information Systems.

---

## 🧰 Stack technique

| Layer | Technologies |
| --- | --- |
| Framework | Laravel 10 (MVC, Eloquent ORM, Blade) |
| Language | PHP 8.1 |
| Front-end | Blade templates · Bootstrap 5 · Sass · Vite 4 |
| Base de données | MySQL / MariaDB (Eloquent migrations) |
| Auth | Laravel Sanctum · `rememberToken` sur les administrateurs |
| Qualité | PHPUnit · Laravel Pint · Faker (factories & seeders) |

## 🚀 Installation

```bash
git clone https://github.com/Abderrahim-Allaoui/manageSchool.git
cd manageSchool

composer install
npm install

cp .env.example .env
php artisan key:generate

# configure la base de données dans .env, puis :
php artisan migrate
php artisan db:seed        # facultatif : données de démonstration

npm run dev                 # Vite (dev assets)
php artisan serve           # → http://localhost:8000
```

## 📁 Structure

```
app/Http/Controllers/     AdminController · BookController · StudentController · TeacherController
database/migrations/      students · teachers · admins · books
resources/views/
├── home.blade.php        page d'accueil en mosaïque
├── layout.blade.php      template de base
├── students/ teachers/ admins/ books/   vues CRUD (index, create, edit, show)
public/img/               icônes et visuels des modules
routes/web.php            routes REST + routes explicites par ressource
```

## 📌 À noter

- Les routes sont déclarées en `Route::resource(...)` **et** explicitement, pour
  garder un contrôle précis sur les URLs (`/students/{id}/edit`, etc.).
- Les profils administrateurs portent un `role` (`admin`, `teacher`, `student`),
  prêt pour une extension d'authentification et de contrôle d'accès.
- Le module `books` gère le nombre d'exemplaires — base d'un futur
  système d'emprunt/retour.

## 👤 Auteur

**Abderrahim Allaoui** — Génie Logiciel & Systèmes d'Information, ENSA Kénitra 🇲🇦
[github.com/Abderrahim-Allaoui](https://github.com/Abderrahim-Allaoui)

---

<div align="center">
<sub>Built with Laravel · Bootstrap · Vite — ENSA Kénitra</sub>
</div>
