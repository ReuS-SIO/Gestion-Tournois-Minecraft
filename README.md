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
git pull origin
```
Pour récupérer le code des collègues.  

#### Créer la base de données pour l'environnement de dev

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
*
### Les rôles
- Chef de projet: Damien
- Git Master: Malo
- BDD: Tehie, Ricky, Sean
- Back-end: Ethan M, Elyakim, Ethan N, Gaël
- Front-end: Axel, Nicolas, Walu, Sosefo
- Testeur + Doc: Daniel

coucou