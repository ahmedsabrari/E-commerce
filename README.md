<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ⚡ **Electro** - E-commerce Platform

**Une plateforme de commerce électronique pour l'achat de produits électroniques.**  
Développé avec **Laravel** (Backend) et **MySQL** (Base de données).

---

## 🚀 **Fonctionnalités**

- **Catalogue de produits** :  
  Naviguez à travers une large sélection de produits électroniques. Chaque produit dispose de détails comme le prix, la description et les spécifications techniques.

- **Gestion des utilisateurs** :  
  Inscription, connexion, et gestion des profils des utilisateurs (clients et administrateurs).

- **Panier d'achat** :  
  Ajoutez des produits au panier, mettez à jour les quantités et effectuez des paiements sécurisés.

- **Commande et suivi** :  
  Créez une commande, suivez l'état des commandes et recevez des notifications sur les mises à jour.

- **Administration** :  
  Gestion des produits, des utilisateurs, des commandes et des transactions pour les administrateurs.

---

## 📂 **Structure du Projet**

### 🛠 **Backend (Laravel)**  
Le backend est responsable de la gestion des données, de l'authentification des utilisateurs, du traitement des commandes et des paiements.

#### Structure des répertoires :
```
backend/
├── app/                # Code source de l'application
│   ├── Http/           # Contrôleurs, middleware, et requêtes
│   ├── Models/         # Modèles Eloquent pour interagir avec la base de données
│   └── ...
├── config/             # Configuration des services
├── database/           # Migrations, factories et seeders
├── routes/             # Définition des routes API
├── storage/            # Fichiers de stockage (logs, fichiers temporaires, etc.)
└── .env                # Variables d'environnement
```

### 🗄 **Base de données (MySQL)**  
La base de données MySQL gère toutes les informations relatives aux produits, utilisateurs et commandes.

---

## 🖥 **Prérequis**

Avant de commencer, assurez-vous d'avoir installé :

- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [Docker](https://www.docker.com/) (optionnel)

---

## ⚙️ **Installation**

### 🛠 **Backend (Laravel)**

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/your-repo/electro.git
   cd electro/backend
   ```

2. Installez les dépendances :
   ```bash
   composer install
   ```

3. Configurez le fichier `.env` :
   ```bash
   cp .env.example .env
   ```
   Mettez à jour les informations de connexion à la base de données dans `.env`.

4. Exécutez les migrations pour configurer la base de données :
   ```bash
   php artisan migrate
   ```

5. Démarrez le serveur Laravel :
   ```bash
   php artisan serve
   ```

---

## 🌟 **Utilisation**

- **Démarrer le backend** :  
  Laravel sera accessible à l'adresse `http://localhost:8000`.

- **Accédez à l'application** via l'API backend. Les points de terminaison sont disponibles pour interagir avec les données (produits, utilisateurs, commandes, etc.).

---

## 📊 **Points de terminaison API**

### 🔐 **Authentification**
- `POST /api/register` : Enregistrement d'un utilisateur.  
- `POST /api/login` : Connexion d'un utilisateur.  

### 🛒 **Panier d'achat**
- `GET /api/cart` : Récupérer les articles dans le panier.  
- `POST /api/cart` : Ajouter un produit au panier.  
- `DELETE /api/cart/{id}` : Supprimer un produit du panier.  

### 📦 **Commandes**
- `GET /api/orders` : Récupérer les commandes d'un utilisateur.  
- `POST /api/orders` : Créer une nouvelle commande.  
- `GET /api/orders/{id}` : Obtenir les détails d'une commande spécifique.  

---

## 🛠 **Technologies utilisées**

| **Technologie**    | **Rôle**                               |
|--------------------|---------------------------------------|
| **Laravel**        | Framework backend pour la gestion des API et des fonctionnalités de l'application |
| **MySQL**          | Base de données relationnelle pour stocker les informations des produits, utilisateurs, et commandes |

---

## 🤝 **Contribuer**

Les contributions sont les bienvenues ! 🎉

Pour contribuer :

1. **Forkez le dépôt**.
2. **Créez une branche** pour votre fonctionnalité ou correction de bug.
3. **Validez vos modifications** et poussez-les sur votre fork.
4. **Soumettez une pull request**.

---

## 📜 **Licence**

Ce projet est sous la **licence MIT**.  
Voir le fichier `LICENSE` pour plus de détails.

---

## 📞 **Contact**

Pour toute question ou demande de support, n'hésitez pas à nous contacter :

- **Ahmed Sabrari**  
- ✉️ Email : sabrari.ahmed0@gmail.com  
- 💼 LinkedIn : [Ahmed Sabrari](https://www.linkedin.com/in/ahmedsabrari/)

---
