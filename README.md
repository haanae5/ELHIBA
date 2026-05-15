

# 💎 ELHIBA

ELHIBA est un projet de site e-commerce dédié à la vente de bijoux pour femmes, développé dans le cadre du module **Technologie Web 2** avec Laravel.  
Cette plateforme permet aux utilisatrices de découvrir, consulter et acheter des bijoux en ligne via une interface moderne, intuitive et responsive.

---

## 👩‍💻 Réalisé par

- **IBRAHIMI HIBA**
- **HANAE ER-RAJY**

**Encadrant :** Pr. Marwane KZADRI  
**Filière :** Génie Informatique – 3ème année  
**Année universitaire :** 2025/2026  
**Université :** Université Privée de Fès  

---

## ✨ Fonctionnalités principales

- Authentification (connexion / inscription / déconnexion)
- Gestion des utilisateurs avec rôles distincts
- Catalogue de bijoux
- Consultation des détails produits
- Ajout au panier
- Gestion des commandes
- Paiement en ligne
- Tableau de bord administrateur
- Gestion des produits
- Gestion des commandes
- Gestion newsletter
- Upload d’images produits
- Interface responsive

---

## 🛠️ Stack technique & Technologies

- Laravel
- PHP
- MySQL
- Blade
- Livewire
- Alpine.js
- Tailwind CSS
- Daisy UI

---

## 📷 Interface Client

### Page d'accueil
<img src="PUT_HOME_IMAGE_HERE" width="100%" alt="Home Page">

### Boutique
<img src="PUT_SHOP_IMAGE_HERE" width="100%" alt="Shop Page">

### Détails produit
<img src="PUT_PRODUCT_IMAGE_HERE" width="100%" alt="Product Details">

### Panier
<img src="PUT_CART_IMAGE_HERE" width="100%" alt="Cart Page">

---

## 🔐 Dashboard Administrateur

### Gestion des bijoux
<img src="PUT_ADMIN_PRODUCTS_IMAGE_HERE" width="100%" alt="Admin Products">

### Ajouter un bijou
<img src="PUT_ADD_PRODUCT_IMAGE_HERE" width="100%" alt="Add Product">

### Modifier un bijou
<img src="PUT_EDIT_PRODUCT_IMAGE_HERE" width="100%" alt="Edit Product">

### Gestion des commandes
<img src="PUT_ORDERS_IMAGE_HERE" width="100%" alt="Orders">

### Newsletter
<img src="PUT_NEWSLETTER_IMAGE_HERE" width="100%" alt="Newsletter">

---

## ⚙️ Installation

```bash
git clone YOUR_REPOSITORY_LINK
cd ELHIBA
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

## 🔑 Comptes de test

### Admin
- Email : hanae@gmail.com
- Password : hanae123
### Client
- Email : hiba@gmail.com
- Password : hanae123

---

## 🗄️ Base de données

Le projet utilise MySQL avec migrations Laravel et seeders pour générer automatiquement les données de test.

---

## API sécurisée

Le projet contient plusieurs endpoints API retournant des données JSON sécurisées par authentification token.

Exemples :
- `/api/products`
- `/api/orders`
- `/api/users`

---

## 🎯 Objectif du projet

Concevoir une application web e-commerce complète respectant les exigences du module Laravel :
- CRUD complet
- Authentification
- Rôles utilisateurs
- Upload fichiers
- API sécurisée
- Interface responsive et moderne

---

## 

Ce projet a été réalisé dans un cadre pédagogique pour mettre en pratique les compétences acquises en développement web avec Laravel.
