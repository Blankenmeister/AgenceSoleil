# Agence de voyage  

### CONTEXTE  
Une agence voyage veut construire son nouveau site. Elle veut une interface admin pour gérer ses voyages, ses utilisateurs et les prises de contact des visiteurs via le formulaire du site.  
Comme elle prévoit de sortir dans un second temps une application mobile, il faut qu'une partie du site soit pensée connectable par API.  

En tant que développeur web, vous devrez prendre connaissance du cahier des charges,   proposer des maquettes responsive, un MCD, construire une architecture back avec   symfony, faire toute l'administration avec symfony et twig, mais gérer l'interface grand public avec next, via l'api.  

**En tant que developpeur full stack, pour arriver au bout de ce gros contrat, vous devrez:**    
Le cahier des charges sera respecté.  
Le site sera mis en ligne et fonctionnel.  
Le back sera sécurisé, autant pour l'API, joignable que par le site front,   que l'administration, avec les rôles et un accès sous authentification forte.  
Le site sera responsive.  
La mise en ligne sera documentée.  
Le projet sera conçu en déploiement continu, c'est-à-dire qu'à chaque mise à jour   fonctionnelle majeure, une mise en production sera effectuée, afin de toujours vérifier au fur et à mesure du développement que tout fonctionne.  
Le développement itératif vous permettra de prendre en compte les modifications à faire suite à des bugs détectés en prod, et d'éviter ainsi de tout planter le dernier jour.    
​
### PREREQUIS
**Il est nécessaire d'installer au préallable:**  
Symfony 7.0.7  
Next.js 14.2.3  
PHP 8.3.6     
MySQL 8.2.0  

### INSTALLATION EN LOCAL
1 - Cloner ce dépôt : git clone https://github.com/Blankenmeister/AgenceSoleil    
 
**Démarrage des serveurs:**  
**Rappel de la commande pour Symfony:**  
symfony console server: start -d  

Visitez http://127.0.0.1:8000/ pour voir l'application en action.  

**Rappel de la commande pour Next:**  
npm run dev  

Visitez http://localhost:3000 pour voir l'application en action.  

**Symfony:**  
2 - Lancer le serveur PHP (local via wamp)  
3 - Créer une base de données MySQL dans phpMyAdmin   
4 - Créer un fichier ".env.local" à la racine du projet symfony   
5 - Copier le contenu du ".env" dans ".env.local" et remplacer les bonnes informations pour la base de données.  

**Exemple:**  
6 - Décommenter cette ligne et remplacer le "app" par votre identifiant et "!ChangeMe!" par votre mot de passe.
Commenter les autres lignes relative à la base de données.  

**DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8.0.32 charset=utf8mb4"**  

**Lancez les migrations pour créer la base de données:**  
symfony console doctrine:migrations:migrate  
 
### ROUTE API  

- `/api/voyage` - GET - Renvoie les données de tous les voyages.  
- `/api/voyage/{nom}` - GET - Renvoie les données spécifique pour un voyage par le nom.  
- `/api/reservation/new` - POST - Renvoie les données du formulaire de réservation en base de données.  


**VERSIONS**  
Le programme a été conçu avec:    
Symfony 7.0.7  
Next.js 14.2.3  
PHP 8.3.6    
MySQL 8.2.0   


