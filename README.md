# Gestion de tournois Minecraft

### Setup l'environnement de dev:

D'abord il faut fork le repo en utilisant le bouton 'fork' sur [le repo](https://github.com/ReuS-SIO/Gestion-Tournois-Minecraft). Ensuite: 

```bash
# Clone le repo
git clone https://github.com/ReuS-SIO/Gestion-Tournois-Minecraft
cd Gestion-Tournois-Minecraft

# Définir la remote sur le fork
git remote add fork <URL DE TON REPO FORKé>
# Ouvrir vs code dans le bon dossier: 
code .
```

Pour push ton code sur ton fork utilise:
```bash
git push fork
```
ss
Ensuite il faut créer une pull request pour que Malo puisse accepter ou non les changements.

**ATTENTION**: 
Dès qu'un changement à lieu sur le repo original (ReuS-SIO/Gestion-Tournois-Minecraft), il faut impérativement utiliser la commande:
```bash 
git pull origin dev
```
Pour récupérer le code des collègues.  

# Créer la base de données pour l'environnement de dev

Créer la base de données:
```bash
createdb -U postgres -E UTF8 gestion_tournois_mc
```

Créer les tables:
```bash
psql -U postgres -d gestion_tournois_mc -f create_database.sql
```

Vérifier:
```bash
psql -U postgres -d gestion_tournois_mc
# \dt              -- liste les 7 tables
# \d match         -- détail d'une table + contraintes
# \di              -- les index
```

# Pour reset à 0 la database

Supprimer la base (toutes les données sont perdues) puis la recréer:
```bash
dropdb -U postgres gestion_tournois_mc
createdb -U postgres -E UTF8 gestion_tournois_mc
psql -U postgres -d gestion_tournois_mc -f create_database.sql
```

Si `dropdb` refuse parce que la base est utilisée, fermer les connexions ouvertes (serveur PHP, psql, pgAdmin) et réessayer. En dernier recours:
```bash
dropdb -U postgres --force gestion_tournois_mc
```

Pour vider les tables sans supprimer la base:
```bash
psql -U postgres -d gestion_tournois_mc -c "TRUNCATE resultat_match, participation, inscription, match, joueur, equipe, tournoi, carte, arbitre CASCADE;"
```

### Les rôles
- Chef de projet: Damien
- Git Master: Malo
- BDD: Tehie, Ricky, Sean
- Back-end: Ethan M, Elyakim, Ethan N, Gaël
- Front-end: Axel, Nicolas, Walu, Sosefo
- Testeur + Doc: Daniel

coucou